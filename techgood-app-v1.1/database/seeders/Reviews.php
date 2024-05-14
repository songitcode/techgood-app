<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Products;
use Faker\Factory as Faker;

class Reviews extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy danh sách sản phẩm
        $productIds = Products::pluck('product_id')->toArray();

        // Tạo 20 đánh giá giả lập
        for ($i = 0; $i < 10; $i++) {
            $productId = $faker->randomElement($productIds);
            Review::create([
                'product_id' => $productId,
                'star_rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->paragraph,
                'name' => $faker->name,
                'email' => $faker->email,
                'created_at' => $faker->dateTimeThisMonth(),
                'updated_at' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}
