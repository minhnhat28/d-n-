<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bill')->insert([
            [
                'name_user' => 'John Doe',
                'tel_user' => '123456789',
                'address_user' => '123 Main St, City, Country',
                'price' => 500,
                'img' => 'image.jpg',
                'date' => now(),
                'total' => 1000,
                'quantity' => 2,
                'status' => 'Pending',
                'id_payment' => 1,
                'id_user' => 1,
            ],
            [
                'name_user' => 'Jane Smith',
                'tel_user' => '987654321',
                'address_user' => '456 Elm St, City, Country',
                'price' => 1500,
                'img' => 'image2.jpg',
                'date' => now(),
                'total' => 2000,
                'quantity' => 3,
                'status' => 'Completed',
                'id_payment' => 2,
                'id_user' => 2,
            ],
            // Add more entries as needed
        ]);
    }
}
