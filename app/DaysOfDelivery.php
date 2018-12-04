<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaysOfDelivery extends Model
{
    protected $table = 'days_of_delivery';
    protected $primaryKey = "id";
    
    public $fillable = 
    [
        'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'days', 'available'
    ];

    public function restaurants()
    {
        return $this->belongsTo('App\Restaurants', 'restaurant_id');
    }
}
