<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Khoahoc;
class LopController extends Controller
{
    // public function  __construct(){
    //     $this->middleware('auth');
    // }

    public function getLop(){
        $khoahoc=Khoahoc::all();
        return view('lop',['khoahoc'=>$khoahoc]);
    }

    public function postLop(Request $request){

    }
}
