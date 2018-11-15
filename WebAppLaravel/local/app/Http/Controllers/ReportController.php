<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Congtac;
use App\Coquan;

class ReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getReport(){
        $mucluong = Congtac::avg('mucluong');
        $sum=Congtac::count();
        $nhanuoc = (Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Nha nuoc')->count()) / $sum * 100;
        $tunhan = (Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Tu nhan')->count()) / $sum * 100;
        $nuocngoai = (Congtac::join('coquan','congtac.coquan_id','=','coquan.id')->where('coquan.loaihinh','=','Nuoc ngoai')->count()) / $sum * 100;
        
        
        return view('report',['mucluong'=>$mucluong,'nhanuoc'=>$nhanuoc,'tunhan'=>$tunhan,'nuocngoai'=>$nuocngoai]);
    }
}
