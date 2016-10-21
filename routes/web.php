<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('emps',"EmpController");

Route::get('/{model}/' ,['uses'  => 'MasterController@index' , 'as'=>'index']);
Route::get('/{model}/create' ,['uses'  => 'MasterController@create' , 'as'=>'create']);
Route::post('/{model}/store' ,['uses'  => 'MasterController@store' , 'as'=>'store']);

Route::get('/{model}/{id}/edit' ,['uses'  => 'MasterController@edit' , 'as'=>'edit']);
Route::put('/{model}/update/{id}' ,['uses'  => 'MasterController@update' , 'as'=>'update']);
Route::delete('/{model}/destroy/{id}' ,['uses'  => 'MasterController@destroy' , 'as'=>'destroy']);
