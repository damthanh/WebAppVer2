<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use Auth;
use DB;
use App\http\Requests;
use App\User;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;

class RegisterController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $user=DB::table('users')->select('email')->get();
        $email=$request->input('email');
        $password=$request->input('password');
        foreach($user as $row){
            if($row->email==$email){
                $errors = new MessageBag(['erroremail' => 'Email da ton tai!']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
        DB::table('users')->insert(
            ['email' => $email, 'password' => $password, 'created_at' => Carbon::now()]
        );
        $newUser=User::where('email',"$email")->get();
        foreach($newUser as $row){
            $tmpUser=User::find($row->id);
            Auth::login($tmpUser);
        }
        DB::table('lichsu')->insert(
            ['user_id' => Auth::user()->id, 'function_id' => 1, 'action' => 'dang ki tai khoan thanh cong']
        );
        // return Auth::user()->email;
        // $tmpUser=User::find($newUser->id);
        // Auth::login($tmpUser);
        return redirect('information');
    }
}
