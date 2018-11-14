<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class IndexController extends Controller
{
    //

    // public function __construct(){
    //     $this->middleware('guest');
    // }

    public function getIndex(){
        return view('index');
    }
}
