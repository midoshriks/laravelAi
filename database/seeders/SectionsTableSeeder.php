<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            // section pricing
            [
                "name" => 'section_pricing',
                "body" => '',
                "body_spin" => '12',
                "body_h4" => 'Standard Plan App',
                "body_icon" => 'frontend/landing/assets/images/pricing-table-01.png',

                "body_li_1" => 'Lorem Ipsum Dolores',
                "body_li_2" => '20 TB of Storage',
                "body_li_3" => 'Life-time Support',
                "body_li_4" => 'Premium Add-Ons',
                "body_li_5" => 'Fastest Network',
                "body_li_6" => 'More Options',

                "button" => 'Purchase This Plan Now',
                "button_a" => '',
                "page_id" => '4',
                "type_id" => '6',
                "card_id" => '1'
            ],
            [
                "name" => 'section_pricing',
                "body" => '',
                "body_spin" => '25',
                "body_h4" => 'Business Plan App',
                "body_icon" => 'frontend/landing/assets/images/pricing-table-01.png',

                "body_li_1" => 'Lorem Ipsum Dolores',
                "body_li_2" => '20 TB of Storage',
                "body_li_3" => 'Life-time Support',
                "body_li_4" => 'Premium Add-Ons',
                "body_li_5" => 'Fastest Network',
                "body_li_6" => 'More Options',

                "button" => 'Purchase This Plan Now',
                "button_a" => '',
                "page_id" => '4',
                "type_id" => '6',
                "card_id" => '1'
            ],
            [
                "name" => 'section_pricing',
                "body" => '',
                "body_spin" => '66',
                "body_h4" => 'Premium Plan App',
                "body_icon" => 'frontend/landing/assets/images/pricing-table-01.png',

                "body_li_1" => 'Lorem Ipsum Dolores',
                "body_li_2" => '20 TB of Storage',
                "body_li_3" => 'Life-time Support',
                "body_li_4" => 'Premium Add-Ons',
                "body_li_5" => 'Fastest Network',
                "body_li_6" => 'More Options',

                "button" => 'Purchase This Plan Now',
                "button_a" => '',
                "page_id" => '4',
                "type_id" => '6',
                "card_id" => '1'
            ],

        ];

        foreach ($sections as $key => $section) {
            # code... Run
            Section::create($section);
        }
    }
}
