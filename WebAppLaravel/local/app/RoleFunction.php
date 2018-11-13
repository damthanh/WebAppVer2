<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleFunction extends Model{
    protected $table = "role_function";

    public function role(){
        return $this->belongsTo('App\Role','id','role_id');
    }
}