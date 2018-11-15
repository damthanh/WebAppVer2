<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table="lop";
    public function csv(){
        return $this->hasMany('App\Csv','lop_id','id');
    }
}
