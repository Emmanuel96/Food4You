<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'product_description', 'product_price','product_image','inStock','restaurant_id'
    ];

    public function restaurants()
    {
    	return $this->belongsTo('App\Restaurants', 'restaurant_id', 'restaurant_id');
    }
}
