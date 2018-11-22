<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use Auth;
use DB;
use App\http\Requests;
use App\User;
use Illuminate\Support\MessageBag;
use RegisterInformationController;
use App\Lop;
use App\Khoahoc;
use App\Csv;
use App\Thongbao;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function getLogin(){
        return view('login');
    }

    public function login(Request $request){
        $user = DB::table('users')->get();

        
        
            $email = $request->input('email');
            $password = $request->input('password');
            foreach($user as $row){
                if($row->email==$email && $row->password==$password){
                    $tmpuser=User::find($row->id);
                    Auth::login($tmpuser);
                    $lop=Lop::all();
                    $khoahoc=Khoahoc::all();
                    $csv=Csv::where('user_id','=',Auth::user()->id)->first();
                    if(Auth::user()->user_lv==1){
                        return redirect('admin/home');
                    }else{
                        $thongbao=Thongbao::all();
                        return view('index',['thongbao'=>$thongbao]); 
                    }
                    
                    // return RegisterInformationController::getInformation();
                }
            }
            $errors = new MessageBag(['errorlogin' => 'Email hoac mat khau khong dung']);
            return redirect()->back()->withInput()->withErrors($errors);
            
            
    }
}
