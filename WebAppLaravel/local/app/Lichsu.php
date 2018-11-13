<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lichsu extends Model{
    protected $table = "lichsu";

    public function user(){
        return $this->belongsTo('App\User','id','user_id');
    }

    public function function(){

    }
}