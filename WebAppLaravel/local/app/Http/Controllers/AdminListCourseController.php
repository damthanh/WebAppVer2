<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lichsu;
use App\Khoahoc;
use Carbon\Carbon;

class AdminListCourseController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListCourse(){
        if(Auth::user()->user_lv==1){
            
            $khoahoc=Khoahoc::all(); 
            return view('admin.adminListCourse',['khoahoc'=>$khoahoc]);
        }else{
            return view('index');
        }
    }

    public function postListCourse(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $tenkhoahoc=$request->input('tenkhoahoc');
                    $ghichu=$request->input('ghichu');
                   
                    if(isset($tenkhoahoc) && isset($ghichu)){
                        $khoahoc=Khoahoc::where('tenkhoahoc','=',$tenkhoahoc)->first();
                        if(isset($khoahoc)){
                            $request->session()->flash('err','Khóa học đã tồn tại');
                        } else{
                            Khoahoc::insert([
                                'tenkhoahoc'=>$tenkhoahoc,
                                'ghichu'=>$ghichu,
                            
                                
                            ]);    
                            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them khoa hoc moi']);
                            $request->session()->flash('status','Thêm khóa học mới thành công'); 
                        }   
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $tenkhoahoc=$request->input("tenkhoahoc$checkedit");
                        $ghichu=$request->input("ghichu$checkedit");
                        
                        Khoahoc::where('id','=',$checkedit)->update([
                            'tenkhoahoc'=>$tenkhoahoc,
                            'ghichu'=>$ghichu
                            
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin khoa hoc']);
                        $request->session()->flash('status','Sửa thông tin khóa học thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Khoahoc::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa khoa hoc']);
                        $request->session()->flash('status','Xóa khóa học thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    Khoahoc::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo khoa hoc']);
                    $request->session()->flash('status','Xóa toàn bộ khóa học thành công');
                    break;        
            }
        }
        return redirect('admin/listCourse');
    }
}
