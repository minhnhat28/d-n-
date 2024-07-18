<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('voucher')->insert([
            [
                'code' => 'DISCOUNT10',
                'star_at' => '2023-12-12',
                'end_at' => '2024-12-12',
                'value' => 10,
            ],
            [
                'code' => 'DISCOUNT20',
                'star_at' => '2023-12-12',
                'end_at' => '2024-11-11',
                'value' => 20,
            ],
            // Add more entries as needed
        ]);
    }
}
