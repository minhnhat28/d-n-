<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'name_user' => 'Trịnh Minh Nhật',
                'pass' => 'minhnhat',
                'email' => 'nhat03km2@gmail.com',
                'tel' => '123456789',
                'address' => '123 Main St, City, Country',
                'role' => 'admin',
            ],
            [
                'name_user' => 'aaaaa',
                'pass' => 'aa',
                'email' => 'jane@example.com',
                'tel' => '987654321',
                'address' => '456 Elm St, City, Country',
                'role' => 'user',
            ],
            
            // Add more entries as needed
        ]);
    }
}
