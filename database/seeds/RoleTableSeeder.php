<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('role')->insert([
        // 		'slug' => 'food_van',
        //         'name' => 'Food Van'
        // 	]);

        // DB::table('role')->insert([
        // 		'name' => 'Mobile Restaurant', 
        //         'slug' => 'mobile_restaurants'
        // 	]);

        //CREATING A ROLE FOR AN ADMIN
        DB::table('role')->insert([
                'slug' => 'admin',
                'name' => 'Admin'
            ]);

        //CREATING A ROLE FOR THE CUSTOMERS
        DB::table('role')->insert([
                'name' => 'Customer', 
                'slug' => 'customers'
            ]);

        //CREATING A ROLE FOR AN RESTAURANTS
        DB::table('role')->insert([
                'slug' => 'restaurant',
                'name' => 'Restaurant'
            ]);
    }
}
