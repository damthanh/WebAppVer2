<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListSudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListStudent(){
        return view('listStudent');
    }
}
