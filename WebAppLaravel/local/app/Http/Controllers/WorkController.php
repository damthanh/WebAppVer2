<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Congtac;
use App\Csv;
use App\User;
use Auth;
use App\Coquan; 
use App\Lichsu;
use Carbon\Carbon;
 
class WorkController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    
    public function getWork(){
        $csv = Csv::where('user_id',Auth::user()->id)->first();
        $coquan=Coquan::all();
        $work = Congtac::join('coquan','congtac.coquan_id', '=', 'coquan.id')->where('csv_id',$csv->id)->select('congtac.id',
            'congtac.thoigian','congtac.vitri','congtac.mucluong','coquan.ten','coquan.diachi','coquan.loaihinh')->get();
        return view('work',['work'=>$work,'coquan'=>$coquan]);
    }

    public function postWork(Request $request){
        if($request->has('id')){
            $option = $request->input('option');
            $thoigian = $request->input('thoigian');
            $vitri = $request->input('vitri');
            $mucluong = $request->input('mucluong');
            
            if($option=='Edit'){
                Congtac::where('id','=',$request->id)->update([
                    'thoigian'=>$thoigian,
                    'vitri'=>$vitri,
                    'mucluong'=>$mucluong
                ]);
                Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua noi cong tac']); 
                $request->session()->flash('status','Cap nhat thanh cong');
            }else{
                Congtac::where('id','=',$request->id)->delete();
                Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa noi cong tac']);
                $request->session()->flash('status','Xoa thanh cong'); 
            }
        }else{
            $coquan_id=$request->input('coquan');
            $thoigian=$request->input('thoigian');
            $vitri=$request->input('vitri');
            $mucluong=$request->input('mucluong');
            $csv=Csv::where('user_id',Auth::user()->id)->first();
            Congtac::insert([
                'csv_id'=> $csv->id,
                'thoigian'=>$thoigian,
                'coquan_id'=>$coquan_id,
                'vitri'=>$vitri,
                'mucluong'=>$mucluong
            ]);  
            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them noi cong tac']);
            $request->session()->flash('status','Them moi thanh cong');  
        }
        
        return redirect('work');
    }
}
