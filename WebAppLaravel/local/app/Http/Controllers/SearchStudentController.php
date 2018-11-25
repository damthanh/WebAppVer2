<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Csv;
use App\User;
use Auth;

class SearchStudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getSearchStudent(){
        return view('searchStudent');
    }

    public function postSearchStudent(Request $request){
        $ten=$request->input('ten');
        if(isset($ten) && $ten!=''){
            // $csv=Csv::where('hoten','like',"%$ten%")->get();
            $csv= Csv::where('hoten','like',"%$ten%")->join('lop','csv.lop_id','=','lop.id')->join('khoahoc','csv.khoahoc_id','=','khoahoc.id')->orderBy('csv.hoten','desc')->get();
            return view('searchStudent',['csv'=>$csv]);
        }
        else{
            $request->session()->flash('err','Bạn không được để trống trường tên dưới đây');
            return view('searchStudent');
        }
    }
}
