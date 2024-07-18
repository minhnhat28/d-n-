<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart')->insert([
            ['total' => 500, 'id_user' => 1],
            ['total' => 1000, 'id_user' => 2],
            // Add more entries as needed
        ]);
    }
}
