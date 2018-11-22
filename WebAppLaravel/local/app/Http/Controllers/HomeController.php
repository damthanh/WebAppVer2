<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Thongbao;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>'getLogout']);
    }

    public function getIndex(){
        $thongbao=Thongbao::all();
        if(Auth::user()->user_lv==1){
            
            return view('admin.adminIndex',['thongbao'=>$thongbao]);
        }
        return view('index',['thongbao'=>$thongbao]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
