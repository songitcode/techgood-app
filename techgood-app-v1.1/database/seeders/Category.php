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
            ['cate_name' => 'Laptop'],
            ['cate_name' => 'Tablet'],
            ['cate_name' => 'Man Hinh'],
            ['cate_name' => 'May Anh'],
            ['cate_name' => 'Tai Nghe'],
            ['cate_name' => 'Dong Ho Thong Minh'],
            ['cate_name' => 'Gaming Console'],
            ['cate_name' => 'Television'],
            ['cate_name' => 'Ban Phim'],
            ['cate_name' => 'Loa'],
        ];

        DB::table('category')->insert($categories);
    }
}
