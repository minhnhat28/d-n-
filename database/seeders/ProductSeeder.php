<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'name_product' => 'ip 14',
                'describe' => 'Điện thoại mới nhất',
                'price' => 100.00,
                'img' => 'image1.jpg',
                'view' => 10,
                'discount' => 5,
                'id_brand' => 1,
                'id_category' => 1,
            ],
            [
                'name_product' => 'Samsung galaxy',
                'describe' => 'Điện thoại mới nhất',
                'price' => 100.000,
                'img' => 'image2.jpg',
                'view' => 12,
                'discount' => 15,
                'id_brand' => 2,
                'id_category' => 2,
            ]
            ]);
    }
}
