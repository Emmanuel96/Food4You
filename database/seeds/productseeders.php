<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class productseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //IDIMMAS PRODUCTS START FROM HERE OH!
                DB::table('menu')->insert([
                  'product_name' => 'Sloppy Philly Sandwich',
                  'product_description' => 'Our Signature Sloppy Joe Meats Philly Cheesesteak Sandwich',
                  'product_price' => 2500,
                  'product_has_extra' => 0,
                  'product_image' => 'sloppy_philly_sandwich.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);
              
                DB::table('menu')->insert([
                  'product_name' => 'Frankfurters Rolled in French Toast',
                  'product_description' => '6 Pcs of Franks Rolled In French Toast',
                  'product_price' => 2000,
                  'product_has_extra' => 0,
                  'product_image' => 'grilled_frankfurter.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'French Toast Club Sandwich',
                  'product_description' => 'French Toast Club Sandwich',
                  'product_price' => 2500,
                  'product_has_extra' => 0,
                  'product_image' => 'french_toast_club_sandwich.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'French Toast BES Sandwich',
                  'product_description' => 'French Toast BES Sandwich',
                  'product_price' => 2700,
                  'product_has_extra' => 0,
                  'product_image' => 'french_toast_bes_sandwich.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'BES Sandwich',
                  'product_description' => 'BES Sandwich',
                  'product_price' => 2500,
                  'product_has_extra' => 0,
                  'product_image' => 'BES_sandwich.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'BBQ Chicken Sandwich',
                  'product_description' => 'BBQ Cheesesteak Sandwich',
                  'product_price' => 2500,
                  'product_has_extra' => 0,
                  'product_image' => 'bbq_chicken_sandwich.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 1
                ]);
              
              //Basic 75k (for 2 weeks) 37500 (for 1 week)
                DB::table('menu')->insert([
                  'product_name' => 'Basic',
                  'product_description' => 'The Meat Fest Pasta . Gizzard Jollof . Turkey Suya . Peppered Snail . Moimoi . Gizdodo . Strawberry Vanilla Oreo . Cheesecake. (Double Layered Delight) . Lasts for 1 week',
                  'product_price' => 40000,
                  'product_has_extra' => 0,
                  'product_image' => 'basic_platter.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Basic (2 Weeks)',
                  'product_description' => 'The Meat Fest Pasta . Gizzard Jollof . Turkey Suya . Peppered Snail . Moimoi . Gizdodo . Strawberry Vanilla Oreo Cheesecake (Double Layered Delight) . lasts for 2 weeks',
                  'product_price' => 80000,
                  'product_has_extra' => 0,
                  'product_image' => 'basic_platter.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Finger food Deluxe-Lite',
                  'product_description' => 'Feeds 12 Franks in French Toast Bits • Prawns in Waffle Saucers • Chicken Spring Rolls • Yam Piccata • Pepper Sauce • Honey Soy Wings • Mini Tuna French Toast Pockets',
                  'product_price' => 40000,
                  'product_has_extra' => 0,
                  'product_image' => 'finger_food_lite.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Cinnamon French Toast Sticks',
                  'product_description' => '5 Pcs of Cinnamon French Toast Sticks',
                  'product_price' => 1500,
                  'product_has_extra' => 0,
                  'product_image' => 'cinnamon_french_toast.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 3
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Finger Food Deluxe',
                  'product_description' => 'Feeds 10 People . Battered Prawns . Shrimp & Mayo Spring rolls . Pepper Sauce . Peppered Snails . Goat meat in Coconut Oil stir fry sauce . Mini Chicken French Toast Pockets',
                  'product_price' => 70000,
                  'product_has_extra' => 0,
                  'product_image' => 'finger_food_deluxe.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Soupreme',
                  'product_description' => 'Seafood Okra . Egusi Soup . Oge Nsala . Chicken Curry . Rice & Swallow of Choice . Red Velvet Brownie Muffins . Lasts for 1 week ',
                  'product_price' => 50000,
                  'product_has_extra' => 0,
                  'product_image' => 'soupreme.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Soupreme (2 Weeks)',
                  'product_description' => 'Seafood Okra . Egusi Soup . Oge Nsala . Chicken Curry . Rice & Swallow of Choice . Red Velvet Brownie Muffins . Lasts for 2 week ',
                  'product_price' => 100000,
                  'product_has_extra' => 0,
                  'product_image' => 'soupreme.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Deluxe Platter',
                  'product_description' => 'Szechuan Beef Stir Fry . Egg Fried Rice . Poulet DG . Special Fried Rice . Chicken Stir Fry . BBQ Ribs . Caramel Vanilla Oreo Cheesecake (Triple Layered Delight) . lasts for 1 week ',
                  'product_price' => 55000,
                  'product_has_extra' => 0,
                  'product_image' => 'deluxe.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Deluxe (2 Weeks)',
                  'product_description' => 'Szechuan Beef Stir Fry . Egg Fried Rice . Poulet DG . Special Fried Rice . Chicken Stir Fry . BBQ Ribs . Caramel Vanilla Oreo Cheesecake (Triple Layered Delight) . lasts for 1 week ',
                  'product_price' => 110000,
                  'product_has_extra' => 0,
                  'product_image' => 'deluxe.jpeg',
                  'restaurant_id' => 0, 
                  'category_id' => 2
                ]);     
          }}   
