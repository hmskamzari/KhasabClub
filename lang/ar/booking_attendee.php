<?php

return [

    'navigation' => [
        'group' => 'إدارة الحجوزات',
        'label' => 'صاحب الحجز',
        'plural' => 'أصحاب الحجز',
    ],

    'sections' => [
        'attendee_info'   => 'معلومات التواصل',
        'booking_info'    => 'معلومات الحجز',
        'ticket_info'     => 'تفاصيل الحجز',
        'extra_services'  => 'الخدمات الإضافية',
    ],

    'fields' => [
        'full_name'         => 'الاسم الكامل',
        'first_name'        => 'الاسم الأول',
        'last_name'         => 'اسم العائلة',
        'email'             => 'البريد الإلكتروني',
        'phone'             => 'رقم الهاتف',
        'date_of_birth'     => 'تاريخ الميلاد',
        'gender'            => 'الجنس',
        'nationality'       => 'الجنسية',
        'identity_number'   => 'رقم الهوية',
        'ticket_number'     => 'رقم الحجز',
        'ticket_type'       => 'نوع الحجز',
        'ticket_price'      => 'السعر',
        'email_sent'        => 'تم إرسال البريد',
        'email_sent_at'     => 'تاريخ إرسال البريد',
        'checked_in'        => 'تم تسجيل الدخول',
        'checked_in_at'     => 'وقت تسجيل الدخول',
        'booking_reference' => 'رقم مرجع الحجز',
        'event'             => 'الملعب',
        'event_date'        => 'تاريخ الحجز',
        'time'              => 'الوقت',
        'time_slot'         => 'الوقت',
        'booking_status'    => 'حالة الحجز',
        'service_name'      => 'الخدمة',
        'service_quantity'  => 'الكمية',
        'service_price'     => 'السعر',
        'qr_code'           => 'رمز QR',
        'created_at'        => 'تاريخ التسجيل',
    ],

    'columns' => [
        'name'              => 'الاسم',
        'email'             => 'البريد الإلكتروني',
        'ticket_number'     => 'رقم الحجز',
        'event'             => 'الملعب',
        'event_date'        => 'التاريخ',
        'ticket_type'       => 'نوع الحجز',
        'email_sent'        => 'البريد',
        'checked_in'        => 'تسجيل الدخول',
        'booking_reference' => 'رقم الحجز',
        'booking_status'    => 'حالة الحجز',
        'created_at'        => 'تاريخ التسجيل',
        'phone'             => 'رقم الهاتف',
    ],

    'actions' => [
        'resend_ticket'     => 'إعادة إرسال التأكيد',
        'download_ticket'   => 'تحميل التأكيد',
        'print_ticket'      => 'طباعة التأكيد',
        'check_in'          => 'تسجيل الدخول',
        'undo_check_in'     => 'إلغاء تسجيل الدخول',
        'view_booking'      => 'عرض الحجز',
    ],

    'tabs' => [
        'confirmed'      => 'مؤكد',
        'cancelled'      => 'ملغى',
        'all'            => 'جميع أصحاب الحجز',
        'checked_in'     => 'تم تسجيل دخولهم',
        'not_checked_in' => 'لم يسجلوا دخولهم',
        'email_sent'     => 'تم إرسال البريد',
        'email_pending'  => 'البريد معلق',
    ],

    'filters' => [
        'event'          => 'الملعب',
        'booking_status' => 'حالة الحجز',
        'checked_in'     => 'حالة تسجيل الدخول',
        'email_sent'     => 'حالة البريد الإلكتروني',
        'event_date'     => 'تاريخ الحجز',
        'time_slot'      => 'الفترة الزمنية',
        'ticket_type'    => 'نوع الحجز',
        'date_from'      => 'من تاريخ',
        'date_until'     => 'إلى تاريخ',
    ],

    'notifications' => [
        'ticket_resent'             => 'تم إعادة إرسال التأكيد',
        'ticket_resent_body'        => 'تم إرسال تأكيد الحجز إلى :email',
        'ticket_resend_failed'      => 'فشل الإرسال',
        'ticket_resend_failed_body' => 'تعذّر إعادة إرسال التأكيد. يرجى التحقق من البريد الإلكتروني.',
        'checked_in'                => 'تم تسجيل دخول صاحب الحجز',
        'checked_in_body'           => 'تم تسجيل دخول :name بنجاح.',
        'check_in_undone'           => 'تم إلغاء تسجيل الدخول',
        'check_in_undone_body'      => 'تم إلغاء تسجيل دخول :name.',
    ],

    'modals' => [
        'resend_heading'       => 'إعادة إرسال التأكيد',
        'resend_description'   => 'سيتم إعادة إرسال تأكيد الحجز إلى :email. هل تريد المتابعة؟',
        'resend_submit'        => 'نعم، أعد الإرسال',
        'check_in_heading'     => 'تسجيل دخول صاحب الحجز',
        'check_in_description' => 'تأكيد تسجيل دخول :name؟',
        'check_in_submit'      => 'تسجيل الدخول',
    ],

    'tooltips' => [
        'resend_ticket'   => 'إعادة إرسال بريد التأكيد لصاحب الحجز هذا',
        'download_ticket' => 'تحميل تأكيد PDF',
        'check_in'        => 'تسجيل دخول صاحب الحجز',
    ],

    'no_extra_services' => 'لا توجد خدمات إضافية محجوزة.',
    'no_qr_code'        => 'لم يتم إنشاء رمز QR بعد.',
    'no_pdf'            => 'لم يتم إنشاء تأكيد PDF بعد.',

];
