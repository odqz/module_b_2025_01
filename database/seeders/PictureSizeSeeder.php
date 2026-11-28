<?php

namespace Database\Seeders;

use App\Models\PictureSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 10; $i++) { 
            PictureSize::create([
                'pic_size_label' => fake()->domainName(),
                'pic_size_width' => fake()->randomNumber(),
                'pic_size_height' => fake()->randomNumber(),
                'pic_size_price' => fake()->randomFloat(3, 1, 1000)
            ]);
        }
    }
}
