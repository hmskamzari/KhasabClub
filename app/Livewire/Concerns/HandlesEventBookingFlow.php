<?php

namespace App\Livewire\Concerns;

use Exception;
use App\Models\Event;
use App\Models\TimeSlot;
use App\Models\TicketType;
use App\Models\BookingAttendee;
use App\Models\Booking;
use App\Models\BookingSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

// Domain logic shared by every booking wizard screen (public web + kiosk):
// slot selection, attendee building, and the stock-locked booking + attendee
// creation that belongs inside one DB transaction. Payment routing (which
// gateway, or which kiosk hardware) stays in each consuming component.
//
// Every event has exactly one active ticket type and every slot holds
// exactly one booking, so the flow is deliberately simple: pick a slot
// (price shown on the slot itself), enter attendee details, pay.
trait HandlesEventBookingFlow
{
    // Nullable so a kiosk not pinned to one event can leave this unset until
    // the customer picks one (step 0) — Livewire would error dehydrating an
    // uninitialized typed property, so `null` is the safe default everywhere.
    // The web flow always receives it via route-model binding before mount().
    public ?Event $event = null;
    public $selectedDate = null;
    public $selectedSlot = null;

    // The event's single active ticket type, resolved when a slot is picked.
    public ?int $ticketTypeId = null;

    /** @var array of attendee data arrays (always exactly one entry) */
    public $attendees = [];

    public bool $copyContactToAll = false;

    // Field visibility from settings
    public bool $showEmail       = true;
    public bool $showPhone       = true;
    public bool $showDateOfBirth = true;
    public bool $showGender      = true;
    public bool $showNationality = true;
    public bool $showIdentityNumber = true;
    public int  $maxAttendeeAge  = 75;

    // Terms and conditions
    public string $termsEn       = '';
    public string $termsAr       = '';
    public bool   $agreedToTerms = false;

    public $step       = 1;
    public $totalPrice = 0;

    // Per-request in-memory cache — not serialized by Livewire, so this is
    // refreshed each Livewire request but shared across all methods within it.
    private ?Collection $cachedTicketTypes = null;

    protected function loadedTicketTypes(): Collection
    {
        return $this->cachedTicketTypes ??= $this->event->ticketTypes()->where('is_active', true)->get();
    }

    public function rules(): array
    {
        $rules = [
            'selectedDate' => 'required',
            'selectedSlot' => 'required|exists:time_slots,id',
            'agreedToTerms' => ($this->termsEn || $this->termsAr) ? 'accepted' : 'nullable',
        ];

        foreach ($this->attendees as $i => $attendee) {
            $rules["attendees.$i.first_name"]    = 'required|string|max:255';
            $rules["attendees.$i.last_name"]     = 'required|string|max:255';
            $rules["attendees.$i.email"]         = $this->showEmail       ? 'required|email|max:255'  : 'nullable';
            $rules["attendees.$i.phone"]         = $this->showPhone       ? ['required', 'string', 'regex:/^\+?\d{7,15}$/'] : 'nullable';
            $rules["attendees.$i.date_of_birth"] = $this->showDateOfBirth
                ? "nullable|date|before_or_equal:today|after_or_equal:{$this->minBirthDate()}"
                : 'nullable';
            $rules["attendees.$i.gender"]        = $this->showGender      ? 'required|in:male,female' : 'nullable';
            $rules["attendees.$i.nationality"]   = $this->showNationality ? 'nullable|string|max:100' : 'nullable';
            $rules["attendees.$i.identity_number"] = $this->showIdentityNumber ? 'required|string|max:50' : 'nullable';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'attendees.*.date_of_birth.date'            => __('event_booking.step5.date_of_birth_invalid'),
            'attendees.*.date_of_birth.after_or_equal'  => __('event_booking.step5.date_of_birth_max_age', ['age' => $this->maxAttendeeAge]),
            'attendees.*.date_of_birth.before_or_equal' => __('event_booking.step5.date_of_birth_future'),
            'attendees.*.phone.regex'                   => __('event_booking.step5.phone_invalid'),
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'selectedDate'                => __('event_booking.step1.heading'),
            'selectedSlot'                => __('event_booking.step2.heading'),
            'agreedToTerms'                => __('event_booking.step5.terms_heading'),
            'attendees.*.first_name'      => __('event_booking.step5.first_name'),
            'attendees.*.last_name'       => __('event_booking.step5.last_name'),
            'attendees.*.email'          => __('event_booking.step5.email_address'),
            'attendees.*.phone'          => __('event_booking.step5.phone_number'),
            'attendees.*.date_of_birth'  => __('event_booking.step5.date_of_birth'),
            'attendees.*.gender'          => __('event_booking.step5.gender'),
            'attendees.*.nationality'    => __('event_booking.step5.nationality'),
            'attendees.*.identity_number' => __('event_booking.step5.identity_number'),
        ];
    }

    protected function minBirthDate(): string
    {
        return now()->subYears($this->maxAttendeeAge)->format('Y-m-d');
    }

    // Loads the global field-visibility/terms settings shared by every
    // booking screen. Call from mount(); payment settings are loaded
    // separately by each component since they differ per screen.
    protected function loadBookingFieldSettings(): void
    {
        $this->showEmail       = (bool) BookingSetting::get('show_email', true);
        $this->showPhone       = (bool) BookingSetting::get('show_phone', true);
        $this->showDateOfBirth = (bool) BookingSetting::get('show_date_of_birth', true);
        $this->showGender      = (bool) BookingSetting::get('show_gender', true);
        $this->showNationality = (bool) BookingSetting::get('show_nationality', true);
        $this->showIdentityNumber = (bool) BookingSetting::get('show_identity_number', true);
        $this->maxAttendeeAge  = (int) BookingSetting::get('max_attendee_age_years', 75);

        $this->termsEn = (string) BookingSetting::get('terms_en', '');
        $this->termsAr = (string) BookingSetting::get('terms_ar', '');
    }

    // Step 1 — pick a date, then move to step 2 to pick a slot.
    public function selectDate($date)
    {
        if (!in_array($date, $this->event->getBookableDates())) {
            session()->flash('error', __('That date is no longer available. Please choose another date.'));
            return;
        }

        if (in_array($date, $this->event->getSoldOutDates())) {
            session()->flash('error', __('event_booking.step1.sold_out_error'));
            return;
        }

        $this->selectedDate = $date;
        $this->selectedSlot = null;
        $this->step = 2;
    }

    // Step 2 — pick a slot. Picking a slot IS picking the (single) ticket
    // type, at quantity 1, so this jumps straight to the details step.
    public function selectSlot($slotId)
    {
        $slot = TimeSlot::where('event_id', $this->event->id)
            ->where('date', $this->selectedDate)
            ->find($slotId);

        if (!$slot || !$this->isSlotBookable($slot)) {
            session()->flash('error', __('That time slot is no longer available. Please choose another.'));
            return;
        }

        $ticketType = $this->loadedTicketTypes()->first();

        if (!$ticketType) {
            session()->flash('error', __('This event is not open for booking right now.'));
            return;
        }

        $this->selectedSlot = $slotId;
        $this->ticketTypeId = $ticketType->id;
        $this->buildAttendees();
        $this->calculateTotal();
        $this->step = 3;
    }

    // A slot is bookable if it's active and its start datetime hasn't passed.
    protected function isSlotBookable(TimeSlot $slot): bool
    {
        if (!$slot->is_active) {
            return false;
        }

        $slotStart = \Carbon\Carbon::parse(
            $slot->date->format('Y-m-d') . ' ' . $slot->start_time->format('H:i:s')
        );

        return $slotStart->isFuture();
    }

    // ── Price calculation ───────────────────────────────────────────────────

    public function calculateTotal(): void
    {
        $ticketType = $this->loadedTicketTypes()->firstWhere('id', $this->ticketTypeId);
        $this->totalPrice = $ticketType?->price ?? 0;
    }

    // ── Attendee helpers ────────────────────────────────────────────────────

    protected function buildAttendees(): void
    {
        $attendee = [
            'ticket_type_id' => $this->ticketTypeId,
            'first_name'     => '',
            'last_name'      => '',
            'email'          => '',
            'phone'          => '',
            'date_of_birth'  => null,
            'gender'         => null,
            'nationality'    => '',
            'identity_number' => '',
        ];

        // Preserve data already entered, e.g. going back and picking a different slot.
        if (isset($this->attendees[0])) {
            $attendee = array_merge($attendee, array_intersect_key($this->attendees[0], $attendee));
            $attendee['ticket_type_id'] = $this->ticketTypeId;
        }

        $this->attendees = [$attendee];
    }

    // When the checkbox is toggled, copy email + phone from attendee 0 to the rest
    public function updatedCopyContactToAll(bool $value): void
    {
        if ($value && !empty($this->attendees)) {
            $email = $this->attendees[0]['email'] ?? '';
            $phone = $this->attendees[0]['phone'] ?? '';

            foreach ($this->attendees as $i => &$attendee) {
                if ($i > 0) {
                    $attendee['email'] = $email;
                    $attendee['phone'] = $phone;
                }
            }
        }
    }

    // Propagate first-attendee email/phone changes when the copy option is on
    public function updatedAttendees($value, $key): void
    {
        if (!$this->copyContactToAll) return;

        $parts = explode('.', $key);
        if (($parts[0] ?? '') !== '0') return;
        if (!in_array($parts[1] ?? '', ['email', 'phone'])) return;

        $field = $parts[1];
        $newValue = $this->attendees[0][$field] ?? '';

        foreach ($this->attendees as $i => &$attendee) {
            if ($i > 0) {
                $attendee[$field] = $newValue;
            }
        }
    }

    // ── Navigation ──────────────────────────────────────────────────────────

    public function previousStep(): void
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    // Step 3 "Continue to Payment" — validate attendee details and move to
    // the payment step, or confirm immediately when nothing is payable.
    public function goToPaymentStep()
    {
        $this->validate();

        if ($this->totalPrice <= 0) {
            return $this->submitBooking();
        }

        $this->step = 4;
    }

    // ── Booking persistence ─────────────────────────────────────────────────
    // Locks the slot, creates the Booking + BookingAttendee inside one DB
    // transaction, and returns the created Booking.
    //
    // $resolveAttributes(float $ticketPrice, float $servicesPrice): array
    //     Called with the freshly recomputed price — returns the Booking
    //     attributes specific to the caller (source, payment_method, kiosk_id...).
    // $afterCreate(Booking $booking, float $ticketPrice, float $servicesPrice): void
    //     Runs inside the same transaction after the booking is persisted —
    //     e.g. deducting a kiosk wallet card's balance. Throwing here rolls
    //     back the whole booking, so a failed payment never leaves a stray row.
    protected function persistBooking(callable $resolveAttributes, ?callable $afterCreate = null): Booking
    {
        if (!$this->selectedSlot) {
            throw new Exception(__('Please select a time slot.'));
        }

        if (!in_array($this->selectedDate, $this->event->getBookableDates())) {
            throw new Exception(__('The selected date is no longer available. Please start over.'));
        }

        return DB::transaction(function () use ($resolveAttributes, $afterCreate) {
            $timeSlot = TimeSlot::where('event_id', $this->event->id)
                ->where('date', $this->selectedDate)
                ->lockForUpdate()
                ->find($this->selectedSlot);

            if (!$timeSlot || !$this->isSlotBookable($timeSlot)) {
                throw new Exception(__('Time slot is no longer available.'));
            }

            if (!$timeSlot->isAvailable(1)) {
                throw new Exception(__('Time slot is no longer available.'));
            }

            $ticketType = TicketType::where('id', $this->ticketTypeId)->lockForUpdate()->first();
            $ticketPrice = (float) ($ticketType?->price ?? 0);

            $booking = Booking::create(array_merge([
                'event_id'        => $this->event->id,
                'time_slot_id'    => $this->selectedSlot,
                'ticket_type_id'  => $this->ticketTypeId,
                'event_date'      => $this->selectedDate,
                'quantity'        => 1,
                'ticket_price'    => $ticketPrice,
                'services_price'  => 0,
                'total_price'     => $ticketPrice,
                'locale'          => app()->getLocale(),
                'status'          => 'pending',
                'payment_status'  => 'pending',
                'ip_address'      => request()->ip(),
                'user_agent'      => request()->userAgent(),
            ], $resolveAttributes($ticketPrice, 0)));

            $attendeeData = $this->attendees[0] ?? [];

            BookingAttendee::create([
                'booking_id'     => $booking->id,
                'ticket_type_id' => $this->ticketTypeId,
                'ticket_price'   => $ticketPrice,
                'first_name'     => $attendeeData['first_name'] ?? '',
                'last_name'      => $attendeeData['last_name'] ?? '',
                'email'          => $this->showEmail       ? ($attendeeData['email'] ?? '')         : '',
                'phone'          => $this->showPhone       ? ($attendeeData['phone'] ?? null)        : null,
                'date_of_birth'  => $this->showDateOfBirth ? ($attendeeData['date_of_birth'] ?? null) : null,
                'gender'         => $this->showGender      ? ($attendeeData['gender'] ?? null)       : null,
                'nationality'    => $this->showNationality ? ($attendeeData['nationality'] ?? null)  : null,
                'identity_number' => $this->showIdentityNumber ? ($attendeeData['identity_number'] ?? null) : null,
            ]);

            if ($afterCreate) {
                $afterCreate($booking, $ticketPrice, 0);
            }

            return $booking;
        });
    }
}
