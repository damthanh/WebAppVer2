<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Coquan;
use App\Lichsu;
use Carbon\Carbon;
use App\User;

class AdminListCompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListCompany(){
        if(Auth::user()->user_lv==1){
            $user=User::all();
            $coquan=Coquan::all(); 
            return view('admin.adminListCompany',['coquan'=>$coquan]);
        }else{
            return view('index');
        }
    }

    public function postListCompany(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $tencoquan=$request->input('name');
                    $diachi=$request->input('diachi');
                    $loaihinh=$request->input('loaihinh');
                    if(isset($tencoquan) && isset($diachi) && isset($loaihinh)){
                        $coquan=Coquan::where('ten','=',$tencoquan)->where('diachi',$diachi)->where('loaihinh',$loaihinh)->first();
                        if(isset($user)){
                            $request->session()->flash('err','Cơ quan đã tồn tại');
                        } else{
                            Coquan::insert([
                                'ten'=>$tencoquan,
                                'diachi'=>$diachi,
                                'loaihinh'=>$loaihinh,
                                
                            ]);    
                            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them co quan moi']);
                            $request->session()->flash('status','Thêm cơ quan mới thành công'); 
                        }   
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $tencoquan=$request->input("coquan$checkedit");
                        $diachi=$request->input("diachi$checkedit");
                        $loaihinh=$request->input("loaihinh$checkedit");
                        Coquan::where('id','=',$checkedit)->update([
                            'ten'=>$tencoquan,
                            'loaihinh'=>$loaihinh,
                            'diachi'=>$diachi
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin co quan']);
                        $request->session()->flash('status','Sửa thông tin cơ quan thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Coquan::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa co quan']);
                        $request->session()->flash('status','Xóa cơ quan thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    Coquan::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo co quan']);
                    $request->session()->flash('status','Xóa toàn bộ cơ quan thành công');
                    break;        
            }
        }
        return redirect('admin/listCompany');
    }
}
