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
        
        // DB::table('categories')->insert([
        //    'category_name' => 'Drinks',
        //     'restaurant_id' => 10,
        // ]);

        DB::table('categories')->insert([
            'category_name' => 'Sandwitch',
            'restaurant_id' => 0,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Platter',
            'restaurant_id' => 0,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Others',
            'restaurant_id' => 0,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Others',
            'restaurant_id' => 50,
        ]);

       
    }
}
