<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public function foodpairs(){
        return $this->hasMany("App\Foodpair");
    }
}
