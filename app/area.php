<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    protected $table = 'state_area'; 
    protected $primaryKey = 'area_id'; 
    protected $fillable = [
        'area_name', 
        'state_id'
    ];
}
