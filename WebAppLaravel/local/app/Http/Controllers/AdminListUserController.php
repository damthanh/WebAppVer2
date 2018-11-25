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

class AdminListUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListUser(){
        if(Auth::user()->user_lv==1){
            $user=User::all();
              
            return view('admin.adminListUser',['user'=>$user]);
        }else{
            return view('index');
        }
    }

    public function postListUser(Request $request){
        if($request->has('btn')){
            $btn=$request->input('btn');
            switch($btn){
                case 'insert':
                    $email=$request->input('email');
                    $password=$request->input('password');
                    $user_lv=$request->input('user_lv');
                    if(isset($email) && isset($password) && isset($user_lv)){
                        $user=User::where('email','=',$email)->first();
                        if(isset($user)){
                            $request->session()->flash('err','Email đã tồn tại');
                        } else{
                            User::insert([
                                'email'=>$email,
                                'password'=>$password,
                                'user_lv'=>$user_lv,
                                'created_at'=>Carbon::now()
                            ]);    
                            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them tai khoan moi']);
                            $request->session()->flash('status','Thêm tài khoản mới thành công'); 
                        }   
                    }else{
                        $request->session()->flash('err','Bạn không được để trống trường nào dưới đây');
                    }
                    break;
                case 'edit':
                    $checkedit=$request->input('checkedit');
                    if(isset($checkedit)){
                        $email=$request->input("email$checkedit");
                        $password=$request->input("password$checkedit");
                        $user_lv=$request->input("user_lv$checkedit");
                        User::where('id','=',$checkedit)->update([
                            'email'=>$email,
                            'password'=>$password,
                            'user_lv'=>$user_lv
                        ]);
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Sua thong tin tai khoan']);
                        $request->session()->flash('status','Sửa thông tin tài khoản thành công');
                    }else{
                        $request->session()->flash('err','Bạn phải chọn 1 hàng để sửa');
                    }    
                    break;
                case 'delete':
                    $delete=$request->input('d');
                    if(isset($delete)){
                        foreach($delete as $key=>$val){
                            User::where('id',$val)->delete();
                        }
                        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa tai khoan nguoi dung']);
                        $request->session()->flash('status','Xóa tài khoản thành công'); 
                    }else{
                        $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                    } 
                    break;
                case 'deleteall':
                    User::where('id','<>',Auth::user()->id)->delete();
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa toan bo tai khoan']);
                    $request->session()->flash('status','Xóa toàn bộ tài khoản người dùng thành công');
                    break;        
            }
        }
        return redirect('admin/listUser');
    }
}
