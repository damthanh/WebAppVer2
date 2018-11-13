<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use Auth;
use DB;
use App\http\Requests;
use App\User;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function login(Request $request){
        $user = DB::table('users')->get();

        $rule = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $message = [
            'password.min' => 'Mat khau phai chua 8 ki tu',
        ];
        $validator = Validator::make($request->all(), $rule, $message);
        if($validator->fails()){
            
            return redirect()->back()->withError($validator)->withInput();
        }else{
            $email = $request->input('email');
            $password = $request->input('password');
            foreach($user as $row){
                if($row->email==$email && $row->password==$password){
                    $tmpuser=User::find($row->id);
                    Auth::login($tmpuser);
                    // return view('registerInformation');
                    return redirect()->intended('/');
                }
            }
            $errors = new MessageBag(['errorlogin' => 'Email hoac mat khau khong dung']);
            return redirect()->back()->withInput()->withErrors($errors);
            
        }    
    }
}