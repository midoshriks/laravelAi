<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '01207200622',
            'dob_date' => Carbon::parse('2023-10-18'),
            'gender' => 'male',
            'country_id' => '1',
            'type_id' => '1',
            'password' => bcrypt('12345678'),
        ]);
        $admin->addRole('super_admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '01550344838',
            'dob_date' => Carbon::parse('2023-10-18'),
            'gender' => 'male',
            'country_id' => '1',
            'type_id' => '2',
            'password' => bcrypt('12345678'),
        ]);
        $user->addRole('user');

    }
}
