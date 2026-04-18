<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            // Home Hero
            [
                'key' => 'home_hero_title',
                'label' => 'Hero Title',
                'value' => 'Time Saves Lives.<br /><span style="color: #D31111;">Buffer Zone</span> Saves You Both.',
                'type' => 'longtext',
                'section' => 'home',
            ],
            [
                'key' => 'home_hero_subtitle',
                'label' => 'Hero Subtitle',
                'value' => 'Professional event medical services tailored to your unique requirements. Qualified Advanced Life Support practitioners on standby — for every event, every time.',
                'type' => 'longtext',
                'section' => 'home',
            ],
            [
                'key' => 'home_location_label',
                'label' => 'Location Label',
                'value' => 'Gauteng, South Africa',
                'type' => 'text',
                'section' => 'home',
            ],
            
            // Stats (Mini labels in Hero)
            ['key' => 'home_stat_cert', 'label' => 'Hero Stat 1', 'value' => 'ALS Certified', 'type' => 'text', 'section' => 'home'],
            ['key' => 'home_stat_ecp',  'label' => 'Hero Stat 2', 'value' => 'ECP Practitioners', 'type' => 'text', 'section' => 'home'],
            ['key' => 'home_stat_care', 'label' => 'Hero Stat 3', 'value' => 'Critical Care', 'type' => 'text', 'section' => 'home'],
            ['key' => 'home_stat_work', 'label' => 'Hero Stat 4', 'value' => 'Workshops', 'type' => 'text', 'section' => 'home'],

            // Services
            [
                'key' => 'home_services_subtitle',
                'label' => 'Services Section Subtitle',
                'value' => 'Whether it\'s a rugby match, a corporate gala, or a community market — we have the qualified team and equipment to keep your event safe.',
                'type' => 'longtext',
                'section' => 'home',
            ],

            // About
            [
                'key' => 'home_about_title',
                'label' => 'About Section Title',
                'value' => 'Excellence in Emergency Care',
                'type' => 'text',
                'section' => 'home',
            ],
            [
                'key' => 'home_about_text',
                'label' => 'About Section Text',
                'value' => 'At BufferZone EMS, we believe every event deserves a safety net of the highest caliber. Our team bridges the gap between high-stakes medical needs and the dynamic environments of live events — providing a professional, clinical, and human-centric medical "buffer zone."',
                'type' => 'longtext',
                'section' => 'home',
            ],
            // Images
            [
                'key' => 'home_hero_image',
                'label' => 'Hero Background Image',
                'value' => 'assets/images/IMG-20260314-WA0017.jpg',
                'type' => 'image',
                'section' => 'home',
            ],
            [
                'key' => 'home_service_1_image',
                'label' => 'Service 1 (EMS) Image',
                'value' => 'assets/images/IMG-20260314-WA0005.jpg',
                'type' => 'image',
                'section' => 'home',
            ],
            [
                'key' => 'home_service_2_image',
                'label' => 'Service 2 (Training) Image',
                'value' => 'assets/images/IMG-20260314-WA0009.jpg',
                'type' => 'image',
                'section' => 'home',
            ],
            [
                'key' => 'home_service_3_image',
                'label' => 'Service 3 (Staff) Image',
                'value' => 'assets/images/IMG-20260314-WA0018.jpg',
                'type' => 'image',
                'section' => 'home',
            ],
            [
                'key' => 'home_about_image',
                'label' => 'About Section Image',
                'value' => 'assets/images/IMG-20260314-WA0018.jpg',
                'type' => 'image',
                'section' => 'home',
            ],
            // About Page
            [
                'key' => 'about_title',
                'label' => 'About Page Title',
                'value' => 'About Us',
                'type' => 'text',
                'section' => 'about',
            ],
            [
                'key' => 'about_subtitle',
                'label' => 'About Page Subtitle',
                'value' => 'Excellence in Emergency Medical Services with a commitment to Gauteng\'s safety.',
                'type' => 'text',
                'section' => 'about',
            ],
            [
                'key' => 'about_mission_text',
                'label' => 'Mission Statement',
                'value' => 'At Buffer Zone EMS, we believe that \'Time Saves Lives\'. Our mission is to provide rapid, professional, and reliable emergency medical support when every second counts.',
                'type' => 'longtext',
                'section' => 'about',
            ],
            [
                'key' => 'about_bbbee_text',
                'label' => 'B-BBEE & Experience Text',
                'value' => 'We are a Level 1 B-BBEE Contributor Directors experience in EMS: 3 decades of combined experience in EMS, Former HPCSA board membership, former Department of Health Licensing and Inspectorate Authority inspector.',
                'type' => 'longtext',
                'section' => 'about',
            ],
        ];

        foreach ($contents as $content) {
            \App\Models\SiteContent::updateOrCreate(['key' => $content['key']], $content);
        }
    }
}
