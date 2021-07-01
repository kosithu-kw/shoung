<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodpair extends Model
{
    public function cat(){
        return $this->belongsTo("App\Cat");
    }
    
}
