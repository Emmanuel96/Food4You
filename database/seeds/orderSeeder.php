<?php

use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'buyer_name' => 'Emmanuel Audu', 
            'buyer_address' => '128 Bateman House', 
            'buyer_phone_number' => '+447903065903', 
            'delivery_status' => 0, 
            'order_slug' => 'fuck yall noise makers',
            'payment_ref' => 'salkfjlasdfoafwer',
        ]);
        DB::table('orders')->insert([
            'buyer_name' => 'Oluchi Audu', 
            'buyer_address' => '128 Bateman House Again', 
            'order_slug' => 'fuck yall noise makers', 
            'buyer_phone_number' => '+447903065903', 
            'delivery_status' => 0, 
            'payment_ref' => 'hghghg', 
        ]); 
        DB::table('order_products')->insert([
            'order_id' => 1,
            'restaurant_id' => 13,
            'product_id' => 1, 
            'qty_ordered' => 1, 
            'order_extras' => 'I love Greek Food', 
        ]); 
        DB::table('order_products')->insert([
            'order_id' => 1, 
            'restaurant_id' => 13,
            'product_id' => 2, 
            'qty_ordered' => 1, 
            'order_extras' => 'I love Greek Food', 
        ]); 
    }
}
