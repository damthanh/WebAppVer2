<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Csv;
use App\Khoahoc;
use App\Lop;

class ListStudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListStudent(){
        $user=Csv::where('user_id','=',Auth::user()->id)->first();
        $lop= Csv::where('lop_id','=',$user->lop_id)->where('csv.id','<>',$user->id)->join('lop','csv.lop_id','=','lop.id')->join('khoahoc','csv.khoahoc_id','=','khoahoc.id')->orderBy('csv.hoten','desc')->get();
        $khoa= Csv::where('csv.khoahoc_id','=',$user->khoahoc_id)->where('csv.id','<>',$user->id)->join('lop','csv.lop_id','=','lop.id')->join('khoahoc','csv.khoahoc_id','=','khoahoc.id')->orderBy('csv.hoten','desc')->get();
        return view('listStudent',['lop'=>$lop,'khoa'=>$khoa]);
    }
}
