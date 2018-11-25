<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Csv;
use App\Khaosat;
use Auth;
use App\Lichsu;
use Carbon\Carbon;
class KhaosatController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getKhaosat(){
        return view('khaosat');
    }

    public function postKhaosat(Request $request){
        $answer1=$request->input('answer1');
        $answer2=$request->input('answer2');
        $answer3=$request->input('answer3');
        $answer4=$request->input('answer4');
        $answer5=$request->input('answer5');
        
        
        Khaosat::insert([
       
            'cauhoi'=>"Cong viec hien tai cua ban co dung voi dinh huong cua ban khong?",
            'cautraloi'=>$answer1
        ]);
        Khaosat::insert([
    
            'cauhoi'=>"Ban co hai long voi cong viec hien tai khong?",
            'cautraloi'=>$answer2
        ]);
        Khaosat::insert([
          
            'cauhoi'=>"Ban co thich cong viec hien tai khong?",
            'cautraloi'=>$answer3
        ]);
        Khaosat::insert([
          
            'cauhoi'=>"Ban muon lam viec o vi tri nao?",
            'cautraloi'=>$answer4
        ]);
        Khaosat::insert([

            'cauhoi'=>"Ban mong muon lam viec o cong ty nao?",
            'cautraloi'=>$answer5
        ]);
        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Tra loi cau hoi khao sat']);  
        $request->session()->flash('status','Bạn đã hoàn thành khảo sát');  
        return redirect('khaosat');    
    }
}
