<?php

return [

    // ── Language switcher ─────────────────────────────────────────────────────
    'switch_to_arabic' => 'العربية',
    'switch_to_english' => 'English',

    // ── Progress stepper ──────────────────────────────────────────────────────
    'steps' => [
        'date'    => 'التاريخ',
        'time'    => 'الوقت',
        'details' => 'التفاصيل',
        'payment' => 'الدفع',
    ],

    // ── Common actions ────────────────────────────────────────────────────────
    'back'     => 'رجوع',
    'continue' => 'متابعة',

    // ── Unavailable / maintenance mode ────────────────────────────────────────
    'unavailable' => [
        'heading'           => 'قيد الصيانة',
        'draft_message'     => 'هذا الملعب قيد التحضير وغير متاح للحجز حالياً. يرجى المحاولة مرة أخرى قريباً.',
        'cancelled_message' => 'تم إغلاق هذا الملعب ولم يعد متاحًا للحجز.',
        'back_home'         => 'العودة إلى الصفحة الرئيسية',
    ],

    // ── Private / password-protected court ────────────────────────────────────
    'private' => [
        'heading'               => 'هذا الملعب خاص',
        'message'               => 'أدخل كلمة المرور للوصول إلى هذا الملعب.',
        'password_label'        => 'كلمة المرور',
        'password_placeholder'  => 'أدخل كلمة المرور',
        'submit'                => 'عرض الملعب',
        'incorrect'             => 'كلمة المرور غير صحيحة. يرجى المحاولة مرة أخرى.',
    ],

    // ── Step 1 — Select Date ──────────────────────────────────────────────────
    'step1' => [
        'heading'        => 'اختر التاريخ',
        'subheading'     => 'اختر التاريخ المناسب للملعب',
        'no_dates'       => 'لا توجد تواريخ متاحة',
        'no_dates_body'  => 'لا توجد مواعيد قادمة لهذا الملعب.',
        'sold_out'       => 'اكتمل الحجز',
        'sold_out_error' => 'اكتملت جميع الحجوزات لهذا التاريخ. الرجاء اختيار تاريخ آخر.',
    ],

    // ── Step 2 — Choose Time Slot ─────────────────────────────────────────────
    'step2' => [
        'heading'         => 'اختر الفترة الزمنية',
        'subheading'      => 'الفترات المتاحة ليوم',
        'full'            => 'محجوز',
        'available'       => 'متاح',
    ],

    // ── Step 3 — Booking ──────────────────────────────────────────────────────
    'step3' => [
        'heading'           => 'اختر حجزك',
        'subheading'        => 'حدد نوع الحجز والكمية المطلوبة',
        'n_selected'        => 'تم اختيار :n',
        'sold_out'          => 'اكتمل الحجز',
        'tickets_available' => 'متاح',
        'per_ticket'        => 'للحجز',
        'free'              => 'مجاني',
        'subtotal'          => 'المجموع الجزئي',
        'running_total'     => 'المجموع الحالي',
        'n_tickets'         => '(:n حجز)',
        'min_tickets'         => 'اختر :n حجز على الأقل للمتابعة',
        'dependency_required' => ':child تتطلب :parent — يرجى إضافة حجز :parent أولاً.',
        'requires_parent'     => 'تتطلب :parent',
        'add_parent_first'    => 'أضف :parent أولاً',
        'slot_limit_reached'  => 'لا توجد سعة متبقية في هذا الموعد لإضافة حجوزات أخرى.',
    ],

    // ── Step 4 — Extra Services ───────────────────────────────────────────────
    'step4' => [
        'heading'    => 'أضف خدمات إضافية',
        'subheading' => 'عزّز تجربتك بخيارات إضافية اختيارية',
        'no_extras'  => 'لا توجد خدمات إضافية لهذا الملعب.',
        'available'  => 'متاح',
        'per_ticket' => 'للحجز',
    ],

    // ── Step 5 — Booking Contact Details ──────────────────────────────────────
    'step5' => [
        'heading'                => 'بيانات التواصل',
        'subheading'             => 'أدخل بيانات كل حجز',
        'copy_contact'           => 'تطبيق بيانات جهة الاتصال الأولى على البقية',
        'copy_contact_hint'      => 'سيتم نسخها من جهة الاتصال الأولى',
        'attendee_n'             => 'جهة الاتصال :n',
        'primary'                => 'رئيسي',
        'first_name'             => 'الاسم الأول',
        'first_name_placeholder' => 'محمد',
        'last_name'              => 'اسم العائلة',
        'last_name_placeholder'  => 'الحمداني',
        'email_address'          => 'البريد الإلكتروني',
        'email_hint'             => 'سيُرسل تأكيد الحجز إلى هذا البريد',
        'phone_number'           => 'رقم الهاتف',
        'phone_invalid'          => 'يجب أن يكون رقم الهاتف من 7 إلى 15 رقمًا، ويمكن أن يبدأ بعلامة +.',
        'date_of_birth'          => 'تاريخ الميلاد',
        'date_of_birth_invalid'  => 'يرجى إدخال تاريخ ميلاد صحيح.',
        'date_of_birth_max_age'  => 'لا يمكن أن يتجاوز العمر :age سنة.',
        'date_of_birth_future'   => 'لا يمكن أن يكون تاريخ الميلاد في المستقبل.',
        'gender'                 => 'الجنس',
        'select_gender'          => 'اختر الجنس',
        'male'                   => 'ذكر',
        'female'                 => 'أنثى',
        'nationality'            => 'الجنسية',
        'nationality_no_results' => 'لم يتم العثور على دول',
        'identity_number'        => 'رقم الهوية',
        'terms_heading'          => 'الشروط والأحكام',
        'terms_agree'            => 'لقد قرأت وأوافق على',
        'terms_required'         => 'يجب الموافقة على الشروط والأحكام للمتابعة.',
        'continue_to_payment'    => 'الانتقال إلى الدفع',
        'validating'             => 'جارٍ التحقق...',
        'booking_summary'        => 'ملخص الحجز',
        'email_label'            => 'البريد الإلكتروني',
        'phone_label'            => 'الهاتف',
    ],

    // ── Step 6 — Payment ──────────────────────────────────────────────────────
    'step6' => [
        'heading'               => 'الدفع',
        'subheading'            => 'راجع طلبك وأكمل عملية الدفع',
        'thawani_title'         => 'ثواني',
        'thawani_subtitle'      => 'دفع آمن عبر الإنترنت مدعوم من ثواني',
        'thawani_redirect_note' => 'سيتم تحويلك إلى صفحة الدفع الآمنة لإتمام عملية الشراء.',
        'pay_at_door_title'     => 'الدفع عند الملعب',
        'pay_at_door_subtitle'  => 'ادفع نقدًا عند وصولك إلى الملعب',
        'free_title'            => 'دخول مجاني',
        'free_subtitle'         => 'لا يتطلب هذا الحجز أي رسوم',
        'pay_thawani_btn'       => 'الدفع عبر ثواني',
        'redirecting_thawani'   => 'جارٍ التحويل إلى ثواني...',
        'nbo_title'             => 'الدفع الموحّد - البنك الوطني العماني',
        'nbo_subtitle'          => 'دفع آمن عبر الإنترنت مدعوم من البنك الوطني العُماني',
        'nbo_redirect_note'     => 'سيتم تحويلك إلى صفحة الدفع الآمنة لإتمام عملية الشراء.',
        'pay_nbo_btn'           => 'الدفع الآن',
        'redirecting_nbo'       => 'جارٍ التحويل إلى NBO...',
        'confirm_booking'       => 'تأكيد الحجز',
        'processing'            => 'جارٍ المعالجة...',
        'order_summary'         => 'ملخص الطلب',
        'secured_by_thawani'    => 'مؤمَّن بواسطة ثواني',
        'secured_by_nbo'        => 'مؤمَّن بواسطة NBO',
    ],

    // ── Shared summary sidebar ────────────────────────────────────────────────
    'summary' => [
        'event'          => 'الملعب',
        'date'           => 'التاريخ',
        'time'           => 'الوقت',
        'tickets'        => 'الحجز',
        'extra_services' => 'الخدمات الإضافية',
        'attendees'      => 'جهات الاتصال',
        'total'          => 'الإجمالي',
    ],

    // ── Success page ──────────────────────────────────────────────────────────
    'success' => [
        'title'              => 'تم تأكيد الحجز',
        'heading'            => 'تم تأكيد الحجز!',
        'subheading'         => 'تم حجز ملعبك',
        'booking_reference'  => 'رقم الحجز',
        'event'              => 'الملعب',
        'date'               => 'التاريخ',
        'time'               => 'الوقت',
        'ticket_type'        => 'نوع الحجز',
        'quantity'           => 'الكمية',
        'ticket_unit'        => 'حجز/حجوزات',
        'total_paid'         => 'الإجمالي المدفوع',
        'confirmation_email' => 'تم إرسال بريد تأكيد إلى',
        'present_qr'         => 'يرجى إبراز رمز QR هذا عند الدخول',
        'print_ticket'       => 'طباعة التأكيد',
        'book_again'         => 'حجز جديد',
        'back_to_events'     => 'العودة إلى الصفحة الرئيسية',
    ],

    // ── Booking confirmation email ────────────────────────────────────────────
    'email' => [
        'subject'         => 'تأكيد الحجز - :reference',
        'confirmed'       => 'تم تأكيد الحجز!',
        'reference'       => 'الرقم المرجعي: :reference',
        'dear'            => 'عزيزي :name،',
        'valued_customer' => 'عميلنا الكريم',
        'details_below'   => 'تم تأكيد حجزك. يرجى الاطلاع على التفاصيل أدناه:',
        'event_details'   => 'تفاصيل الملعب',
        'event'           => 'الملعب',
        'location'        => 'الموقع',
        'date'            => 'التاريخ',
        'time'            => 'الوقت',
        'ticket_type'     => 'نوع الحجز',
        'quantity'        => 'الكمية',
        'extra_services'  => 'الخدمات الإضافية',
        'total_amount'    => 'المبلغ الإجمالي',
        'qr_heading'      => 'رمز QR الخاص بحجزك',
        'qr_notice'       => 'يرجى إبراز رمز QR هذا عند مدخل الملعب.',
        'support'         => 'إذا كان لديك أي استفسار، يرجى التواصل مع فريق الدعم.',
        'thank_you'       => 'شكرًا لحجزك معنا!',

        // Individual booking confirmation email
        'ticket_subject'        => 'تأكيد حجزك - :ticket_number',
        'ticket_heading'        => 'تأكيد حجزك',
        'ticket_hello'          => 'مرحباً :name!',
        'ticket_intro'          => 'شكراً لحجزك! تأكيدك جاهز. يرجى الاطلاع على تفاصيل حجزك أدناه:',
        'ticket_number'         => 'رقم الحجز',
        'ticket_attendee'       => 'جهة الاتصال',
        'ticket_extra_services' => 'الخدمات الإضافية المشمولة',
        'ticket_qr_heading'     => 'رمز QR الخاص بك',
        'ticket_qr_important'   => 'مهم',
        'ticket_qr_notice'      => 'يرجى إبراز رمز QR هذا عند مدخل الملعب.',
        'ticket_attachments'    => 'المرفقات',
        'ticket_pdf_label'      => 'تأكيد PDF (booking-:number.pdf)',
        'ticket_qr_label'       => 'رمز QR (qr-code-:number.png)',
        'ticket_see_you'        => 'نتطلع إلى رؤيتك في الملعب!',
        'ticket_reference'      => 'رقم الحجز',
        'ticket_automated'      => 'هذا بريد إلكتروني آلي. يرجى عدم الرد على هذه الرسالة.',
        'ticket_support'        => 'إذا كان لديك أي استفسار، يرجى التواصل مع فريق الدعم.',
        'ticket_all_rights'     => 'جميع الحقوق محفوظة.',

        // Combined bookings email (all contacts, sent to the first contact)
        'tickets_subject'      => 'تأكيدات حجزك - :reference',
        'tickets_heading'      => 'تأكيدات حجزك',
        'tickets_intro'        => 'شكراً لحجزك! جميع الحجوزات (:count) الخاصة بك جاهزة. يرجى الاطلاع على التفاصيل والمرفقات أدناه:',
        'tickets_list_heading' => 'الحجوزات',
    ],

    // ── Individual booking confirmation PDF ───────────────────────────────────
    'ticket' => [
        'event_ticket'      => 'تأكيد الحجز',
        'scan_to_verify'    => 'امسح للتحقق',
        'attendee'          => 'جهة الاتصال',
        'name'              => 'الاسم',
        'email'             => 'البريد الإلكتروني',
        'phone'             => 'الهاتف',
        'ticket_number'     => 'رقم الحجز',
        'ticket_type'       => 'نوع الحجز',
        'event_details'     => 'تفاصيل الملعب',
        'date'              => 'التاريخ',
        'time'              => 'الوقت',
        'location'          => 'الموقع',
        'organizer'         => 'المنظم',
        'extra_services'    => 'الخدمات الإضافية',
        'quantity'          => 'الكمية',
        'entry_pass'        => 'بطاقة الدخول',
        'present_qr'        => 'يرجى إبراز رمز QR هذا عند مدخل الملعب للتسجيل.',
        'present_barcode'   => 'يرجى إبراز هذا الباركود عند مدخل الملعب للتسجيل.',
        'booking_reference' => 'رقم الحجز',
        'booked_on'         => 'تم الحجز في',
        'support_note'      => 'لأي استفسارات، يرجى التواصل مع فريق الدعم.',
        'all_rights'        => 'جميع الحقوق محفوظة.',
    ],

];
