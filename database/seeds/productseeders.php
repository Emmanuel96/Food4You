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
        DB::table('menu')->insert([
        	'product_name'=> 'Tacos',
        	'product_description' => 'The Cadililac of Mexican street food! No forks or knives are required - just roll up your sleeves and dig in to our soft corn / wheat tortillas filled with delicious flavours.', 
        	'product_price' => 5,
        	'product_image' => 'taco.jpg',
          'restaurant_id' => 3
          
        	]);
        DB::table('menu')->insert([
            'product_name'=> 'Nanchos With Cheese',
            'product_description' => '-', 
            'product_price' => 5,
            'product_image' => 'nanchos.jpg', 
            'restaurant_id' => 3
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Quesadillas With cheese',
            'product_description' => '', 
            'product_price' => 5,
            'product_image' => 'quesidillas.jpeg', 
            'restaurant_id' => 3
            //sdfad
            ]);

      
          DB::table('menu')->insert([
          'product_name'=> 'Souvlaki Pita (Greek Pork Skewer)',
          'product_description' => 'Tender pork souvlaki grilled to perfection. Wrapped in grilled Greek pita bread along with tomatoes, tzatziki sauce, chips, onions and oregano.', 
          'product_price' => 4,
          'product_image' => 'souvlaki-pork.jpg',
          'restaurant_id' => 13
          ]);

        DB::table('menu')->insert([
            'product_name'=> 'Chicken Pita Souvlaki (Greek Chicken Skewer)',
            'product_description' => 'A tender marinated chicken skewer wrapped in Greek Pita bread, any sauces of your choice (mayo, cheese salad, mustard, ketchup), chips, tomatoes and onions.', 
            'product_price' => 4,
            'product_image' => 'kotosouvlaki1.jpg', 
            'restaurant_id' => 13
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Gyros pita',
            'product_description' => 'Tender and delicious slices of pork meat that have been cooked on a vertical rotisserie, served in grilled Greek pita bread together with our homemade tzatziki sauce, tomatoes, onions and chips and oregano.', 
            'product_price' => 4,
            'product_image' => 'gyros-1.jpg', 
            'restaurant_id' => 13
            //sdfad
            ]);


          DB::table('menu')->insert([
            'product_name'=> 'Greek Sausage Wrap (Traditional Greek Sausage)',
            'product_description' => 'A traditional Greek grilled sausage from Evros wrapped in Pita bread, tzatziki or spicy cheese sauce, chips, tomatoes,  and onions.', 
            'product_price' => 4,
            'product_image' => 'Loukaniko.jpg', 
            'restaurant_id' => 13
            //sdfad
            ]);

            // DB::table('menu')->insert([
            //   'product_name'=> 'Gyros Pita Chicken ',
            //   'product_description' => 'A traditional Greek grilled sausage from Evros wrapped in Pita bread, tzatziki or spicy cheese sauce, chips, tomatoes,  and onions.', 
            //   'product_price' => 4,
            //   'product_image' => 'Loukaniko.jpg', 
            //   'restaurant_id' => 13
            //   //sdfad
            //   ]);

            DB::table('menu')->insert([
            'product_name'=> 'Gyros In A Box',
            'product_description' => ' A large portion of delicious gyros, chips and salad, homemade tzatziki sauce and spicy cheese sauce (tyrokafteri) served in a large takeaway box.', 
            'product_price' => 6,
            'product_image' => 'fl-gyros-box.png', 
            'restaurant_id' => 13
            //sdfad
            ]);

            DB::table('menu')->insert([
                        'product_name'=> 'Mixed Grill + Greek Salad ',
                        'product_description' => 'Skewered pork souvlaki (kebab), chicken souvlaki (kebab), chicken or pork gyros, Greek sausage, chips, grilled pita bread and a traditional Greek salad.', 
                        'product_price' => 11.99,
                        'product_image' => 'mixed.jpg', 
                        'restaurant_id' => 13
                        //sdfad
                        ]);
         
            DB::table('menu')->insert([
                        'product_name'=> 'Combo 1:Pork souvlaki pita wrap/ greek salad/ drink',
                        'product_description' => 'A full meal for one person, a large pita wrap with pork or chicken souvlaki, a healthy and delicious Greek salad and a soft drink of your choice.', 
                        'product_price' => 11.99,
                        'product_image' => 'combo.jpg', 
                        'restaurant_id' => 13,
                        'inStock' => 1
                        ]);
            DB::table('menu')->insert([
                                    'product_name'=> 'Combo 2: Gyros wrap/ greek salad/ soft drink',
                                    'product_description' => 'Includes pork or chicken gyros wrap, a homemade Greek salad and a soft drink of your choice.', 
                                    'product_price' => 7,
                                    'product_image' => 'mixed-1.jpg', 
                                    'restaurant_id' => 13,
                                    'inStock' => 1
                                    ]);
             DB::table('menu')->insert([
                                    'product_name'=> 'Greek Salad',
                                    'product_description' => 'A healthy and delicious traditional homemade Greek Salad. It includes tomatoes, cucumbers, lettuce, onions, Kalamata olives, Greek Feta cheese, oregano, and extra virgin olive oil.', 
                                    'product_price' => 3.5,
                                    'product_image' => 'greek-salad-1.jpg', 
                                    'restaurant_id' => 13
                                    //sdfad
                                    ]);

             DB::table('menu')->insert([
                                    'product_name'=> 'Coffee (nescafe)',
                                    'product_description' => 'Trust me its delicious  Trust me its delicious  Trust me its delicious  Trust me its delicious  Trust me its delicious  Trust me its delicious', 
                                    'product_price' => 1,
                                    'product_image' => 'coffee-menu.jpg', 
                                    'restaurant_id' => 13,
                                    'product_has_extra' => 0
                                    //sdfad
                                    ]);

              DB::table('menu')->insert([
                                    'product_name'=> 'English Tea',
                                    'product_description' => 'English Tea', 
                                    'product_price' => 1,
                                    'product_image' => 'tea.jpg', 
                                    'restaurant_id' => 13,
                                    'product_has_extra' => 0
                                    //sdfad
                                    ]);
                //  DB::table('menu')->insert([
                //                     'product_name'=> 'Coca Cola',
                //                     'product_description' => 'Coke', 
                //                     'product_price' => 1,
                //                     'product_image' => 'cocacola.jpg', 
                //                     'restaurant_id' => 13,
                //                     'product_has_extra' => 0
                //                     ]);
              
                  DB::table('menu')->insert([
                                    'product_name'=> 'Fanta',
                                    'product_description' => 'Fanta', 
                                    'product_price' => 1,
                                    'product_image' => 'fanta.jpg', 
                                    'restaurant_id' => 13,
                                    'product_has_extra' => 0
                                    ]);


                   DB::table('menu')->insert([
                                    'product_name'=> 'Loux Lemon',
                                    'product_description' => 'Fizzy Drinks', 
                                    'product_price' => 1,
                                    'product_image' => 'loux-lemon.jpg', 
                                    'restaurant_id' => 13,
                                    'product_has_extra' => 0
                                    ]);


                    DB::table('menu')->insert([
                                    'product_name'=> 'Loux Orange',
                                    'product_description' => 'Fizzy Drinks', 
                                    'product_price' => 1,
                                    'product_image' => 'loux-orange.jpg', 
                                    'restaurant_id' => 13,
                                    'product_has_extra' => 0
                                    ]);

            //-- THIS IS THE PRODUCT SEEDER FOR SIMPLY DELICIOUS
               DB::table('menu')->insert([
                                    'product_name'=> 'Loux Orange',
                                    'product_description' => 'Fizzy Drinks', 
                                    'product_price' => 1,
                                    'product_image' => 'loux-orange.jpg', 
                                    'restaurant_id' => 5,
                                    'product_has_extra' => 0
                                    ]);

              DB::table('menu')->insert([
                                    'product_name'=> 'Loux Orange',
                                    'product_description' => 'Fizzy Drinks', 
                                    'product_price' => 1,
                                    'product_image' => 'loux-orange.jpg', 
                                    'restaurant_id' => 5,
                                    'product_has_extra' => 0
                                    ]);
        DB::table('menu')->insert([
            'product_name'=> 'Jollof rice',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'jollofrice.jpg', 
            'restaurant_id' => 5
            ]);
 
            DB::table('menu')->insert([
            'product_name'=> 'Special/Coconut rice',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'Cameroonian-coconut-rice-750x500.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Yam pottage',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'images (1).jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Beans',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,
            'product_image' => 'download.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Spaghetti',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'spaghetti.jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'White rice',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,
            'product_image' => 'whiterice.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Vegetable soup',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,
            'product_image' => 'maxresdefault.jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Egusi soup',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' =>0, 
            'product_image' => 'featured-egusi.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Semovita',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,
            'product_image' => 'semo.jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Eba',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,
            'product_image' => 'eba.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Chicken',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'peri-peri-chicken.jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Turkey',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'turkey.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Beef',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'beef.jpg', 
            'restaurant_id' => 5
            ]);

          DB::table('menu')->insert([
            'product_name'=> 'Shaki',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0,  
            'product_image' => 'shaki.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Cowleg',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Catfish',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'catfish.JPG', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Moi moi',
            'product_description' => '', 
            'product_price' => 45,
            'product_image' => 'moi moi.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Meat pie',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'images.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Chicken pie',
            'product_description' => '', 
            'product_price' => 45,
            'product_image' => 'chicken pie.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Sausage',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'Sausages.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Frank rolls',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Scotch egg',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'scotchedegg.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Beef Burger',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'beef_burger.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Cup of ice cream',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'icecream.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Queens cake',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'queenscake.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Lucozade boost (bottle)',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'lucozade.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Lucozade boost (can)',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'lucozade_can.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Fayrouz',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Bottled mineral',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Yoghurt (500ml)',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Purpy',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Eva water(1 litre)',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Medium water',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'food3.jpg', 
            'restaurant_id' => 5
            ]);

           DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 5
            ]);
      


              DB::table('menu')->insert([
            'product_name'=> 'White Soup & Any Meat',
            'product_description' => '', 
            'product_price' => 2000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
            ]);
 
            DB::table('menu')->insert([
            'product_name'=> 'Fishermen Soup',
            'product_description' => '', 
            'product_price' => 3500,
            'product_has_extra' => 0,
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6      
            ]); 

               DB::table('menu')->insert([
            'product_name'=> 'Fishermen Stew',
            'product_description' => '', 
            'product_price' => 3500,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
               ]);

               DB::table('menu')->insert([
            'product_name'=> 'Goat meat Pepper soup',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
               ]);

               DB::table('menu')->insert([
            'product_name'=> 'Goatmeat Sauce',
            'product_description' => '', 
            'product_price' => 700,
            'product_has_extra' => 0,
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6

            ]);


               DB::table('menu')->insert([
            'product_name'=> 'Catfish Pepper soup',
            'product_description' => '', 
            'product_price' => 3500,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
                ]);


               DB::table('menu')->insert([
            'product_name'=> 'Abacha',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
                ]);

               DB::table('menu')->insert([
            'product_name'=> 'Small Turkey',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
                ]);

               DB::table('menu')->insert([
            'product_name'=> 'Big Turkey',
            'product_description' => '', 
            'product_price' => 800,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
                ]);



               DB::table('menu')->insert([
            'product_name'=> 'Small Chicken',
            'product_description' => ' ', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);


               DB::table('menu')->insert([
            'product_name'=> 'Medium Chicken',
            'product_description' => '', 
            'product_price' => 800,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);

               DB::table('menu')->insert([
            'product_name'=> 'Big Chicken',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra'=> 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Promo',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);


               DB::table('menu')->insert([
            'product_name'=> 'Small Fish',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);


               DB::table('menu')->insert([
            'product_name'=> 'Big Fish',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);


               DB::table('menu')->insert([
            'product_name'=> 'Beef',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Ukwa',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);

               DB::table('menu')->insert([
            'product_name'=> 'Goat Meat',
            'product_description' => '', 
            'product_price' => 600,
            'product_has_extra' => 0,
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6

]);



               DB::table('menu')->insert([
            'product_name'=> 'Vegetable Yam with Ugba',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);


               DB::table('menu')->insert([
            'product_name'=> 'Roasted Yam & Plantain',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6

            ]);
               DB::table('menu')->insert([
            'product_name'=> 'Ugba',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6

            ]);
               DB::table('menu')->insert([
            'product_name'=> 'Isiewu',
            'product_description' => '', 
            'product_price' => 3000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6

            ]);
               DB::table('menu')->insert([
            'product_name'=> 'Isiewu & Ugba',
            'product_description' => '', 
            'product_price' => 3000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Nkwobi',
            'product_description' => '', 
            'product_price' => 1000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Stock Fish with Ugba',
            'product_description' => '', 
            'product_price' => 2000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Live Chicken Nkwobi',
            'product_description' => '', 
            'product_price' => 3000,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
]);
               DB::table('menu')->insert([
            'product_name'=> 'Vegetable salad',
            'product_description' => '', 
            'product_price' => 45,
            'product_has_extra' => 0, 
            'product_image' => 'veg.jpg', 
            'restaurant_id' => 6
   
   ]);
                //Product seeder for vernacular

                DB::table('menu')->insert([
                  'product_name'=> 'White Yam with Egg Sauce (2 Pcs of Yam)',
                  'product_description' => '', 
                  'product_price' => 300,
                  'product_has_extra' => 0, 
                  'product_image' => 'yam_with_egg.jpg', 
                  'restaurant_id' => 7
    ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Egg Sauce',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'veg.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Boiled Plantain (3 Pcs)',
                  'product_description' => '', 
                  'product_price' => 300,
                  'product_has_extra' => 0, 
                  'product_image' => 'boiled_plantain_1.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'White Beans',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'download.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Porridge Beans',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'images.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Boiled Egg',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'boiledegg.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Jollof Rice',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'jollofrice.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Fried Rice',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'jollofrice.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Coleslaw',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'coleslaw111.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Spaghetti',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'spaghetti.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Vegetable Soup',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'maxresdefault.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Okra Soup',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'okra.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Egusi Soup',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'egusi_soup.jpg', 
                  'restaurant_id' => 7
]);

                DB::table('menu')->insert([
                  'product_name'=> 'Afang Soup',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'afang.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Edikaikong',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'edikaikong-soup.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Semo (1 wrap)',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'semo.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Eba (1 wrap)',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'eba.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Chicken (Big)',
                  'product_description' => '', 
                  'product_price' => 500,
                  'product_has_extra' => 0, 
                  'product_image' => 'chicken12.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Chicken (small)',
                  'product_description' => '', 
                  'product_price' => 300,
                  'product_has_extra' => 0, 
                  'product_image' => 'chicken.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Beef',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'beef.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Kpomo',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'kpomo.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Gizzard',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'beef.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Assorted',
                  'product_description' => '', 
                  'product_price' => 100,
                  'product_has_extra' => 0, 
                  'product_image' => 'Assorted.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Fried Fish',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'fish.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Boiled Fish',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'fish.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Coconut Rice',
                  'product_description' => '', 
                  'product_price' => 200,
                  'product_has_extra' => 0, 
                  'product_image' => 'Coconut-Rice.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Moi Moi',
                  'product_description' => '', 
                  'product_price' => 150,
                  'product_has_extra' => 0, 
                  'product_image' => 'moimoi.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Porridge Potatoes',
                  'product_description' => '', 
                  'product_price' => 300,
                  'product_has_extra' => 0, 
                  'product_image' => 'images.jpg', 
                  'restaurant_id' => 7
                ]);

                DB::table('menu')->insert([
                  'product_name'=> 'Porridge Yam',
                  'product_description' => '', 
                  'product_price' => 300,
                  'product_has_extra' => 0, 
                  'product_image' => 'images.jpg', 
                  'restaurant_id' => 7
                ]);


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
               
              
                
                // DB::table('menu')->insert([
                //   'product_name' => 'Shawarma',
                //   'product_description' => 'Shawarma',
                //   'product_price' => 2200,
                //   'product_has_extra' => 0,
                //   'product_image' => 'shawarma.jpeg',
                //   'restaurant_id' => 0
                // ]);


                // DB::table('menu')->insert([
                //   'product_name' => 'Pancakes',
                //   'product_description' => 'Pancakes',
                //   'product_price' => 1000,
                //   'product_has_extra' => 0,
                //   'product_image' => 'pancakes.jpeg',
                //   'restaurant_id' => 0
                // ]);

              
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

                DB::table('menu')->insert([
                  'product_name' => 'Deluxe (2 Weeks)',
                  'product_description' => 'Szechuan Beef Stir Fry . Egg Fried Rice . Poulet DG . Special Fried Rice . Chicken Stir Fry . BBQ Ribs . Caramel Vanilla Oreo Cheesecake (Triple Layered Delight) . lasts for 1 week ',
                  'product_price' => 5000,
                  'product_has_extra' => 0,
                  'product_image' => 'deluxe.jpeg',
                  'restaurant_id' => 50, 
                  'category_id' => 4
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Pancakes',
                  'product_description' => 'With Egg, Sausages & Baked Beans',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'pancakesBreakfast.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 5
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Brioche French Toast',
                  'product_description' => 'With extra bacon',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'briocheFrench.jpg',
                  'restaurant_id' => 2, 
                  'category_id' => 5
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Waffles & Breaded Chicken',
                  'product_description' => 'Waffles & Breaded Chicken',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'waffleBreakfast.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 5
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Waffles',
                  'product_description' => 'With Eggs, Sausage & Fruits',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'waffleBreakfast.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 5
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Buffalo Wings & French Fries',
                  'product_description' => 'Buffalo Wings & French Fries',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'buffalloWings.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'Chinese Rice',
                  'product_description' => 'Chinese Rice only',
                  'product_price' => 1200,
                  'product_has_extra' => 0,
                  'product_image' => 'chineseRice.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'Chinese Rice with Buffalo Wings',
                  'product_description' => 'With Buffalo Wings',
                  'product_price' => 2200,
                  'product_has_extra' => 0,
                  'product_image' => 'chineseRice.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'Seafood Pasta',
                  'product_description' => 'Seafood pasta only',
                  'product_price' => 1200,
                  'product_has_extra' => 0,
                  'product_image' => 'seafoodPasta.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'Seafood Pasta with Buffalo Wings',
                  'product_description' => 'With Buffalo Wings',
                  'product_price' => 2200,
                  'product_has_extra' => 0,
                  'product_image' => 'seafoodPasta.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                
                DB::table('menu')->insert([
                  'product_name' => 'Chicken Club Sandwich',
                  'product_description' => 'With French Fries',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'chickenClub.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Pana Burger',
                  'product_description' => 'Pana Burger only',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'panaBurger.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Shawarma',
                  'product_description' => 'With Chicken & Sausage',
                  'product_price' => 900,
                  'product_has_extra' => 0,
                  'product_image' => 'derinShawarma.jpg',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Shawarma (Extra Chicken, Double Sausage)',
                  'product_description' => 'With Extra Chicken & Double Sausage',
                  'product_price' => 1200,
                  'product_has_extra' => 0,
                  'product_image' => 'derinShawarma.jpg',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);

                DB::table('menu')->insert([
                  'product_name' => 'Salad',
                  'product_description' => 'Chicken Salad',
                  'product_price' => 1700,
                  'product_has_extra' => 0,
                  'product_image' => 'chickenSalad.JPG',
                  'restaurant_id' => 2, 
                  'category_id' => 6
                ]);




                

                //PRODUCTS FOR SLIPPERY RESTAURANT: 
                
              
          }}   
