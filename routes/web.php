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

Route::get('/', ['uses'=>'DepartmentController@populateNavigation'], function () {
    // return view('index');
});


Route::get('/contact', function () { 
    return view('contact');
});

Route::get('/programare', function(){  return view('appointment'); });
Route::get('/departamente',['uses'=>'DepartmentController@index'], function () { });
Route::get('/echipa', ['uses'=>'DoctorController@index'],function(){});
Route::get('/profil/{doctor}' ,['uses'=>'DoctorController@displayProfile'], function(){
});  