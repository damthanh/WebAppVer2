<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lichsu;
use App\Congtac;
use App\Coquan;
use App\Csv;
use Carbon\Carbon;

class AdminListWorkController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListWork(){
        if(Auth::user()->user_lv==1){
            $work = Congtac::all();
            $coquan = Coquan::all();
            $csv = Csv::all();
            return view('admin.adminListWork',['work'=>$work,'coquan'=>$coquan,'csv'=>$csv]);
        }else{
            return view('index');
        }
    }

    public function postListWork(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $csv_id=$request->input('csv_id');
                    $thoigian=$request->input('thoigian');
                    $coquan_id=$request->input('coquan_id');
                    $vitri=$request->input('vitri');
                    $mucluong=$request->input('mucluong');
                   
                    if(isset($csv_id) && isset($thoigian) && isset($coquan_id) && isset($vitri) && isset($mucluong)){ 
                        Congtac::insert([
                            'csv_id'=>$csv_id,
                            'thoigian'=>$thoigian,
                            'coquan_id'=>$coquan_id,
                            'vitri'=>$vitri,
                            'mucluong'=>$mucluong   
                        ]);    
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them khoa noi cong tac moi']);
                        $request->session()->flash('status','Thêm nơi công tác mơi thành công'); 
                         
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $csv_id=$request->input("csv_id$checkedit");
                        $thoigian=$request->input("thoigian$checkedit");
                        $coquan_id=$request->input("coquan_id$checkedit");
                        $vitri=$request->input("vitri$checkedit");
                        $mucluong=$request->input("mucluong$checkedit");
                        Congtac::where('id','=',$checkedit)->update([
                            'csv_id'=>$csv_id,
                            'thoigian'=>$thoigian,
                            'coquan_id'=>$coquan_id,
                            'vitri'=>$vitri,
                            'mucluong'=>$mucluong
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin noi cong tac']);
                        $request->session()->flash('status','Sửa thông tin nơi công tác thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Congtac::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa noi cong tac']);
                        $request->session()->flash('status','Xóa nơi công tác thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    Khoahoc::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo noi cong tac']);
                    $request->session()->flash('status','Xóa toàn bộ nơi công tác thành công');
                    break;        
            }
        }
        return redirect('admin/listWork');
    }
}
