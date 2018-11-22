<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Csv;
use App\User;
use App\Khoahoc;
use App\Lop;
use App\Lichsu;
use Carbon\Carbon;
class AdminListCsvController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListCsv(){
        if(Auth::user()->user_lv==1){
            $user=User::all();
            $csv=Csv::all();  
            $khoahoc=Khoahoc::all();
            $lop=Lop::all();  
            return view('admin.adminListCsv',['csv'=>$csv,'user'=>$user,'khoahoc'=>$khoahoc,'lop'=>$lop]);
        }else{
            return view('index');
        }
    }

    public function postListCsv(Request $request){
        $btn=$request->input('btn');
        if($request->has('btn')){
            switch ($btn){
                case 'insert':
                    $hoten=$request->input('name');
                    $ngaysinh=$request->input('born');
                    $quequan=$request->input('hometown');
                    $sdt=$request->input('phone');
                    $user_id=$request->input('newuser_id');
                    $khoahoc_id=$request->input('course_id');
                    $lop_id=$request->input('class_id');
                    $csv=Csv::where('user_id','=',$request->input('newuser_id'))->get();
                    if($csv->has('user_id')){
                        $request->session()->flash('err','Tài khoản bạn chọn đã có thông tin về sinh viên');
                        
                    }else if(isset($hoten) && isset($ngaysinh) && isset($quequan) && isset($sdt) && isset($user_id) && isset($khoahoc_id) && isset($lop_id)){
                        
                        $user=User::find($user_id);
                        Csv::insert([
                            'hoten'=>$hoten,
                            'ngaysinh'=>$ngaysinh,
                            'quequan'=>$quequan,
                            'sdt'=>$sdt,
                            'email'=>$user->email,
                            'user_id'=>$user_id,
                            'khoahoc_id'=>$khoahoc_id,
                            'lop_id'=>$lop_id    
                        ]);
                        User::where('id','=',$user_id)->update([
                            'name'=>$hoten
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them thong tin sinh vien']);
                        $request->session()->flash('status','Thêm thông tin sinh viên thành công'); 
                             
                    }else{
                        $request->session()->flash('err','Không được bỏ trống bất cứ trường nào dưới đây');
                    }
                    break;
                case 'edit';
                    if($request->has('checkedit')){
                        $checkedit=$request->input('checkedit');
                        $hoten=$request->input("hoten$checkedit");
                        $ngaysinh=$request->input("ngaysinh$checkedit");
                        $quequan=$request->input("quequan$checkedit");
                        $sdt=$request->input("sdt$checkedit");
                        $email=$request->input("email$checkedit");
                        $user_id=$request->input("user_id$checkedit");
                        $khoahoc_id=$request->input("khoahoc_id$checkedit");
                        $lop_id=$request->input("lop_id$checkedit");
                        $user=User::find($user_id);
                        
                        Csv::where('id','=',$checkedit)->update([
                            'hoten'=>$hoten,
                            'ngaysinh'=>$ngaysinh,
                            'quequan'=>$quequan,
                            'sdt'=>$sdt,
                            'email'=>$email,
                            'user_id'=>$user_id,
                            'khoahoc_id'=>$khoahoc_id,
                            'lop_id'=>$lop_id 
                        ]);
                        User::where('id','=',$user_id)->update([
                            'email'=>$email,
                            'name'=>$hoten
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Sua thong tin sinh vien cho tai khoan co id: '.$user_id]);
                        $request->session()->flash('status','Sửa thông tin sinh viên thành công'); 
                             
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                        
                    } 
                    break;
                case 'delete';
                    $delete=$request->input("d");
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            Csv::where('id','=',$val)->delete();
                            
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa thong tin cua sinh vien']);
                        $request->session()->flash('status','Xóa thông tin cựu sinh viên thành công '); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    }   
                    break;  
                case 'deleteall':
                    Csv::query()->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa thong tin cua tat ca cuu sinh vien']);
                    $request->session()->flash('status','Xóa thông tin của tất cả cựu sinh viên thành công ');      
            }
        }
        return redirect('admin/listCsv');
    }
}
