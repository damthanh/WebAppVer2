<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lop;
use App\Khoahoc;
use Auth;
use App\Csv;
use App\Lichsu;
use Carbon\Carbon;
use App\User;
class RegisterInformationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getInformation(){
        $lop=Lop::all();
        $khoahoc=Khoahoc::all();
        $csv=Csv::where('user_id','=',Auth::user()->id)->first();
        
        return view('registerInformation',['lop'=>$lop,'khoahoc'=>$khoahoc,'csv'=>$csv]);
    }

    public function postInformation(Request $request){
        $ten=$request->input('ten');
        $ngaysinh=$request->input('ngaysinh');
        $quequan=$request->input('quequan');
        $sdt=$request->input('sdt');
        $email=Auth::user()->email;
        $user_id=Auth::user()->id;
        $khoahoc_id=$request->input('khoahoc');
        $lop_id=$request->input('lop');
        $csv=Csv::where('user_id','=',Auth::user()->id)->first();
        if($csv){
            Csv::where('id','=',$csv->id)->update([
                'hoten'=>$ten,
                'ngaysinh'=>$ngaysinh,
                'quequan'=>$quequan,
                'sdt'=>$sdt,
                'email'=>$email,
                'user_id'=>$user_id,
                'khoahoc_id'=>$khoahoc_id,
                'lop_id'=>$lop_id
            ]);
            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Cap nhat thong tin ca nhan']);
        }else{
            Csv::insert([
                'hoten'=>$ten,
                'ngaysinh'=>$ngaysinh,
                'quequan'=>$quequan,
                'sdt'=>$sdt,
                'email'=>$email,
                'user_id'=>$user_id,
                'khoahoc_id'=>$khoahoc_id,
                'lop_id'=>$lop_id
            ]);
            Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>1,'time'=>Carbon::now(),'action'=>'Them thong tin ca nhan']);    
        }
        User::where('id','=',Auth::user()->id)->update([
            'name'=>$ten
        ]);
        $request->session()->flash('status','Cap nhap thong tin ca nhan thanh cong'); 
        return redirect('information');
    }
}
