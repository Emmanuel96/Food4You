<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = "batch"; 
    protected $primary_key = "batch_id";
    
    protected $fillable = 
    [
        'batch_id',
        'batch_slug', 
        'batch_day',
        'batch_max_order_no',
        'batch_order_no',
        'batch_time_range'
    ];

    public function Restaurant() {

        return $this->belongsTo('App\Restaurants');
    }
}
