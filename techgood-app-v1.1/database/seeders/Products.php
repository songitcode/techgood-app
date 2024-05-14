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
        DB::table('products')->insert([
            'p_name' => 'iPhone 15 128GB Chính hãng (VN/A)',
            'p_price_old' => 24990000,
            'p_price_new' => 18990000,
            'p_description' => 'KHÔNG trả trước Phụ phí & phí chuyển đổi 0đ Lãi suất 0%',
            'p_color' => '#f50000',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/1715692536_1.png',
            'p_photo2' => 'avatars/1715692536_2.png',
            'p_photo3' => 'avatars/1715692536_3.png',
            'p_photo4' => 'avatars/1715692536_4.png',
            'p_photo5' => 'avatars/1715692536_5.png',
        ]);

        DB::table('products')->insert([
            'p_name' => 'iPhone 12 256GB Chính Hãng',
            'p_price_old' => 0,
            'p_price_new' => 26990000,
            'p_description' => 'Apple ít khi đáp trả trực tiếp đến người dùng và iFan nhưng có đồng nghĩa là họ không quan tâm đến các kỳ vọng của người dùng.',
            'p_color' => '#f50000',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/iphone-12-1.png',
            'p_photo2' => 'avatars/iphone-12-2.png',
            'p_photo3' => 'avatars/iphone-12-3.png',
            'p_photo4' => 'avatars/iphone-12-4.png',
            'p_photo5' => 'avatars/iphone-12-5.png',
        ]);


    }
}
