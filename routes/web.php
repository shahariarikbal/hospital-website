<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@index');
Route::post('/send/appointment', 'FrontendController@appointment');
Route::get('/about/us', 'FrontendController@about');
Route::get('/contact/us', 'FrontendController@contact');
Route::post('/contact/store', 'FrontendController@contactStore');
Route::get('/doctor/list', 'FrontendController@expertList');
Route::get('/careers', 'FrontendController@career');

Auth::routes(['register' => false]);

Route::get('/dashboard', 'HomeController@index')->name('home');


//Department route list
Route::prefix('department')->group(function () {
    Route::get('/index', 'DepartmentController@index');
    Route::get('/create', 'DepartmentController@create');
    Route::post('/store', 'DepartmentController@store');
    Route::get('/edit/{id}/{slug}', 'DepartmentController@edit');
    Route::post('/update/{department}', 'DepartmentController@update');
    Route::get('/delete/{department}', 'DepartmentController@destroy');
});

//Doctor route list
Route::prefix('doctor')->group(function () {
    Route::get('/index', 'DoctorController@index');
    Route::get('/create', 'DoctorController@create');
    Route::post('/store', 'DoctorController@store');
    Route::get('/edit/{id}/{slug}', 'DoctorController@edit');
    Route::post('/update/{id}', 'DoctorController@update');
    Route::get('/delete/{doctor}', 'DoctorController@destroy');
});

Route::get('/banner/index', 'HomeController@banner');
Route::get('/banner/create', 'HomeController@create');
Route::post('/banner/store', 'HomeController@store');
Route::get('/banner/edit/{id}/{slug}', 'HomeController@edit');
Route::post('/banner/update/{id}', 'HomeController@update');
Route::get('/banner/delete/{slider}', 'HomeController@destroy');


Route::get('/about-us', 'HomeController@about');
Route::get('/user/query', 'HomeController@contact');
Route::get('/career', 'HomeController@career');
Route::get('/service', 'HomeController@service');
Route::get('/notice', 'HomeController@notice');
Route::get('/appointment/list', 'HomeController@appointmentList');
Route::get('/appointment/delete/{id}', 'HomeController@appointmentDelete');
Route::get('/appointment/show/{id}', 'HomeController@appointmentShow');
