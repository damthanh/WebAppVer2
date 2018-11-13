<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congtac extends Model{
    protected $table = "congtac";

    public function coquan(){
        return $this->belongsTo('App\Coquan','id','coquan_id');
    }

    public function csv(){
        return $this->belongsTo('App\Csv','id','csv_id');
    }
}