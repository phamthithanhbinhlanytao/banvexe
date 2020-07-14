<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'name' =>'Nguyễn Trọng Nghĩa',
    			'email'=>'nghia@gmail.com',
    			'email_verified_at'=> new DateTime,
    			'password'=>bcrypt('13579'),
    			'phone'=>'0986766275',
    			'address'=>'Đà nẵng',
    			'level'=>1,
    			
    			'created_at'=> new DateTime,
    			'updated_at'=>new DateTime,

    		],
    	];

       DB::table('users')->insert($data);
    }
}
