<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\Khaosat;
class AdminListSurveyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListSurvey(){
        if(Auth::user()->user_lv==1){
            
            $khaosat=Khaosat::all(); 
            return view('admin.adminListSurvey',['khaosat'=>$khaosat]);
        }else{
            return view('index');
        }
    }
}
