<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelUbudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_ubud')->insert([

            [
                "hotel_name" => "Ubud Jungle Retreat Villa",
                "price" => 1200000,
                "time" => "per night",
                "rate" => 4.7,
                "img" => "https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "The Ubud Valley Resort",
                "price" => 1800000,
                "time" => "per night",
                "rate" => 4.8,
                "img" => "https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Rice Field View Villa Ubud",
                "price" => 950000,
                "time" => "per night",
                "rate" => 4.6,
                "img" => "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Ubud Serenity Boutique Hotel",
                "price" => 850000,
                "time" => "per night",
                "rate" => 4.5,
                "img" => "https://images.unsplash.com/photo-1521783988139-893ce0f9c3b6?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Hidden Paradise Ubud Villa",
                "price" => 1500000,
                "time" => "per night",
                "rate" => 4.8,
                "img" => "https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=800&q=80"
            ],
            [
                "hotel_name" => "Green Forest Resort Ubud",
                "price" => 1100000,
                "time" => "per night",
                "rate" => 4.7,
                "img" => "https://images.unsplash.com/photo-1584132967334-10e028bd69f7?auto=format&fit=crop&w=800&q=80"
            ]

        ]);
    }
}
