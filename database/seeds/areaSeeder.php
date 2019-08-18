<?php

use Illuminate\Database\Seeder;

class areaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state_area')->insert([
            'area_name' => 'Ajah', 
            'state_id' => 1
        ]); 

        DB::table('state_area')->insert([
            'area_id' => 2,
            'area_name' => 'Egbeda',
            'state_id' => 1
        ]);

        DB::table('state_area')->insert([
            'area_id' =>3,
            'area_name' => 'Victoria Island',
            'state_id' => 1
        ]);
    
        DB::table('state_area')->insert([
            'area_id' => 4,
            'area_name' => 'Sangotedo',
            'state_id' =>1,
        ]);

        DB::table('state_area')->insert([
            'area_id' => 5,
            'state_id'=> 1,
            'area_name' => 'Anthony'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 6,
            'state_id' => 1,
            'area_name' => 'Ikeja'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 7, 
            'state_id' => 1,
            'area_name' => 'Magodo Phase I'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 8, 
            'state_id' => 1,
            'area_name' => 'Magodo Phase II'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 9, 
            'state_id' => 1,
            'area_name' => 'Ikorodu'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 10, 
            'state_id' => 1,
            'area_name' => 'Ikorodu'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 11, 
            'state_id' => 1,
            'area_name' => 'Mile II'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 12, 
            'state_id' => 1,
            'area_name' => 'Festac'
        ]);

        DB::table('state_area')->insert([
            'area_id' => 13, 
            'state_id' => 1,
            'area_name' => 'Badore'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Agungi'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Ikota'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Chevron'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Gbagada'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Jakande'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'CMS'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Ikotun'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Admiralty'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Luth'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Yaba'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Illupeju'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Unilag'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Anthony'
        ]);

        DB::table('state_area')->insert([
            'area_name' => 'Apapa'
        ]);
    }
}
