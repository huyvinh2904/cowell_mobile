<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $table ="items";
    public function categories(){
        return $this->hasMany('App\Category','item','id');
    }
}
