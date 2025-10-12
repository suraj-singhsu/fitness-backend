<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'AC Service & Repair',
            "Women's Salon",
            'Cleaning & Pest Control',
            'Home Appliances Repair',
            'Electrician, Plumber & Carpenter',
            'Painting & Waterproofing',
            "Women's Makeup",
        ];

        foreach ($categories as $index => $name) {
            DB::table('service_categories')->insert([
                'name' => $name,
                'description' => $name,
                'thumbnail_image' => null,
                'banner_image' => null,
                'sort_order' => $index + 1,
                'status' => 1, // active
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
