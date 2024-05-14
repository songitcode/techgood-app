<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cate_name' => 'Mobile Phones'],
            ['cate_name' => 'Laptops'],
            ['cate_name' => 'Tablets'],
            ['cate_name' => 'Desktops'],
            ['cate_name' => 'Cameras'],
            ['cate_name' => 'Headphones'],
            ['cate_name' => 'Smart Watches'],
            ['cate_name' => 'Gaming Consoles'],
            ['cate_name' => 'Televisions'],
            ['cate_name' => 'Home Audio Systems'],
        ];

        DB::table('category')->insert($categories);
    }
}
