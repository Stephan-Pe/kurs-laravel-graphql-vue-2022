<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Erster Beitrag',
                'body' => 'Ich weiss nicht was soll es bedeuten',
            ],
            [
                'user_id' => 2,
                'title' => 'Zweiter Beitrag',
                'body' => 'Ich weiss jetzt was soll es bedeuten',
            ],
        ]);
    }
}
