<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    protected $table = "states";

    protected $primaryKey = 'state_id';

    protected $fillable = [
        'state_name'
    ];
}
