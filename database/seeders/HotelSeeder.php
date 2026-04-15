<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel')->insert([
        [
            "hotel_name" => "Villa Samadhi Kuala Lumpur",
            "price" => 1800000,
            "time" => "per night",
            "rate" => 4.7,
            "img" => "https://images.unsplash.com/photo-1566073771259-6a8506099945"
        ],
        [
            "hotel_name" => "City Villa Kuala Lumpur",
            "price" => 350000,
            "time" => "per night",
            "rate" => 3.4,
            "img" => "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa"
        ],
        [
            "hotel_name" => "Holiday Villa Hotel Suites Kuala Lumpur",
            "price" => 650000,
            "time" => "per night",
            "rate" => 4.0,
            "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267"
        ],
        [
            "hotel_name" => "I Villa Inn Bukit Bintang",
            "price" => 250000,
            "time" => "per night",
            "rate" => 3.9,
            "img" => "https://images.unsplash.com/photo-1590490360182-c33d57733427"
        ],
        [
            "hotel_name" => "Midtown Villa Hotel",
            "price" => 300000,
            "time" => "per night",
            "rate" => 4.0,
            "img" => "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80"
        ],
        [
            "hotel_name" => "Holiday Place Kuala Lumpur",
            "price" => 500000,
            "time" => "per night",
            "rate" => 3.9,
            "img" => "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb"
        ]
    ]);
    }
}
