<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('service')->insert([
        [
            "service_name" => "Bali Spa & Massage Home Service",
            "price" => 250000,
            "min_order" => 1,
            "rate" => 4.8,
            "img" => "https://images.unsplash.com/photo-1544161515-4ab6ce6db874"
        ],
        [
            "service_name" => "Private Driver Bali Full Day",
            "price" => 600000,
            "min_order" => 1,
            "rate" => 4.9,
            "img" => "https://images.unsplash.com/photo-1503376780353-7e6692767b70"
        ],
        [
            "service_name" => "Bali Professional Photographer",
            "price" => 800000,
            "min_order" => 1,
            "rate" => 4.7,
            "img" => "https://images.unsplash.com/photo-1516035069371-29a1b244cc32"
        ],
        [
            "service_name" => "Private Chef for Villa",
            "price" => 1000000,
            "min_order" => 2,
            "rate" => 4.9,
            "img" => "https://images.unsplash.com/photo-1556911220-bff31c812dba"
        ],
        [
            "service_name" => "Bali Airport Transfer Service",
            "price" => 200000,
            "min_order" => 1,
            "rate" => 4.6,
            "img" => "https://images.unsplash.com/photo-1529070538774-1843cb3265df"
        ],
        [
            "service_name" => "Laundry & Cleaning Service Bali",
            "price" => 150000,
            "min_order" => 2,
            "rate" => 4.5,
            "img" => "https://images.unsplash.com/photo-1581578731548-c64695cc6952"
        ]
    ]);
    }
}
