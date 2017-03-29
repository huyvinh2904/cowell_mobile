<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table ="orders";

    public function orders_items(){
      //  return $this
        return $this->hasMany('App\OrderItem','order','id');
    }
    public function client(){
        return $this->belongsTo('App\Client','client','id');
    }

    public function status(){
        return $this->belongsTo('App\Status','status','id');
    }
}
