<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Restaurants extends Model
{
    use Notifiable; 

    public $table = "restaurants"; 

    public $primaryKey = "restaurant_id";

    protected $fillable = 
    [
    	'restaurant_name','restaurant_image','restaurant_opening_times', 'restaurant_minimum_order', 'restaurant_delivery_fee'
    ];

    public function menu()
    {
    	 return $this->hasMany('App\menu', 'restaurant_id','restaurant_id'); 
    }

    public function orders()
    {
    	return $this->hasMany('App\order', 'order_products', 'order_id', 'restaurant_id');
    }

    public function routeNotificationForNexmo()
    {
        return $this->restaurant_phone_number;
    }
}
