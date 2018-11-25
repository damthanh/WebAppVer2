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

Route::get('login','AuthController@getLogin');

Route::post('login','AuthController@login')->name('login');

Route::get('','HomeController@getIndex');

Route::get('logout','HomeController@getLogout')->name('logout');

Route::get('home','IndexController@getIndex');

Route::get('information','RegisterInformationController@getInformation');

Route::post('information','RegisterInformationController@postInformation');

Route::get('history','HistoryController@getHistory');

Route::get('listStudent','ListStudentController@getListStudent');

Route::get('listStudent2','ListStudent2Controller@getListStudent2');

Route::get('report','ReportController@getReport');

Route::get('register','RegisterController@getRegister');

Route::post('register','RegisterController@postRegister');

Route::get('work','WorkController@getWork');

Route::post('work','WorkController@postWork');

Route::get('lop','ClassController@getLop');

Route::get('lop','ClassController@postLop');

Route::get('coquan','CompanyController@getCompany');

Route::post('coquan','CompanyController@postCompany');

Route::get('','IndexController@getIndex');

Route::get('changePass','ChangePassController@getChangePass');

Route::post('changePass','ChangePassController@postChangePass');

Route::get('khaosat','KhaosatController@getKhaosat');

Route::post('khaosat','KhaosatController@postKhaosat');

Route::get('searchStudent','SearchStudentController@getSearchStudent');

Route::post('searchStudent','SearchStudentController@postSearchStudent');

Route::group(['prefix'=>'admin'],function(){
    Route::get('home','HomeController@getIndex');
    
    Route::get('listCsv','AdminListCsvController@getListCsv');

    Route::post('listCsv','AdminListCsvController@postListCsv');

    Route::get('listUser','AdminListUserController@getListUser');

    Route::post('listUser','AdminListUserController@postListUser');

    Route::get('listCompany','AdminListCompanyController@getListCompany');

    Route::post('listCompany','AdminListCompanyController@postListCompany');

    Route::get('listCourse','AdminListCourseController@getListCourse');

    Route::post('listCourse','AdminListCourseController@postListCourse');

    Route::get('listClass','AdminListClassController@getListClass');

    Route::post('listClass','AdminListClassController@postListClass');

    Route::get('listWork','AdminListWorkController@getListWork');

    Route::post('listWork','AdminListWorkController@postListWork');

    Route::get('listNotice','AdminListNoticeController@getListNotice');

    Route::post('listNotice','AdminListNoticeController@postListNotice');

    Route::get('report','AdminReportController@getReport');

    Route::get('listSurvey','AdminListSurveyController@getListSurvey');

    Route::get('listHistory','AdminListHistoryController@getListHistory');
});