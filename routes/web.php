<?php

/*use Illuminate\Support\Facades\Route;

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



Route::get('/',"TeacherController@masterview");
Route::get('/register',"TeacherController@register");
Route::get('/signup',"TeacherController@signup");
Route::get('/login',"TeacherController@login")->name('login');
Route::get('/logout',"TeacherController@logout");
Route::post('/authenticate',"TeacherController@authenticate");


Route::get('/edit/{id}',"StudentController@edit");
Route::get('/show/{id}',"StudentController@show");
Route::get('/create',"StudentController@create");
Route::get('/store',"StudentController@store");
Route::get('/update/{id}',"StudentController@update");
Route::get('/delete/{id}',"StudentController@delete");
Route::get('/destroy/{id}',"StudentController@destroy");
