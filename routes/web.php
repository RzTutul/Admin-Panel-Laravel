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

Route::get('/', function () {
    return view('layout.loginpage');
});

Route::get('/contract','contractController@showdata')->name('all.contract');

Route::get('insertData','contractController@insertData');//It return a view
Route::post('/data-added','contractController@addDataInDB');
Route::get('delete-contract/{id}','contractController@deleteData');
Route::get('edit-contract/{id}','contractController@editData');//It return view with info
Route::post('update-contract/{id}','contractController@updateContract');
Route::get('view-contract/{id}','contractController@viewData');//It return view with info

Route::get('homepage', function () {
    return view('layout.homepage');
});

Route::get('adminpage', function () {
    return view('layout.admin');
});

Route::get('login-page', function () {
    return view('layout.loginpage');
});Route::get('registerpage', function () {
    return view('layout.registerpage');
});

Route::get('contractTable', function () {
    return view('layout.contracttable');
});