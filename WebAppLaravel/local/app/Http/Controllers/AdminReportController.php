<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Congtac;


class AdminReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getReport(){
        if(Auth::user()->user_lv==1){
            
            $mucluong = round(Congtac::avg('mucluong'));
            $sum=Congtac::count();
            $nhanuoc = floor((Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Nha nuoc')->count()) / $sum * 100);
            $tunhan = floor((Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Tu nhan')->count()) / $sum * 100);
            $nuocngoai = floor((Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Nuoc ngoai')->count()) / $sum * 100);
            $luong1 = Congtac::where('mucluong','<',1000)->count();
            $luong2 = Congtac::whereBetween('mucluong',[1000,2000])->count();
            $luong3 = Congtac::whereBetween('mucluong',[2001,3000])->count();
            $luong4 = Congtac::whereBetween('mucluong',[3001,5000])->count();
            $luong5 = Congtac::where('mucluong','>',5000)->count();

        
        return view('admin.adminReport',['mucluong'=>$mucluong,'nhanuoc'=>$nhanuoc,'tunhan'=>$tunhan,'nuocngoai'=>$nuocngoai,'luong1'=>$luong1,'luong2'=>$luong2,'luong3'=>$luong3,'luong4'=>$luong4, 'luong5'=>$luong5]);
        }else{
            return view('index');
        }
    }
}
