<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(productseeders::class);
        $this->call(UserTableSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(notifcationTestSeed::class);
        $this->call(orderSeeder::class); 
        $this->call(categorySeeder::class);
        $this->call(daysofdeliverySeeder::class);
        $this->call(stateSeeder::class);
        $this->call(rest_delivery_price_seeder::class); 
        $this->call(areaSeeder::class); 
    }
}
