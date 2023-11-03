<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            ["name" => "admin",  "model" => 'user'],
            ["name" => "user",  "model" => 'user'],
            ["name" => "visitor",  "model" => 'user'],
            ["name" => "navbar",  "model" => 'page'],
            ["name" => "card",  "model" => 'card'],
            ["name" => "section",  "model" => 'section'],
        ];

        foreach ($models as $key => $model) {
            # code... Run
            Type::create($model);

            // OR Run this
            // $types = Type::create([
            //     "model" => $model,
            //     "name" => $key,
            // ]);
        }
    }
}
