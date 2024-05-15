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
        //1
        DB::table('products')->insert([
            'p_name' => 'iPhone 15 128GB Chính hãng (VN/A)',
            'p_price_old' => 24990000,
            'p_price_new' => 18990000,
            'p_description' => 'KHÔNG trả trước Phụ phí & phí chuyển đổi 0đ Lãi suất 0%',
            'p_color' => '#f50000',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/1715778856_1.jpg',
            'p_photo2' => 'avatars/1715778856_2.png',
            'p_photo3' => 'avatars/1715778856_3.png',
            'p_photo4' => 'avatars/1715778856_4.png',
            'p_photo5' => 'avatars/1715778856_5.png',
        ]);

        //2
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

        //3
        DB::table('products')->insert([
            'p_name' => 'Laptop Apple MacBook Air 13 inch M1 8GB/256GB (MGN63SA/A)',
            'p_price_old' => 19590000,
            'p_price_new' => 18190000,
            'p_description' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.',
            'p_color' => '#a6a6a6',
            'p_type' => 'Laptop',
            'p_quantity' => 3,
            'p_photo1' => 'avatars/grey-1-org.jpg',
            'p_photo2' => 'avatars/grey-2-org.jpg',
            'p_photo3' => 'avatars/grey-3-org.jpg',
            'p_photo4' => 'avatars/grey-4-org.jpg',
            'p_photo5' => 'avatars/grey-5-org.jpg',
        ]);

        //4
        DB::table('products')->insert([
            'p_name' => 'Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)',
            'p_price_old' => 18990000,
            'p_price_new' => 16490000,
            'p_description' => 'Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W) có không gian hiển thị rộng rãi, sắc nét với màn hình 15.6 inch OLED cùng nhiều hiệu năng mạnh mẽ khác.',
            'p_color' => '#F1F1F1',
            'p_type' => 'Laptop',
            'p_quantity' => 2,
            'p_photo1' => 'avatars/asus-vivobook-15-oled-1.jpg',
            'p_photo2' => 'avatars/asus-vivobook-15-oled-2.jpg',
            'p_photo3' => 'avatars/asus-vivobook-15-oled-3.jpg',
            'p_photo4' => 'avatars/asus-vivobook-15-oled-4.jpg',
            'p_photo5' => 'avatars/asus-vivobook-15-oled-5.jpg',
        ]);

        //5
        DB::table('products')->insert([
            'p_name' => 'Loa Bluetooth Monster Adventurer MAX',
            'p_price_old' => 4950000,
            'p_price_new' => 2790000,
            'p_description' => 'Loa Bluetooth Monster Adventurer MAX là một chiếc loa di động có kích thước lớn với công suất lên tới 60 W, được trang bị nhiều tính năng hiện đại và khả năng chống nước IPX7.',
            'p_color' => '#000',
            'p_type' => 'Loa',
            'p_quantity' => 4,
            'p_photo1' => 'avatars/loa-bluetooth-monster-adventurer-max-1-1.jpg',
            'p_photo2' => 'avatars/loa-bluetooth-monster-adventurer-max-2-1.jpg',
            'p_photo3' => 'avatars/loa-bluetooth-monster-adventurer-max-3-1.jpg',
            'p_photo4' => 'avatars/loa-bluetooth-monster-adventurer-max-4-1.jpg',
            'p_photo5' => 'avatars/loa-bluetooth-monster-adventurer-max-5-1.jpg',
        ]);

        //6
        DB::table('products')->insert([
            'p_name' => 'Màn hình MSI PRO MP243X 23.8 inch FHD/IPS/100Hz/4ms/HDMI',
            'p_price_old' => 2790000,
            'p_price_new' => 2190000,
            'p_description' => 'Màn hình MSI PRO MP243X 23.8 inch FHD sở hữu tần số quét 100 Hz, thời gian đáp ứng 4 ms mang đến cho bạn trải nghiệm hình ảnh tuyệt vời, cùng 119% sRGB và những thông số cao, hiện đại.',
            'p_color' => '#000',
            'p_type' => 'Man Hinh',
            'p_quantity' => 6,
            'p_photo1' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-1-1.jpg',
            'p_photo2' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-2-1.jpg',
            'p_photo3' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-3-1.jpg',
            'p_photo4' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-4-1.jpg',
            'p_photo5' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-5-1.jpg',
        ]);
    }
}

