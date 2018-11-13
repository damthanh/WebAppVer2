<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coquan extends Model{
    protected $table = "coquan";

    public function csv(){
        return $this->hasManyThrough('App\Congtac','App\Csv','csv_id','coquan_id','id');
    }
}