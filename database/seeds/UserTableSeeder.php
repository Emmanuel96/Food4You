<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREATING A SEED FOR THE ADMIN USER
        DB::table('user')->insert([
                'user_name' => 'EmmanuelAdmin',
                'email' => 'admin@gmail.com',
                'password' => app('hash')->make('admin'), 
                'user_role' => 1, 
                'user_address' =>"128 Bateman House", 
                'user_phone_number' => '+447903065903'
            ]);
        

        //CREATING A SEED FOR A CUSTOMER
         DB::table('user')->insert([
                'user_name' => 'Emmanuel',
                'email' => 'e@gmail.com',
                'password' => app('hash')->make('user'), 
                'user_role' => 2, 
                'user_address' =>"128 Bateman House", 
                'user_phone_number' => '07402143081'
            ]);
     }
}
