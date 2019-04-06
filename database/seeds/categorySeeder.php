<?php


use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('categories')->insert([
           'category_name' => 'drinks',
            'restaurant_id' => 0,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'others',
            'restaurant_id' => 0,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'platter',
            'restaurant_id' => 0,
        ]);
    }
}
