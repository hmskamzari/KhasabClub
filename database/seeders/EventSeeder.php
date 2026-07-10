<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\TimeSlot;
use App\Models\TicketType;

class EventSeeder extends Seeder
{
    public function run()
    {
        $event = Event::create([
            'title' => [
                'en' => 'Khasab Club Football Court',
                'ar' => 'ملعب كرة القدم - نادي خصب',
            ],
            'description' => [
                'en' => 'Book the Khasab Club football court by the hour.',
                'ar' => 'احجز ملعب كرة القدم في نادي خصب بالساعة.',
            ],
            'slug' => 'khasab-club-football-court',
            'location' => [
                'en' => 'Khasab Club, Khasab',
                'ar' => 'نادي خصب، خصب',
            ],
            'organizer' => [
                'en' => 'Khasab Club',
                'ar' => 'نادي خصب',
            ],
            'start_date' => now()->startOfDay(),
            'end_date' => now()->addYear(),
            'is_recurring' => true,
            'recurring_days' => ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'],
            'status' => 'published',
            'max_attendees' => 1,
        ]);

        // Hourly slots, 08:00-22:00. Capacity is tracked per specific date, so
        // we generate concrete TimeSlot rows for a practical rolling window
        // rather than for the full year the court stays bookable.
        $hourlySlots = collect(range(8, 21))->map(fn ($hour) => [
            'start_time' => sprintf('%02d:00', $hour),
            'end_time'   => sprintf('%02d:00', $hour + 1),
        ]);

        $dates = array_slice($event->getAvailableDates(), 0, 30);

        foreach ($dates as $date) {
            foreach ($hourlySlots as $slot) {
                TimeSlot::create([
                    'event_id' => $event->id,
                    'date' => $date,
                    'start_time' => $slot['start_time'],
                    'end_time' => $slot['end_time'],
                    'max_attendees' => 1,
                ]);
            }
        }

        TicketType::create([
            'event_id' => $event->id,
            'name' => ['en' => '1 Hour Court Booking', 'ar' => 'حجز الملعب لمدة ساعة'],
            'description' => ['en' => 'Full football court, 1 hour.', 'ar' => 'ملعب كرة قدم كامل لمدة ساعة.'],
            'price' => 15.00,
            'quantity_available' => 1,
        ]);
    }
}
