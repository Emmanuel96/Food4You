<?php

use Illuminate\Database\Seeder;

class daysofdeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days_of_delivery')->insert([
            'days' => 'Monday',
            'max_delivery' => 10,
            'available' => 1,
            'restaurant_id' => 0
        ]);

        DB::table('days_of_delivery')->insert([
            'days' => 'Tuesday',
            'max_delivery' => 10,
            'available' => 1,
            'restaurant_id' => 0
        ]);

        DB::table('days_of_delivery')->insert([
            'days' => 'Wednesday',
            'max_delivery' => 10,
            'available' => 1,
            'restaurant_id' => 0
        ]);

        DB::table('days_of_delivery')->insert([
            'days' => 'Thursday',
            'max_delivery' => 10,
            'available' => 1,
            'restaurant_id' => 0
        ]);

        DB::table('days_of_delivery')->insert([
            'days' => 'Friday',
            'max_delivery' => 10,
            'available' => 1,
            'restaurant_id' => 0
        ]);
    }
}
