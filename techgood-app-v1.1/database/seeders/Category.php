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
            ['cate_name' => 'Mobile Phones'], //1
            ['cate_name' => 'Laptop'], //2
            ['cate_name' => 'Tablet'], //3
            ['cate_name' => 'Man Hinh'],//4
            ['cate_name' => 'May Anh'],//5
            ['cate_name' => 'Tai Nghe'],//6
            ['cate_name' => 'Dong Ho'], //7
            ['cate_name' => 'Gaming Console'],//8
            ['cate_name' => 'Television'],//9
            ['cate_name' => 'Ban Phim'],//10
            ['cate_name' => 'Loa'], //11
        ];

        DB::table('category')->insert($categories);
    }
}
