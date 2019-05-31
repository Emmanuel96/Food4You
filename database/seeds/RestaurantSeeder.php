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
      DB::table('user')->insert([
            'id' => 4,
            'user_name' => 'Taco Food Van',
            'email' => 'Taco@gmail.com',
            'password' => app('hash')->make('taco'), 
            'user_role' => 3, 
            'user_address' => '128 Bateman House', 
            'user_phone_number' => '+447598654342'
        ]);

       DB::table('restaurants')->insert([
            'restaurant_name' => 'Baja Cantina',
            'user_id' => 4,
            'restaurant_status' => 0,
            'restaurant_id' => 3, 
            'restaurant_image' => 'eat_is_greek_logo.jpg', 
            'header_image' => 'eat_is_greek_logo.jpg',
            'restaurant_opening_times' => '9:40', 
            'restaurant_minimum_order' => 5,     
            'restaurant_delivery_fee' => 'COLLECTION ONLY',
                'restaurant_phone_number' => '+447903065903'
            ]);

       DB::table('user')->insert([
                  'id' => 3, 
                  'user_name' => 'Eat Is Greek',
                  'email' => 'eatIsGreek@gmail.com',
                  'password' => app('hash')->make('greek'), 
                  'user_role' => 3, 
                  'user_address' => 'Hunter Street', 
                  'user_phone_number' => '+447903065903'
              ]);

       DB::table('restaurants')->insert([
                'user_id' => 3, 
                'restaurant_name' => 'Eat Is Greek',
                'restaurant_id' => 13, 
                'restaurant_status' => 0,
                'restaurant_image' => 'eat_is_greek_logo.jpg', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '9:40', 
                'restaurant_minimum_order' => 5, 
                'restaurant_delivery_fee' => 'COLLECTION ONLY',
                 'restaurant_phone_number' => '+447903065903'
            ]);

            DB::table('restaurants')->insert([
                'user_id' => 7, 
                'restaurant_name' => 'Simply Delicious',
                'restaurant_id' => 5, 
                'restaurant_status' => 0,
                'restaurant_image' => 'eat_is_greek_logo.jpg', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '9:40', 
                'restaurant_minimum_order' => 500, 
                'restaurant_delivery_fee' => 'DELIVERY ONLY',
                 'restaurant_phone_number' => '+2347037699184'
            ]);

            DB::table('user')->insert([
                'id' => 7, 
                'user_name' => 'Simply Delicious',
                'email' => 'emmanuel.audu1@aun.edu.ng',
                'password' => app('hash')->make('simplydelicious'), 
                'user_role' => 3, 
                'user_address' => 'No 4 Addo Badore Road Off Addo Roundabout', 
                'user_phone_number' => '+2347037699184'
            ]);

             DB::table('user')->insert([
                'user_name' => 'KTM Restaurant and Lounge',
                'email' => 'marcus@aun.edu.ng',
                'password' => app('hash')->make('ktm'), 
                'user_role' => 3, 
                'user_address' => 'No 4 Addo Badore Road Off Addo Roundabout', 
                'user_phone_number' => '+2347037699184'
            ]);

            DB::table('restaurants')->insert([
                'user_id' => 24,
                'restaurant_name' => 'KTM',
                'restaurant_id' => 6, 
                'restaurant_status' => 0,
                'restaurant_image' => 'eat_is_greek_logo.jpg', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '9:40', 
                'restaurant_minimum_order' => 500, 
                'restaurant_delivery_fee' => 'DELIVERY ONLY',
                 'restaurant_phone_number' => '+2347037699184'
            ]);

            DB::table('user')->insert([
                'id' => 9,
                'user_name' => 'Vernacular',
                'email' => 'vernacular@gmail.com',
                'password' => app('hash')->make('vernacular'), 
                'user_role' => 3, 
                'user_address' => 'No 8b Amodu Ojikutu St VI', 
                'user_phone_number' => '+2348029255138'
            ]);

            DB::table('restaurants')->insert([
                'user_id' => 9,
                'restaurant_name' => 'Vernacular',
                'restaurant_id' => 7, 
                'restaurant_status' => 0,
                'restaurant_image' => 'eat_is_greek_logo.jpg', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '8:00', 
                'restaurant_minimum_order' => 100, 
                'restaurant_delivery_fee' => 'DELIVERY ONLY',
                 'restaurant_phone_number' => '+2348029255138'
            ]);

            
           DB::table('restaurants')->insert([
            'restaurant_name' => "Tosin's Kitchen",
            'user_id' => '40',
            'restaurant_status' => 1,
            'restaurant_id' => 10, 
            'restaurant_image' => '', 
            'header_image' => 'eat_is_greek_logo.jpg', 
            'restaurant_opening_times' => '9:40', 
            'restaurant_minimum_order' => 2500,     
            'restaurant_delivery_fee' => 'COLLECTION ONLY',
            'restaurant_phone_number' => '+447903065903'  
          ]);

            DB::table('user')->insert([
                'id'=> 40,
                'user_name' => 'Tosin',
                'email' => 'oluwatosinmohammed@yahoo.com',
                'password' => app('hash')->make('tosin@gmail.com'), 
                'user_role' => 3, 
                'user_address' => 'V.I, Lagos', 
                'user_phone_number' => '+2347037699184' 
            ]);

            DB::table('restaurants')->insert([
                'restaurant_name' => "Slippery Kitchens",
                'user_id' => 22,
                'restaurant_status' => 0,
                'restaurant_id' => 90, 
                'restaurant_image' => '', 
                'header_image' => 'eat_is_greek_logo.jpg', 
                'restaurant_opening_times' => '9:40', 
                'restaurant_minimum_order' => 2500,     
                'restaurant_delivery_fee' => 'COLLECTION ONLY',
                'restaurant_phone_number' => '+447903065903'  
              ]);
    
            DB::table('user')->insert([
                'id'=> 22,
                'user_name' => 'vinchioflagos@gmail.com',
                'email' => 'vinchi@gmail.com',
                'password' => app('hash')->make('tosin@gmail.com'), 
                'user_role' => 3, 
                'user_address' => 'V.I, Lagos', 
                'user_phone_number' => '+2347037699184' 
            ]);


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
            'email' => 'platedMemoirs@gmail.com',
            'password' => app('hash')->make('IdiMMa'), 
            'user_role' => 3, 
            'user_address' => 'V.I, Lagos', 
            'user_phone_number' => '+2348174392938' 
            // 'user_phone_number' => '+2347037699184' 
           ]);

           DB::table('restaurants')->insert([
            'restaurant_name' => "Aayo's Kitchen",
            'user_id' => 29,
            'restaurant_status' => 0,
            'restaurant_id' => 50, 
            'restaurant_image' => '', 
            'header_image' => 'eat_is_greek_logo.jpg', 
            'restaurant_opening_times' => '9:40', 
            'restaurant_minimum_order' => 500,     
            'restaurant_delivery_fee' => 'COLLECTION ONLY',
            'restaurant_phone_number' => '+447903065903'  
       ]);

       DB::table('user')->insert([
        'id'=> 29,
        'user_name' => 'Aayo',
        'email' => 'aayo@gmail.com',
        'password' => app('hash')->make('aayo'), 
        'user_role' => 3, 
        'user_address' => 'Ajah, Lagos', 
        'user_phone_number' => '+2348174392938' 
        // 'user_phone_number' => '+2347037699184' 
       ]);
       //  DB::table('user')->insert([
       //      'user_name' => 'Taco Food Van 3',
       //      'email' => 'Taco@gmail.com',
       //      'password' => app('hash')->make('taco'), 
       //      'user_role' => 10, 
       //      'user_address' => '128 Bateman House', 
       //      'user_phone_number' => '+447598654343'
       //  ]);

       // DB::table('restaurants')->insert([
       //          'restaurant_name' => 'Baja Cantina',
       //          'restaurant_id' => 10, 
       //          'restaurant_image' => 'taco_van_logo.jpg', 
       //          'restaurant_opening_times' => '9:40', 
       //          'restaurant_minimum_order' => '£5', 
       //          'restaurant_delivery_fee' => 'COLLECTION ONLY',
       //           'restaurant_phone_number' => '+447598654343'
       //      ]);

       //        DB::table('user')->insert([
       //      'user_name' => 'Taco Food Van 3',
       //      'email' => 'Taco@gmail.com',
       //      'password' => app('hash')->make('taco'), 
       //      'user_role' => 40, 
       //      'user_address' => '128 Bateman House', 
       //      'user_phone_number' => '+447598654343'
       //  ]);

       // DB::table('restaurants')->insert([
       //          'restaurant_name' => 'Baja Cantina',
       //          'restaurant_id' => 40, 
       //          'restaurant_image' => 'taco_van_logo.jpg', 
       //          'restaurant_opening_times' => '9:40', 
       //          'restaurant_minimum_order' => '£5', 
       //          'restaurant_delivery_fee' => 'COLLECTION ONLY',
       //           'restaurant_phone_number' => '+447598654343'
       //      ]);

       //        DB::table('user')->insert([
       //      'user_name' => 'Taco Food Van 3',
       //      'email' => 'Taco@gmail.com',
       //      'password' => app('hash')->make('taco'), 
       //      'user_role' => 30, 
       //      'user_address' => '128 Bateman House', 
       //      'user_phone_number' => '+447598654343'
       //  ]);

       // DB::table('restaurants')->insert([
       //          'restaurant_name' => 'Baja Cantina',
       //          'restaurant_id' => 30, 
       //          'restaurant_image' => 'taco_van_logo.jpg', 
       //          'restaurant_opening_times' => '9:40', 
       //          'restaurant_minimum_order' => '£5', 
       //          'restaurant_delivery_fee' => 'COLLECTION ONLY',
       //           'restaurant_phone_number' => '+447598654343'
       //      ]);




      //    DB::table('user')->insert([
      //           'user_name' => 'Fifi Kitchen',
      //           'email' => 'fifikitchen@gmail.com',
      //           'password' => app('hash')->make('admin'), 
      //           'user_role' => 3, 
      //           'user_address' =>"128 Bateman House", 
      //           'user_phone_number' => '07402143081'
      //       ]);

      //     DB::table('restaurants')->insert([
      //    		'restaurant_name' => 'Fifi Kitchen',
      //    		'restaurant_id' => 3, 
      //    		'restaurant_image' => 'sdkflsjkf', 
      //    		'restaurant_opening_times' => '9:40', 
      //    		'restaurant_minimum_order' => '£25', 
      //    		'restaurant_delivery_fee' => 'FREE'
      //    	]);

      //    //A second restaurant seed
      //   DB::table('user')->insert([
      //           'user_name' => 'Honey Rain Food venture',
      //           'email' => 'honeyrain@gmail.com',
      //           'password' => app('hash')->make('admin'), 
      //           'user_role' => 3, 
      //           'user_address' =>"128 Bateman House", 
      //           'user_phone_number' => '07402143081'
      //       ]);

      //     DB::table('restaurants')->insert([
     	// 	'restaurant_name' => 'Honey Rain Food Ventures',
     	// 	'restaurant_id' => 4, 
     	// 	'restaurant_image' => 'sdkflsjkf', 
     	// 	'restaurant_opening_times' => '9:40', 
     	// 	'restaurant_minimum_order' => '£25', 
     	// 	'restaurant_delivery_fee' => 'FREE'
     	// ]);

         DB::table('restaurants')->insert([
            'user_id' => 1, 
            'restaurant_name' => 'Admin Restaurant',
            'restaurant_id' => 100, 
            'restaurant_status' => 0,
            'restaurant_image' => 'eat_is_greek_logo.jpg', 
            'header_image' => 'eat_is_greek_logo.jpg', 
            'restaurant_opening_times' => '9:40', 
            'restaurant_minimum_order' => 500, 
            'restaurant_delivery_fee' => 'DELIVERY ONLY',
             'restaurant_phone_number' => '+447903065903'
        ]);

        DB::table('user')->insert([
            'id'=> 5,
            'user_name' => 'purpleBistro',
            'email' => 'purplebistrolagos@gmail.com',
            'password' => app('hash')->make('bistro'), 
            'user_role' => 3, 
            'user_address' => 'Lagos', 
            'user_phone_number' => '+2348143246116' 
           ]);

           DB::table('restaurants')->insert([
            'restaurant_name' => "Purple Bistro",
            'user_id' => 5,
            'restaurant_status' => 0,
            'restaurant_id' => 2, 
            'restaurant_image' => 'chickenClub.JPG', 
            'header_image' => 'waffleBreakfast.JPG', 
            'restaurant_opening_times' => '8:00', 
            'restaurant_minimum_order' => 900,     
            'restaurant_delivery_fee' => 'DELIVERY ONLY',
            'restaurant_phone_number' => '+2348038128425'  
       ]);
    }
}
