<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // protected $table = 'user';

    public function role(){
        return $this->hasManyThrough('App\UserRole','App\Role','user_id','id','id');
    }

    public function function(){
        return $this->hasManyThrough('App\UserRole','App\Role','App\RoleFunction','App\Function','user_id','id','role_id','id','id');
    }   

    public function csv(){
        return $this->hasMany('App\Csv','user_id','id');
    }

    public function lichsu(){
        return $this->hasMany('App\Lichsu','user_id','id');
    }

    public function checkEmail($email){
        $user=$this->select(['email'])->get();
        // echo $user;
        foreach($user as $row){
            if( $row->email==$email) return true;
        }
        return "email not exist";
    }

    public function checkUser($email,$password){
        $user=$this->select(['email','password'])->get();
        foreach($user as $row){
            
                if($row->email==$email && $row->password==$password) return true;
            
        }
        return false;
    }
}
