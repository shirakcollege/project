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
Route::get('/file', function () {

    return view('file.account');
});


Route::get('/usersAccount', function () {

    return view('usersAccount.usersAccount');
});

Route::get('/product', function () {

    return view('product.product');
});


Route::get('/content', function () {

    return view('content.content');
});


Route::get('/usersInfo', function () {

    return view('usersInfo.usersInfo');
});

Route::get('/aboutUsers', function () {

    return view('aboutUsers.aboutUsersPhp');
});


Route::get('/log', function () {

    return view('log.login');
});



Route::get('/alert', function () {

    return view('alert.alert');
});

Route::get('/usersInfo', function () {

    return view('usersInfo.usersInfo');
});


Route::get('/', function (){

    return view('welcome');
});


Route::post('register_action', 'RegisterController@funcForRegistration');
Route::post('forLoginaction', 'RegisterController@loginuser');
Route::get('forLoginaction', 'loginUsersControl@funcUserValidation');
Route::get('register_action', 'loginUsersControl@validationPasword');
Route::post('change_action', 'RegisterController@funcChangePassword');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
