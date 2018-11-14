<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterInformationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getInformation(){
        return view('registerInformation');
    }
}
