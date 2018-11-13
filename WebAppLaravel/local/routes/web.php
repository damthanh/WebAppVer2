<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Role;
use App\User;    
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('master',function(){
    return view('master');
});

Route::get('test',function(){
    $user = User::find(4);

    echo $user->checkEmail("123");
});

Route::get('login','AuthController@getLogin');

Route::post('login','AuthController@login')->name('login');

Route::get('','HomeController@getIndex');

Route::get('logout','HomeController@getLogout');

Route::get('home','IndexController@getIndex');

Route::get('information','RegisterInformationController@getInformation');

Route::get('history','HistoryController@getHistory');

Route::get('listStudent','ListStudentController@getListStudent');

Route::get('report','ReportController@getReport');

// Route::group(['prefix'=>'admin'],function(){
//     Route::get('test',function(){
//         return 'done';
//     });
// });

// Route::middleware(['web'])->get('Session',function(){
   
        
   
// });
