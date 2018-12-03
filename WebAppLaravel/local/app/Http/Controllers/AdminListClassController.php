<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Khoahoc;
use App\Lop;
use App\Lichsu;
use Carbon\Carbon;

class AdminListClassController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListClass(){
        if(Auth::user()->user_lv==1){
            $khoahoc=Khoahoc::all();
            $lop=Lop::all(); 
            return view('admin.adminListClass',['lop'=>$lop,'khoahoc'=>$khoahoc]);
        }else{
            return view('index');
        }
    }

    public function postListClass(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $tenlop=$request->input('tenlop');
                    $khoahoc_id=$request->input('khoahoc');
                   
                    if(isset($tenlop) && isset($khoahoc_id)){
                        $lop=Lop::where('tenlop','=',$tenlop)->first();
                        if(isset($lop)){
                            $request->session()->flash('err','Lớp học đã tồn tại');
                        } else{
                            Lop::insert([
                                'tenlop'=>$tenlop,
                                'khoahoc_id'=>$khoahoc_id,
                            
                                
                            ]);    
                            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them lop moi']);
                            $request->session()->flash('status','Thêm lớp mới thành công'); 
                        }   
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $tenlop=$request->input("tenlop$checkedit");
                        $khoahoc_id=$request->input("khoahoc_id$checkedit");
                        
                        Lop::where('id','=',$checkedit)->update([
                            'tenlop'=>$tenlop,
                            'khoahoc_id'=>$khoahoc_id,
                            
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin lop']);
                        $request->session()->flash('status','Sửa thông tin lớp thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Lop::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa lop']);
                        $request->session()->flash('status','Xóa lớp thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    Lop::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo lop']);
                    $request->session()->flash('status','Xóa toàn bộ lớp thành công');
                    break;        
            }
        }
        return redirect('admin/listClass');
    }
}
