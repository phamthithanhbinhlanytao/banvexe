<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'Nguyễn Trọng Nghĩa'],
        	['email'=>'nghia@gmail.com'],
        	['password'=>'123456'],
        	['level'=>'1'],
        	['address'=>'Đà nẵng'],

        ]);
    }
}
