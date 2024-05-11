<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo 10 bản ghi ngẫu nhiên
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'p_name' => $faker->word,
                'p_price_old' => $faker->randomFloat(2, 10, 1000),
                'p_price_new' => $faker->randomFloat(2, 10, 1000),
                'p_description' => $faker->sentence,
                'p_color' => $faker->colorName,
                'p_type' => $faker->randomElement(['Electronics', 'Clothing', 'Furniture', 'Books']),
                'p_quantity' => $faker->randomNumber(2),
                'p_photo1' => $faker->imageUrl(),
                'p_photo2' => $faker->imageUrl(),
                'p_photo3' => $faker->imageUrl(),
                'p_photo4' => $faker->imageUrl(),
                'p_photo5' => $faker->imageUrl(),
            ]);
        }
    }
}
