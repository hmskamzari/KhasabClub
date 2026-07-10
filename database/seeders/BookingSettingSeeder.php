<?php

namespace Database\Seeders;

use App\Models\BookingSetting;
use Illuminate\Database\Seeder;

class BookingSettingSeeder extends Seeder
{
    public function run(): void
    {
        BookingSetting::set('show_date_of_birth', 'false');
        BookingSetting::set('show_gender', 'false');
        BookingSetting::set('show_nationality', 'false');
        BookingSetting::set('show_identity_number', 'false');
        BookingSetting::set('show_phone', 'true');
        BookingSetting::set('show_email', 'true');
        BookingSetting::set('max_tickets_per_booking', '1');
        BookingSetting::set('min_tickets_per_booking', '1');

        BookingSetting::set('site_name_en', 'Khasab Club');
        BookingSetting::set('site_name_ar', 'نادي خصب');
        BookingSetting::set('primary_color', '#0f766e');
        BookingSetting::set('secondary_color', '#14b8a6');
    }
}
