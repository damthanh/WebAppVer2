<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    

    public function getMaster(){
        return view('master');
    }

    public function getSite($site){
        return view("$site");
    }
}
