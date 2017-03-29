<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table ="clients";

    public function orders(){
        return $this->hasMany('App\Order','client','id');
    }
}
