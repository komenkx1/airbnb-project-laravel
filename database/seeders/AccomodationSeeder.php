<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accomodation')->insert([

            // ================= KUALA LUMPUR =================
            [
                'id' => 1,
                'accomodation_name' => 'Skyline Studio KL',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => ' 750000',
                'time' => 'per night',
                'rate' => 4.8,
                'img' => 'kl1.avif'
            ],
            [
                'id' => 2,
                'accomodation_name' => 'Bukit Bintang Suites',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => ' 820000',
                'time' => 'per night',
                'rate' => 4.7,
                'img' => 'kl2.avif'
            ],
            [
                'id' => 3,
                'accomodation_name' => 'KL City View Apartment',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => ' 700000',
                'time' => 'per night',
                'rate' => 4.6,
                'img' => 'kl3.avif'
            ],
            [
                'id' => 4,
                'accomodation_name' => 'Petronas Twin Stay',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => ' 900000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'kl4.avif'
            ],
            [
                'id' => 5,
                'accomodation_name' => 'Luxury KL Residence',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => ' 1000000',
                'time' => 'per night',
                'rate' => 5.0,
                'img' => 'kl5.avif'
            ],
            [
                'id' => 6,
                'accomodation_name' => 'KL Cozy Loft',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'price' => '680000',
                'time' => 'per night',
                'rate' => 4.5,
                'img' => 'kl6.avif'
            ],

            // ================= JAKARTA =================
            [
                'id' => 7,
                'accomodation_name' => 'Sudirman Park Residence',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '900000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'jkt1.avif'
            ],
            [
                'id' => 8,
                'accomodation_name' => 'Central Jakarta Apartment',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '650000',
                'time' => 'per night',
                'rate' => 4.6,
                'img' => 'jkt2.avif'
            ],
            [
                'id' => 9,
                'accomodation_name' => 'Thamrin City Stay',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '780000',
                'time' => 'per night',
                'rate' => 4.7,
                'img' => 'jkt3.avif'
            ],
            [
                'id' => 10,
                'accomodation_name' => 'Kuningan Executive Room',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '850000',
                'time' => 'per night',
                'rate' => 4.8,
                'img' => 'jkt4.avif'
            ],
            [
                'id' => 11,
                'accomodation_name' => 'Jakarta City Loft',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '720000',
                'time' => 'per night',
                'rate' => 4.5,
                'img' => 'jkt5.avif'
            ],
            [
                'id' => 12,
                'accomodation_name' => 'Mega Kuningan Suites',
                'city' => 'Jakarta',
                'country' => 'Indonesia',
                'price' => '950000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'jkt6.avif'
            ],

            // ================= TOKYO =================
            [
                'id' => 13,
                'accomodation_name' => 'Shibuya Modern Stay',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '1200000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'tokyo1.avif'
            ],
            [
                'id' => 14,
                'accomodation_name' => 'Tokyo Cozy Room',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '1050000',
                'time' => 'per night',
                'rate' => 4.7,
                'img' => 'tokyo2.avif'
            ],
            [
                'id' => 15,
                'accomodation_name' => 'Shinjuku City Hotel',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '1300000',
                'time' => 'per night',
                'rate' => 5.0,
                'img' => 'tokyo3.avif'
            ],
            [
                'id' => 16,
                'accomodationl_name' => 'Asakusa Traditional Inn',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '980000',
                'time' => 'per night',
                'rate' => 4.6,
                'img' => 'tokyo4.avif'
            ],
            [
                'id' => 17,
                'accomodation_name' => 'Akihabara Tech Stay',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '1150000',
                'time' => 'per night',
                'rate' => 4.8,
                'img' => 'tokyo5.avif'
            ],
            [
                'id' => 18,
                'accomodation_name' => 'Tokyo Skyline Loft',
                'city' => 'Tokyo',
                'country' => 'Japan',
                'price' => '1250000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'tokyo6.avif'
            ],

            // ================= UBUD =================
            [
                'id' => 19,
                'accomodation_name' => 'Ubud Jungle Villa',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '950000',
                'time' => 'per night',
                'rate' => 4.9,
                'img' => 'ubud1.avif'
            ],
            [
                'id' => 20,
                'accomodation_name' => 'Ubud Ricefield Retreat',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '880000',
                'time' => 'per night',
                'rate' => 4.8,
                'img' => 'ubud2.avif'
            ],
            [
                'id' => 21,
                'accomodation_name' => 'Ubud Nature Stay',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '870000',
                'time' => 'per night',
                'rate' => 4.7,
                'img' => 'ubud3.avif'
            ],
            [
                'id' => 22,
                'accomodation_name' => 'Ubud Luxury Resort',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '1200000',
                'time' => 'per night',
                'rate' => 5.0,
                'img' => 'ubud4.avif'
            ],
            [
                'id' => 23,
                'accomodation_name' => 'Bali Serenity Villa',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '920000',
                'time' => 'per night',
                'rate' => 4.8,
                'img' => 'ubud5.avif'
            ],
            [
                'id' => 24,
                'accomodation_name' => 'Ubud Green Escape',
                'city' => 'Ubud',
                'country' => 'Indonesia',
                'price' => '890000',
                'time' => 'per night',
                'rate' => 4.7,
                'img' => 'ubud6.avif'
            ],
        ]);
    }
}
