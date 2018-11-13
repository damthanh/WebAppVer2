<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoahoc extends Model{
    protected $table = "khoahoc";

    public function csv(){
        return $this->hasMany('App\Csv','khoahoc_id','id');
    }
}