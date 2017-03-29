<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $table ="orders_items";

    public function order(){
        return $this->belongsTo('App\Order','order','id');
    }

    public function product(){
        return $this->belongsTo('App\Product','product','id');
    }
}
