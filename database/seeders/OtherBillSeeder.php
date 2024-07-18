<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('other_bill')->insert([
            [
                'name_pro' => 'ip 13',
                'brand_pro' => 'ip',
                'price_pro' => 100.00,
                'quantity_pro' => 2,
                'id_bill' => 1,
            ],
            [
                'name_pro' => 'Samsung galaxy',
                'brand_pro' => 'Samsung',
                'price_pro' => 200.00,
                'quantity_pro' => 1,
                'id_bill' => 2,
            ],
            // Add more entries as needed
        ]);
    }
}