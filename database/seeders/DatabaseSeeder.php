<?php

namespace Database\Seeders;

use DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@gmail.com'],
            [
                'name'     => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => bcrypt('admin'),
            ]
        );

        $this->call([
            HotelInfoSeeder::class,
            RoomSeeder::class,
            ServiceSeeder::class,
            ReviewSeeder::class,
            LocationSeeder::class,
            BlogSeeder::class,
            PostSeeder::class,
            ProvinceDistrictSeeder::class,
        ]);
    }
}
