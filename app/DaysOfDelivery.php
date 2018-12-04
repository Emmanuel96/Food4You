<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daysofdelivery extends Model
{
    protected $table = ' days_of_delivery';
    protected $primaryKey = "id";
    
    public $fillable = 
    [
        'days', 'max_delivery', 'available', 'restaurant_id',
    ];

    public function restaurants()
    {
        return $this->belongsTo('App\Restaurants', 'restaurant_id');
    }

}
