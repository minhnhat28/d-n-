<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            ['name_brand' => 'ip'],
            ['name_brand' => 'Samsung'],
            ['name_brand' => 'Xiaomi'],
        ]);
    }
}
