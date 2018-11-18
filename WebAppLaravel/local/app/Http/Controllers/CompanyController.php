<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Coquan;
use App\Lichsu;
use Carbon\Carbon;
class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getCompany(){
        
        return view('coquan');
    }

    public function postCompany(Request $request){
        $ten = $request->input('ten');
        $loaihinh = $request->input('loaihinh');
        $diachi = $request->input('diachi');
        Coquan::insert([
            'ten'=>$ten,
            'loaihinh'=>$loaihinh,
            'diachi'=>$diachi
        ]);    
        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them co quan moi']);    
        $request->session()->flash('status','Them moi thanh cong'); 
        return redirect('coquan');
    }
}
