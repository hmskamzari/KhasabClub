<?php

return [

    // ── Language switcher ─────────────────────────────────────────────────────
    'switch_to_arabic' => 'العربية',
    'switch_to_english' => 'English',

    // ── Progress stepper ──────────────────────────────────────────────────────
    'steps' => [
        'date'    => 'Date',
        'time'    => 'Time',
        'details' => 'Details',
        'payment' => 'Payment',
    ],

    // ── Common actions ────────────────────────────────────────────────────────
    'back'     => 'Back',
    'continue' => 'Continue',

    // ── Unavailable / maintenance mode ────────────────────────────────────────
    'unavailable' => [
        'heading'           => 'Under Maintenance',
        'draft_message'     => 'This court is being prepared and is not open for booking yet. Please check back soon.',
        'cancelled_message' => 'This court has been closed and is no longer available for booking.',
        'back_home'         => 'Back to Home',
    ],

    // ── Private / password-protected court ──────────────────────────────────
    'private' => [
        'heading'          => 'This Court is Private',
        'message'          => 'Enter the access password to view this court.',
        'password_label'   => 'Password',
        'password_placeholder' => 'Enter password',
        'submit'           => 'View Court',
        'incorrect'        => 'Incorrect password. Please try again.',
    ],

    // ── Step 1 — Select Date ──────────────────────────────────────────────────
    'step1' => [
        'heading'         => 'Select a Date',
        'subheading'      => 'Choose your preferred court date',
        'no_dates'        => 'No available dates',
        'no_dates_body'   => 'There are no upcoming dates for this court.',
        'sold_out'        => 'Fully Booked',
        'sold_out_error'  => 'All slots for that date are fully booked. Please choose another date.',
    ],

    // ── Step 2 — Choose Time Slot ─────────────────────────────────────────────
    'step2' => [
        'heading'          => 'Choose a Time Slot',
        'subheading'       => 'Available slots for',
        'full'             => 'Booked',
        'available'        => 'Available',
    ],

    // ── Step 3 — Booking ──────────────────────────────────────────────────────
    'step3' => [
        'heading'          => 'Pick Your Booking',
        'subheading'       => 'Select a pricing tier and how many bookings you need',
        'n_selected'       => ':n selected',
        'sold_out'         => 'Fully Booked',
        'tickets_available' => 'available',
        'per_ticket'       => 'per booking',
        'free'             => 'Free',
        'subtotal'         => 'subtotal',
        'running_total'    => 'Running Total',
        'n_tickets'        => '(:n booking(s))',
        'min_tickets'         => 'Select at least :n booking(s) to continue',
        'dependency_required' => ':child requires :parent — please add a :parent booking first.',
        'requires_parent'     => 'Requires :parent',
        'add_parent_first'    => 'Add :parent first',
        'slot_limit_reached'  => 'This time slot has no more remaining capacity for additional bookings.',
    ],

    // ── Step 4 — Extra Services ───────────────────────────────────────────────
    'step4' => [
        'heading'    => 'Add Extra Services',
        'subheading' => 'Enhance your experience with optional add-ons',
        'no_extras'  => 'No extra services available for this court.',
        'available'  => 'available',
        'per_ticket' => 'per booking',
    ],

    // ── Step 5 — Booking Contact Details ─────────────────────────────────────
    'step5' => [
        'heading'              => 'Booking Contact Details',
        'subheading'           => 'Fill in the details for each booking',
        'copy_contact'         => "Apply first contact's details to all others",
        'copy_contact_hint'    => 'will be copied from Contact 1',
        'attendee_n'           => 'Contact :n',
        'primary'              => 'primary',
        'first_name'           => 'First Name',
        'first_name_placeholder' => 'John',
        'last_name'            => 'Last Name',
        'last_name_placeholder' => 'Doe',
        'email_address'        => 'Email Address',
        'email_hint'           => 'Booking confirmation will be sent here',
        'phone_number'         => 'Phone Number',
        'phone_invalid'        => 'Phone number must be 7 to 15 digits, optionally starting with +.',
        'date_of_birth'        => 'Date of Birth',
        'date_of_birth_invalid' => 'Please enter a valid date of birth.',
        'date_of_birth_max_age' => 'Age cannot exceed :age years.',
        'date_of_birth_future' => 'Date of birth cannot be in the future.',
        'gender'               => 'Gender',
        'select_gender'        => 'Select gender',
        'male'                 => 'Male',
        'female'               => 'Female',
        'nationality'          => 'Nationality',
        'nationality_no_results' => 'No countries found',
        'identity_number'      => 'Identity Number',
        'terms_heading'        => 'Terms & Conditions',
        'terms_agree'          => 'I have read and agree to the',
        'terms_required'       => 'You must agree to the terms and conditions to proceed.',
        'continue_to_payment'  => 'Continue to Payment',
        'validating'           => 'Validating...',
        'booking_summary'      => 'Booking Summary',
        'email_label'          => 'Email',
        'phone_label'          => 'phone',
    ],

    // ── Step 6 — Payment ──────────────────────────────────────────────────────
    'step6' => [
        'heading'                => 'Payment',
        'subheading'             => 'Review your order and complete payment',
        'thawani_title'          => 'Thawani',
        'thawani_subtitle'       => 'Secure online payment powered by Thawani',
        'thawani_redirect_note'  => 'You will be redirected to the Thawani secure payment page to complete your purchase.',
        'pay_at_door_title'      => 'Pay at Court',
        'pay_at_door_subtitle'   => 'Pay with cash when you arrive at the court',
        'free_title'             => 'Free Entry',
        'free_subtitle'          => 'No payment required for this booking',
        'pay_thawani_btn'        => 'Pay with Thawani',
        'redirecting_thawani'    => 'Redirecting to Thawani...',
        'nbo_title'              => 'NBO Unified Checkout',
        'nbo_subtitle'           => 'Secure online payment powered by National Bank of Oman',
        'nbo_redirect_note'      => 'You will be redirected to the NBO secure payment page to complete your purchase.',
        'pay_nbo_btn'            => 'Pay Now',
        'redirecting_nbo'        => 'Redirecting to NBO...',
        'confirm_booking'        => 'Confirm Booking',
        'processing'             => 'Processing...',
        'order_summary'          => 'Order Summary',
        'secured_by_thawani'     => 'Secured by Thawani',
        'secured_by_nbo'         => 'Secured by NBO',
    ],

    // ── Shared summary sidebar ────────────────────────────────────────────────
    'summary' => [
        'event'          => 'Court',
        'date'           => 'Date',
        'time'           => 'Time',
        'tickets'        => 'Booking',
        'extra_services' => 'Extra Services',
        'attendees'      => 'Contacts',
        'total'          => 'Total',
    ],

    // ── Success page ──────────────────────────────────────────────────────────
    'success' => [
        'title'                 => 'Booking Confirmed',
        'heading'               => 'Booking Confirmed!',
        'subheading'            => 'Your court is reserved',
        'booking_reference'     => 'Booking Reference',
        'event'                 => 'Court',
        'date'                  => 'Date',
        'time'                  => 'Time',
        'ticket_type'           => 'Pricing Tier',
        'quantity'              => 'Quantity',
        'ticket_unit'           => 'booking(s)',
        'total_paid'            => 'Total Paid',
        'confirmation_email'    => 'A confirmation email has been sent to',
        'present_qr'            => 'Present this QR code at the court entrance',
        'print_ticket'          => 'Print Confirmation',
        'book_again'            => 'Book Again',
        'back_to_events'        => 'Back to Home',
    ],

    // ── Booking confirmation email ────────────────────────────────────────────
    'email' => [
        'subject'         => 'Booking Confirmation - :reference',
        'confirmed'       => 'Booking Confirmed!',
        'reference'       => 'Reference: :reference',
        'dear'            => 'Dear :name,',
        'valued_customer' => 'Valued Customer',
        'details_below'   => 'Your booking has been confirmed. Please find the details below:',
        'event_details'   => 'Court Details',
        'event'           => 'Court',
        'location'        => 'Location',
        'date'            => 'Date',
        'time'            => 'Time',
        'ticket_type'     => 'Pricing Tier',
        'quantity'        => 'Quantity',
        'extra_services'  => 'Extra Services',
        'total_amount'    => 'Total Amount',
        'qr_heading'      => 'Your Booking QR Code',
        'qr_notice'       => 'Please present this QR code at the court entrance.',
        'support'         => 'If you have any questions, please contact our support team.',
        'thank_you'       => 'Thank you for booking with us!',

        // Individual booking confirmation email
        'ticket_subject'       => 'Your Booking Confirmation - :ticket_number',
        'ticket_heading'       => 'Your Booking Confirmation',
        'ticket_hello'         => 'Hello :name!',
        'ticket_intro'         => 'Thank you for your booking! Your confirmation is ready. Please find your booking details below:',
        'ticket_number'        => 'Booking Number',
        'ticket_attendee'      => 'Booking Contact',
        'ticket_extra_services' => 'Extra Services Included',
        'ticket_qr_heading'    => 'Your QR Code',
        'ticket_qr_important'  => 'Important',
        'ticket_qr_notice'     => 'Please present this QR code at the court entrance.',
        'ticket_attachments'   => 'Attachments',
        'ticket_pdf_label'     => 'PDF Confirmation (booking-:number.pdf)',
        'ticket_qr_label'      => 'QR Code (qr-code-:number.png)',
        'ticket_see_you'       => 'We look forward to seeing you at the court!',
        'ticket_reference'     => 'Booking Reference',
        'ticket_automated'     => 'This is an automated email. Please do not reply to this message.',
        'ticket_support'       => 'If you have any questions, please contact support.',
        'ticket_all_rights'    => 'All rights reserved.',

        // Combined bookings email (all contacts, sent to the first contact)
        'tickets_subject'      => 'Your Booking Confirmations - :reference',
        'tickets_heading'      => 'Your Booking Confirmations',
        'tickets_intro'        => 'Thank you for your booking! All :count booking(s) are ready. Please find the details and attachments below:',
        'tickets_list_heading' => 'Bookings',
    ],

    // ── Individual booking confirmation PDF ───────────────────────────────────
    'ticket' => [
        'event_ticket'      => 'Booking Confirmation',
        'scan_to_verify'    => 'Scan to verify',
        'attendee'          => 'Booking Contact',
        'name'              => 'Name',
        'email'             => 'Email',
        'phone'             => 'Phone',
        'ticket_number'     => 'Booking Number',
        'ticket_type'       => 'Pricing Tier',
        'event_details'     => 'Court Details',
        'date'              => 'Date',
        'time'              => 'Time',
        'location'          => 'Location',
        'organizer'         => 'Organizer',
        'extra_services'    => 'Extra Services',
        'quantity'          => 'Quantity',
        'entry_pass'        => 'Entry Pass',
        'present_qr'        => 'Present this QR code at the court entrance for check-in.',
        'present_barcode'   => 'Present this barcode at the court entrance for check-in.',
        'booking_reference' => 'Booking Reference',
        'booked_on'         => 'Booked on',
        'support_note'      => 'For questions, please contact support.',
        'all_rights'        => 'All rights reserved.',
    ],

];
