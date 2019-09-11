<?php
namespace App\Providers;
use App\Category;
use App\Restaurant;
use Session;
use Illuminate\Support\ServiceProvider;
class CategoryServiceProvider extends ServiceProvider
{
	public function boot()
	{
		view()->composer('*',function($view)
		{
            if(session::has('logged_in_restaurant')){
                $restaurant =  session::get('logged_in_restaurant');
                $view->with('category_array', Category::where('restaurant_id', '=', $restaurant->restaurant_id));
            }
		});
	}
}
