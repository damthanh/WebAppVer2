<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model{
    protected $table = "csv";
     
    public function user(){
        return $this->belongsTo('App\User','id','user_id');
    }

    public function khoahoc(){
        return $this->belongsTo('App\Khoahoc','id','khoahoc_id');
    }

    public function coquan(){
        return $this->hasManyThrough('App\Congtac','App\Coquan','id','csv_id','id');
    }
}