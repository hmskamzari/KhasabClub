<?php

return [

    'navigation' => [
        'group' => 'Booking Management',
        'label' => 'Booking Contact',
        'plural' => 'Booking Contacts',
    ],

    'sections' => [
        'attendee_info'   => 'Contact Information',
        'booking_info'    => 'Booking Information',
        'ticket_info'     => 'Booking Details',
        'extra_services'  => 'Extra Services',
    ],

    'fields' => [
        'full_name'         => 'Full Name',
        'first_name'        => 'First Name',
        'last_name'         => 'Last Name',
        'email'             => 'Email',
        'phone'             => 'Phone',
        'date_of_birth'     => 'Date of Birth',
        'gender'            => 'Gender',
        'nationality'       => 'Nationality',
        'identity_number'   => 'Identity Number',
        'ticket_number'     => 'Booking Number',
        'ticket_type'       => 'Pricing Tier',
        'ticket_price'      => 'Price',
        'email_sent'        => 'Email Sent',
        'email_sent_at'     => 'Email Sent At',
        'checked_in'        => 'Checked In',
        'checked_in_at'     => 'Checked In At',
        'booking_reference' => 'Booking Reference',
        'event'             => 'Football Court',
        'event_date'        => 'Booking Date',
        'time_slot'         => 'Time Slot',
        'booking_status'    => 'Booking Status',
        'service_name'      => 'Service',
        'service_quantity'  => 'Qty',
        'service_price'     => 'Price',
        'qr_code'           => 'QR Code',
        'created_at'        => 'Registered At',
    ],

    'columns' => [
        'name'              => 'Name',
        'email'             => 'Email',
        'ticket_number'     => 'Booking #',
        'event'             => 'Court',
        'event_date'        => 'Date',
        'time'              => 'Time',
        'ticket_type'       => 'Pricing Tier',
        'email_sent'        => 'Email',
        'checked_in'        => 'Checked In',
        'booking_reference' => 'Booking Ref',
        'booking_status'    => 'Booking Status',
        'created_at'        => 'Registered At',
        'phone'             => 'Phone',
    ],

    'actions' => [
        'resend_ticket'     => 'Resend Confirmation',
        'download_ticket'   => 'Download Confirmation',
        'print_ticket'      => 'Print Confirmation',
        'check_in'          => 'Check In',
        'undo_check_in'     => 'Undo Check-In',
        'view_booking'      => 'View Booking',
    ],

    'tabs' => [
        'confirmed'     => 'Confirmed',
        'cancelled'     => 'Cancelled',
        'all'           => 'All Booking Contacts',
        'checked_in'    => 'Checked In',
        'not_checked_in' => 'Not Checked In',
        'email_sent'    => 'Email Sent',
        'email_pending' => 'Email Pending',
    ],

    'filters' => [
        'event'          => 'Football Court',
        'booking_status' => 'Booking Status',
        'checked_in'     => 'Check-In Status',
        'email_sent'     => 'Email Status',
        'event_date'     => 'Booking Date',
        'time_slot'      => 'Time Slot',
        'ticket_type'    => 'Pricing Tier',
        'date_from'      => 'Date From',
        'date_until'     => 'Date Until',
    ],

    'notifications' => [
        'ticket_resent'        => 'Confirmation Resent',
        'ticket_resent_body'   => 'The booking confirmation has been resent to :email',
        'ticket_resend_failed' => 'Failed to Resend',
        'ticket_resend_failed_body' => 'Could not resend the confirmation. Please check the email address.',
        'checked_in'           => 'Booking Contact Checked In',
        'checked_in_body'      => ':name has been successfully checked in.',
        'check_in_undone'      => 'Check-In Undone',
        'check_in_undone_body' => ':name check-in has been reversed.',
    ],

    'modals' => [
        'resend_heading'     => 'Resend Confirmation',
        'resend_description' => 'This will resend the booking confirmation email to :email. Continue?',
        'resend_submit'      => 'Yes, Resend',
        'check_in_heading'   => 'Check In Booking Contact',
        'check_in_description' => 'Mark :name as checked in?',
        'check_in_submit'    => 'Check In',
    ],

    'tooltips' => [
        'resend_ticket'   => 'Resend confirmation email to this booking contact',
        'download_ticket' => 'Download the PDF confirmation',
        'check_in'        => 'Mark booking contact as checked in',
    ],

    'no_extra_services'   => 'No extra services were booked.',
    'no_qr_code'          => 'QR code not yet generated.',
    'no_pdf'              => 'PDF confirmation not yet generated.',

];
