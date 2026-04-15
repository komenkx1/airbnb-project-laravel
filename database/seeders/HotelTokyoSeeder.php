<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelTokyoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_tokyo')->insert([

            [
                "hotel_name" => "Shinjuku Granbell Hotel",
                "price" => 1500000,
                "time" => "per night",
                "rate" => 4.6,
                "img" => "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Hotel Gracery Shinjuku",
                "price" => 1700000,
                "time" => "per night",
                "rate" => 4.7,
                "img" => "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Park Hotel Tokyo",
                "price" => 2100000,
                "time" => "per night",
                "rate" => 4.8,
                "img" => "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "The Knot Tokyo Shinjuku",
                "price" => 1300000,
                "time" => "per night",
                "rate" => 4.5,
                "img" => "https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Tokyo Bay Shiomi Prince Hotel",
                "price" => 1800000,
                "time" => "per night",
                "rate" => 4.7,
                "img" => "https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=800&q=80"

                ],
            [
                "hotel_name" => "Asakusa View Hotel",
                "price" => 1200000,
                "time" => "per night",
                "rate" => 4.4,
                "img" => "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80"
            ]

        ]);
    }
}
