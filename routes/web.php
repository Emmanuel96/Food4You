<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'menu' ], function(){
    Route::get('/','MenuController@displayAll')->name('menu.show');

    Route::get('/{name?}', 'MenuController@displayMenu');
});

Route::get('getProductDetails', 'MenuController@getProductDetails')->name('menu.getProductDetails'); 

Route::get('/add-to-cart',[
	'uses' => 'CartController@addToCart',
	'as' => 'product.addToCart'
	]);

Route::get('/qtyEdit','CartController@editItemQty')->name('cart.qtyEdit');

Route::get('/cart', 'CartController@displayCart')->name('cart.show');

Route::delete('/deleteFromCart', 'CartController@deleteFromCart')->name('cart.delete');

Route::get('/checkout', 'CheckoutController@displayCheckout')->name('checkout.show');

Route::post('/checkout', 'CheckoutController@createOrder')->name('checkout.create'); 

//ADMIN PAGE ROUTES
Route::get('/admin/addProduct','AdminController@addProductPage')->name('admin.addProduct');
Route::get('/admin/viewProducts', 'AdminController@viewProducts')->name('admin.viewProducts');
Route::post('/admin/createProduct', 'AdminController@createProduct')->name('admin.createProduct');
Route::get('/admin/viewOrders', 'AdminController@viewOrders')->name('admin.viewOrders');
Route::get('/admin/viewOrders/{slug?}', 'AdminController@viewOrderProducts')->name('admin.viewOrdersDetails');
Route::post('/admin/InOutOfStock', 'AdminController@InOutOfStock')->name('admin.inOutOfStock');
Route::post('/admin/notifyCustomerOfOrder', 'AdminController@notifyCustomers')->name('admin.notifyCustomerOfOrder');  


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes leading to the restaurant page 
Route::get('/restaurants', 'RestaurantController@restaurantsPage')->name('restaurants.show');


///for sake of debugging 
Route::get('/clearCart', 'HomeController@clearCart');

//Route to send text messages
Route::get('/sendTextMessages', 'TextMessagingController@sendMessages'); 

//Routes for all the API calls 
Route::get('/api/restaurants', 'apiController@fetchRestaurants');

Route::get('/api/restaurants/menu/{id}', 'apiController@fetchRestMenu'); 

//FOR PAYMENT
Route::post('/pay', 'CheckoutController@createOrder')->name('pay'); 

Route::get('/payment_complete', 'CheckoutController@handleGatewayCallback');