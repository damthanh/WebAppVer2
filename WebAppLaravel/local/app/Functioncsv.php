<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functioncsv extends Model {
    protected $table = "function";

    public function role(){
        return $this->hasManyThrough('App\RoleFunction','App\Role','function_id','id','id');
    }
}