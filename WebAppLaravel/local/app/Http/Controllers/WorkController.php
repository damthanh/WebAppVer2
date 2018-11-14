<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Congtac;
use App\Csv;
use App\User;
use Auth;  
class WorkController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    
    public function getWork(){
        $csv = Csv::where('user_id',Auth::user()->id)->first();
        $work = Congtac::join('coquan','congtac.coquan_id', '=', 'coquan.id')->where('csv_id',$csv->id)->select(
            'congtac.thoigian','congtac.vitri','congtac.mucluong','coquan.ten','coquan.diachi','coquan.loaihinh')->get();
        return view('work',['work'=>$work]);
    }
}
