<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name' => 'Stephan',
                'email' => 'stephan@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'Doelf',
                'email' => 'doelf@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
            ],
        ]);
    }
}
