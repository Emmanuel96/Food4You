<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class order extends Model
{
    use Notifiable;

    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    protected $fillable = 
    [
      'payment_ref', 'restaurant_id','buyer_address','buyer_name','buyer_phone_number','order_slug',
    ];

    public function products()
    {
       //function is supposed to call all the products for this order

    }


    public function user()
    {
       return $this->belongsTo('App\User', 'buyer_id', 'id');
    }

    public function routeNotificationForNexmo()
    {
       return $this->buyer_phone_number;
    }
}
