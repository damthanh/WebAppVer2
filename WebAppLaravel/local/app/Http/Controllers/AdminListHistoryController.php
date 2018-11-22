<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lichsu;

class AdminListHistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListHistory(){
        if(Auth::user()->user_lv==1){
            
            $lichsu=Lichsu::orderBy('time','desc')->get(); 
            return view('admin.adminListHistory',['lichsu'=>$lichsu]);
        }else{
            return view('index');
        }
    }
}
