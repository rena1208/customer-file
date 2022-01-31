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

// Route::get('/', function () {
//     return view('top');
// });
// Route::get('/index', function () {
//     return view('index');
// });
Auth::routes();

Route::get('/home', 'HomeController@login')->name('home');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/home', 'HomeController@login');
    Route::get('/', 'HomeController@login');
    
// お客様登録画面表示用
    Route::get('/post/customer', 'PostCustomerController@create')->name('post.create');

// 登録ボタンを押した時
    Route::post('/post/customer', 'PostCustomerController@store')->name('post.store');

// お客様一覧の表示
    route::get('/index', 'PostCustomerController@index');


});