<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create([
            'image' => '01JKG3BCH3JF9W68GPGTYRA84Y.jpg',
            'name' => 'Test',
            'is_active' => 1
        ]);
        Color::factory()->create([
            'name' => 'Test',
            'code' => 'Test',
            'is_active' => 1
        ]);
    }
}
