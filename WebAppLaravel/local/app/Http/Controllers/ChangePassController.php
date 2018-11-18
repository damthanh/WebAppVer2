<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Lichsu;
class ChangePassController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function getChangePass(){
        return view('changePass');
    }

    public function postChangePass(Request $request){
        $password=$request->input('password');
        User::where('id','=',Auth::user()->id)->update([
           'password'=>$password     
        ]);
        $user=User::find(Auth::user()->id);
        Auth::logout();
        Auth::login($user);
        Lichsu::insert(['user_id'=>Auth::user()->id,'function_id'=>2,'time'=>Carbon::now(),'action'=>'Doi mat khau']);
        $request->session()->flash('status','Doi mat khau thanh cong');
        return redirect('changePass');
    }
}
