<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    protected $table = 'promo'; 
    protected $primary_key = 'promo_id'; 
    protected $fillable = [
        'promo_code', 
        'promo_percent_off'
    ];
}
