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

Route::get('/', 'EmployeesController@index');

Auth::routes();

Route::get('index', 'HomeController@index')->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('index', 'EmployeesController', ['only' => ['index']]);
    Route::resource('employee_create', 'EmployeesController');
    //Route::resource('employee_create', 'EmployeesController', ['only' => ['index', 'create','store','show','edit','update','destroy']]);
    //Route::resource('goods', 'GoodsController', ['only' => ['create', 'store', 'destroy']]);
});