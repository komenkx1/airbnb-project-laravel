<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelJktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_jkt')->insert([
            [
                "hotel_name" => "Grand Hyatt Jakarta",
                "price" => 2200000,
                "time" => "per night",
                "rate" => 4.9,
                "img" => "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Hotel Indonesia Kempinski",
                "price" => 2500000,
                "time" => "per night",
                "rate" => 4.8,
                "img" => "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Pullman Jakarta Central Park",
                "price" => 1800000,
                "time" => "per night",
                "rate" => 4.7,
                "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "AYANA Midplaza Jakarta",
                "price" => 2000000,
                "time" => "per night",
                "rate" => 4.8,
                "img" => "https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Harris Vertu Hotel Harmoni",
                "price" => 900000,
                "time" => "per night",
                "rate" => 4.5,
                "img" => "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Yello Hotel Manggarai",
                "price" => 600000,
                "time" => "per night",
                "rate" => 4.4,
                "img" => "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80"
            ]
        ]);
    }
}
