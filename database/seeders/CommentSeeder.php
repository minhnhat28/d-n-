<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comment')->insert([
            [
                'name_comment' => 'Như c',
                'content' => 'This is a comment by User 1',
                'date' => now(),
                'id_product' => 1,
                'id_user' => 1,
            ],
            [
                'name_comment' => 'User 2',
                'content' => 'This is a comment by User 2',
                'date' => now(),
                'id_product' => 2,
                'id_user' => 2,
            ],
            // Add more entries as needed
        ]);
    }
}
