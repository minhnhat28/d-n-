<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('other_cart')->insert([
            ['quantity_cart' => 1, 'id_cart' => 1],
            ['quantity_cart' => 2, 'id_cart' => 2],
            // Add more entries as needed
        ]);
    }
}