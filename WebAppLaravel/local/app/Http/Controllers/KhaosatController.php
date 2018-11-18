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
        $csv=Csv::where('user_id','=',Auth::user()->id)->first();
        $isexist=Khaosat::where('csv_id','=',$csv->id)->get();
        if($isexist){
            Khaosat::where('csv_id','=',$csv->id)->delete();
        }
        Khaosat::insert([
            'csv_id'=>$csv->id,
            'cauhoi'=>"Cong viec hien tai cua ban co dung voi dinh huong cua ban khong?",
            'cautraloi'=>$answer1
        ]);
        Khaosat::insert([
            'csv_id'=>$csv->id,
            'cauhoi'=>"Ban co hai long voi cong viec hien tai khong?",
            'cautraloi'=>$answer2
        ]);
        Khaosat::insert([
            'csv_id'=>$csv->id,
            'cauhoi'=>"Ban co thich cong viec hien tai khong?",
            'cautraloi'=>$answer3
        ]);
        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Tra loi cau hoi khao sat']);    
        return redirect('home');    
    }
}
