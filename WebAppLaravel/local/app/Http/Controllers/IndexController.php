<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Thongbao;
class IndexController extends Controller
{
    //

    // public function __construct(){
    //     $this->middleware('guest');
    // }

    public function getIndex(){
        $thongbao=Thongbao::all();
        return view('index',['thongbao'=>$thongbao]);
    }
}
