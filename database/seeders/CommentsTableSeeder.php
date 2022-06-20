<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'title' => 'Tirande',
                'body' => 'pippifax',
                'nickname' => 'bloedi',
            ],
            [
                'post_id' => 2,
                'title' => 'Comment',
                'body' => 'irgendwas',
                'nickname' => 'bubble',
            ],
        ]);
    }
}
