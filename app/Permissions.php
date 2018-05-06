<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    //
    public function users(){
        return $this->hasMany('App\Users','permissions_id');
    }
}
