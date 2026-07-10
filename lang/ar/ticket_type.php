<?php

return [

    'navigation' => [
        'group'  => 'إدارة الملاعب',
        'label'  => 'نوع الحجز',
        'plural' => 'أنواع الحجوزات',
    ],

    'sections' => [
        'information'         => 'معلومات نوع الحجز',
        'information_desc'    => 'حدّد أنواع الحجوزات للملاعب (عادي، سعر الأعضاء، سعر الزوار، إلخ)',
        'pricing'             => 'التسعير والسعة',
        'pricing_desc'        => 'حدد السعر والكمية المتاحة',
        'sale_period'         => 'فترة البيع',
        'sale_period_desc'    => 'اختياري: تحديد متى يمكن حجز هذا النوع',
        'status'              => 'الحالة والإعدادات',
        'dependency'          => 'الاعتمادية على حجز آخر',
        'dependency_desc'     => 'اختياري: يلزم اختيار نوع حجز آخر قبل إمكانية حجز هذا النوع',
        'sales_overview'      => 'نظرة عامة على المبيعات',
        'sales_overview_desc' => 'عرض إحصائيات المبيعات والتوفر الحالية',
    ],

    'fields' => [
        'event'                     => 'الملعب',
        'event_helper'              => 'اختر الملعب لنوع الحجز هذا',
        'name_en'                   => 'الاسم (إنجليزي)',
        'name_en_helper'            => 'أدخل اسم نوع الحجز بالإنجليزية',
        'name_ar'                   => 'الاسم (عربي)',
        'name_ar_helper'            => 'أدخل اسم نوع الحجز بالعربية',
        'description_en'            => 'الوصف (إنجليزي)',
        'description_ar'            => 'الوصف (عربي)',
        'price'                     => 'السعر',
        'price_helper'              => 'حدد السعر بالريال العماني',
        'quantity_available'        => 'الكمية المتاحة',
        'quantity_available_helper' => 'إجمالي الحجوزات المتاحة',
        'quantity_sold'             => 'الكمية المباعة',
        'quantity_sold_helper'      => 'يُحدَّث تلقائيًا عند الحجز',
        'sale_start_date'           => 'تاريخ بدء البيع',
        'sale_start_helper'         => 'اتركه فارغًا لعدم التقييد',
        'sale_end_date'             => 'تاريخ انتهاء البيع',
        'sale_end_helper'           => 'اتركه فارغًا لعدم التقييد',
        'is_active'                 => 'نشط',
        'is_active_helper'          => 'أنواع الحجوزات النشطة فقط هي المتاحة',
        'depends_on'                => 'تعتمد على',
        'depends_on_helper'         => 'يجب على المستخدم اختيار نوع الحجز الأصل أولاً قبل إضافة هذا النوع',
        'depends_on_placeholder'    => 'بلا اعتمادية (حجز مستقل)',
    ],

    'placeholders' => [
        'name_en'        => 'e.g., Standard, Member Rate, Guest Rate',
        'name_ar'        => 'مثال: عادي، سعر الأعضاء، سعر الزوار',
        'description_en' => 'Describe what this booking includes...',
        'description_ar' => 'اشرح ما يتضمنه هذا الحجز...',
    ],

    'create_event_form' => [
        'title_en'  => 'العنوان (إنجليزي)',
        'title_ar'  => 'العنوان (عربي)',
        'draft'     => 'مسودة',
        'published' => 'منشور',
    ],

    'sale_period_status' => [
        'always_available' => '✓ متاح للحجز دائمًا',
        'not_yet'          => '⚠ غير متاح بعد (يبدأ :date)',
        'ended'            => '✗ انتهت فترة البيع (:date)',
        'currently'        => '✓ متاح للحجز حاليًا',
        'pending'          => 'ستُطبَّق إعدادات فترة البيع بعد إنشاء نوع الحجز.',
    ],

    'sales_info' => [
        'pending'           => 'ستتوفر معلومات المبيعات بعد إنشاء نوع الحجز.',
        'sold'              => 'مباع',
        'available'         => 'متاح',
        'total'             => 'الإجمالي',
        'sales_progress'    => 'تقدم المبيعات',
        'revenue_generated' => 'الإيراد المحقق',
        'potential_revenue' => 'الإيراد المحتمل',
    ],

    'columns' => [
        'event'       => 'الملعب',
        'name'        => 'نوع الحجز',
        'price'       => 'السعر',
        'total'       => 'الإجمالي',
        'sold'        => 'المباع',
        'available'   => 'المتاح',
        'sold_pct'    => '% المباع',
        'revenue'     => 'الإيراد',
        'status'      => 'الحالة',
        'sale_period' => 'فترة البيع',
        'depends_on'  => 'تعتمد على',
        'bookings'    => 'الحجوزات',
        'created_at'  => 'تاريخ الإنشاء',
        'updated_at'  => 'تاريخ التعديل',
    ],

    'sale_period_column' => [
        'always' => 'دائمًا',
        'from'   => 'من :date',
        'until'  => 'حتى :date',
    ],

    'filters' => [
        'by_event'          => 'تصفية حسب الملعب',
        'status'            => 'الحالة',
        'status_all'        => 'جميع أنواع الحجوزات',
        'status_active'     => 'النشطة فقط',
        'status_inactive'   => 'غير النشطة فقط',
        'availability'      => 'التوفر',
        'availability_show' => 'عرض',
        'avail_available'   => 'الحجوزات المتاحة',
        'avail_sold_out'    => 'نفدت',
        'avail_almost'      => 'شبه نافدة (>80%)',
        'avail_low'         => 'مخزون منخفض (<50 متبقي)',
        'ind_available'     => 'الحجوزات المتاحة فقط',
        'ind_sold_out'      => 'النافدة فقط',
        'ind_almost'        => 'شبه نافدة (>80%)',
        'ind_low'           => 'مخزون منخفض (<50 متبقي)',
        'price_range'       => 'نطاق السعر',
        'price_from'        => 'من',
        'price_to'          => 'إلى',
        'ind_price_from'    => 'السعر من: $:amount',
        'ind_price_to'      => 'السعر إلى: $:amount',
    ],

    'actions' => [
        'new'                 => 'نوع حجز جديد',
        'deactivate'          => 'تعطيل',
        'activate'            => 'تفعيل',
        'activate_selected'   => 'تفعيل المحدد',
        'deactivate_selected' => 'تعطيل المحدد',
        'create_first'        => 'أنشئ أول نوع حجز',
    ],

    'modals' => [
        'deactivate_heading'     => 'تعطيل نوع الحجز',
        'activate_heading'       => 'تفعيل نوع الحجز',
        'deactivate_description' => 'لن يكون نوع الحجز هذا متاحًا.',
        'activate_description'   => 'سيصبح نوع الحجز هذا متاحًا.',
    ],

    'empty_state' => [
        'heading'     => 'لا توجد أنواع حجوزات بعد',
        'description' => 'أنشئ أنواع حجوزات لملاعبك لتفعيل الحجوزات.',
    ],

    'notifications' => [
        'status_updated'    => 'تم تحديث الحالة',
        'type_activated'    => 'تم تفعيل نوع الحجز',
        'type_deactivated'  => 'تم تعطيل نوع الحجز',
        'types_activated'   => 'تم تفعيل أنواع الحجوزات',
        'types_deactivated' => 'تم تعطيل أنواع الحجوزات',
        'cannot_delete'     => 'لا يمكن الحذف',
        'has_bookings'      => 'نوع الحجز هذا لديه حجوزات موجودة.',
        'bulk_has_bookings' => ':count نوع/أنواع حجوزات لديها حجوزات موجودة.',
        'created'           => 'تم إنشاء نوع الحجز بنجاح',
        'updated'           => 'تم تحديث نوع الحجز بنجاح',
    ],

    'suffix' => [
        'tickets' => 'حجز',
        'sold'    => 'مباع',
    ],

];
