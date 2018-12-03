<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lichsu;
use Carbon\Carbon;

class AdminListHistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getListHistory(){
        if(Auth::user()->user_lv==1){
            
            $lichsu=Lichsu::join('users','users.id','=','lichsu.user_id')->orderBy('lichsu.time','desc')->select('users.email','lichsu.id','lichsu.user_id','lichsu.time','lichsu.action')->get(); 
            return view('admin.adminListHistory',['lichsu'=>$lichsu]);
        }else{
            return view('index');
        }
    }

    public function postListHistory(Request $request){
        $month=$request->input('month');
        $btn=$request->input('btn');
        switch($btn){
            case 'search':
                $lichsu=Lichsu::whereMonth('time','=',$month)->join('users','users.id','=','lichsu.user_id')->orderBy('lichsu.time','desc')->get();
                
                break;
            case 'delete':
                $delete=$request->input("d");
                if(isset($delete)){
                    foreach($delete as $key=>$value){
                        Lichsu::where('id','=',$value)->delete();
                    }
                    Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>3,'time'=>Carbon::now(),'action'=>'Xoa thong lich su nguoi dung']);
                    $request->session()->flash('status','Xóa lịch sử người dùng thành công '); 
                }else{
                    $request->session()->flash('err','Bạn phải chọn ít nhất 1 hàng để xóa');
                }  
                $lichsu=Lichsu::join('users','users.id','=','lichsu.user_id')->orderBy('lichsu.time','desc')->get(); 
                break;  
        }
        
        return view('admin.adminListHistory',['lichsu'=>$lichsu]);
    }
}
