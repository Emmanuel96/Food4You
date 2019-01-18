<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\menu;

class Category extends Model
{
    public $fillable = 
    [
        'category_name', 
        'restaurant_id',
        'created_at'. 
        'updated_at'
    ];

    protected $table = 'categories';
    protected $primaryKey = "category_id";

    public function menu()
    {
        return $this->hasMany(menu::class);
    }

    public function restaurants()
    {
        return $this->belongsTo('App\Restaurants', 'restaurant_id');
    }
}
