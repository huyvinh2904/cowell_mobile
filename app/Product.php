<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table ="products";

    public  function orders_items(){
        return $this->hasMany('App\OrderItem','product','id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category','id');
    }
}
