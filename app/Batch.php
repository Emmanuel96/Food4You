<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = "batch"; 
    protected $primary_key = "batch_id";
    public $fillable = 
    [
        'batch_slug', 
        'batch_day',
        'batch_max_order_no',
        'batch_order_no',
        'batch_time_range'
    ];
}
