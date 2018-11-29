<?php
namespace App\Providers;
use App\Category;
use Illuminate\Support\ServiceProvider;
class CategoryServiceProvider extends ServiceProvider
{
	public function boot()
	{
		view()->composer('*',function($view)
		{
			$view->with('category_array', Category::all());
		});
	}
}