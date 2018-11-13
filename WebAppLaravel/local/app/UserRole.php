<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model{
    protected $table = "user_role";

    public function user(){
        return $this->belongsTo('App\User','id','user_id');
    }
}