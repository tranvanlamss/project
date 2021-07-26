<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            'name'=>'LamDepTrai',
            'email'=>'lam123@gmail.com',
            'password'=>bcrypt('12345678'),            
        ]);
    }
}
