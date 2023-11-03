<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            ["name" => "Home",  "type_id" => '4'],
            ["name" => "Services",  "type_id" => '4'],
            ["name" => "About",  "type_id" => '4'],
            ["name" => "Pricing",  "type_id" => '4'],
            ["name" => "Newsletter",  "type_id" => '4'],
        ];

        foreach ($pages as $key => $page) {
            # code... Run
            Page::create($page);
        }
    }
}
