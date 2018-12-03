<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lichsu;
use App\Thongbao;
use Carbon\Carbon;

class AdminListNoticeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListNotice(){
        if(Auth::user()->user_lv==1){
            $thongbao=Thongbao::all();
            return view('admin.adminNotice',['thongbao'=>$thongbao]);
        }else{
            return view('index');
        }
    }

    public function postListNotice(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $thongtin=$request->input('thongbao');
                    
                   
                    if(isset($thongtin)){
                    
                        Thongbao::insert([
                            'thongtin'=>$thongtin
                                    
                        ]);    
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them thong bao moi']);
                        $request->session()->flash('status','Thêm thông báo mới thành công'); 
                          
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $thongtin=$request->input("thongbao$checkedit");
                        
                        
                        Thongbao::where('id','=',$checkedit)->update([
                            'thongtin'=>$thongtin
                            
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin thong bao']);
                        $request->session()->flash('status','Sửa thông tin thông báo thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Thongbao::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa thong bao']);
                        $request->session()->flash('status','Xóa thông báo thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    Thongbao::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo thong bao']);
                    $request->session()->flash('status','Xóa toàn bộ thông báo thành công');
                    break;        
            }
        }
        return redirect('admin/listNotice');
    }
}
