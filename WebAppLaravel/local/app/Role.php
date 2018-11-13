<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    protected $table = "role";
    
    public function functioncsv(){
        return $this->hasManyThrough('App\RoleFunction','App\Functioncsv','id','role_id','id');
    }
}