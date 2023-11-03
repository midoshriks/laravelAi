<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                "name" => 'card_pricing',
                "title" => 'We Have The Best Pre-Order',
                "title_em" => 'Prices',
                "title_h4" => 'You Can Get',
                "title_avatar" => 'frontend/landing/assets/images/heading-line-dec.png',
                "title_p" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna',

                "page_id" => '4',
                "type_id" => '5',
            ],
            [
                "name" => 'card_about',
                "title" => 'We Have The Best Pre-Order',
                "title_em" => 'Prices',
                "title_h4" => 'You Can Get',
                "title_avatar" => 'frontend/landing/assets/images/heading-line-dec.png',
                "title_p" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna',

                "page_id" => '4',
                "type_id" => '5',
            ],
        ];

        foreach ($cards as $key => $card) {
            # code... Run
            Card::create($card);
        }
    }
}
