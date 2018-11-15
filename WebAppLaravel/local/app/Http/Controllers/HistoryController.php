<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Lichsu;


class HistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getHistory(){
        $lichsu = Lichsu::where('user_id','=',Auth::user()->id)->get();
        return view('history',['lichsu'=>$lichsu]);
    }
}
