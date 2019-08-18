<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //CREATING A SEED FOR THE RESTAURANTS
            DB::table('restaurants')->insert([
                'restaurant_name' => 'Plated Memoirs',
                'user_id' => '20',
                'restaurant_status' => 1,
                'restaurant_id' => 0, 
                'restaurant_image' => '', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '9:40', 
                'restaurant_minimum_order' => 500,     
                'restaurant_delivery_fee' => 'COLLECTION ONLY',
                'restaurant_phone_number' => '+447903065903'  
           ]);
    
           DB::table('user')->insert([
            'id'=> 20,
            'user_name' => 'PlatedMemoirs',
            'email' => 'platedMemoirs@wailodile.com',
            'password' => app('hash')->make('Idimma1234'), 
            'user_role' => 3, 
            'user_address' => 'V.I, Lagos', 
            'user_phone_number' => '+2348174392938' 
            // 'user_phone_number' => '+2347037699184' 
           ]);

    }
}
