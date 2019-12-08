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
    return view('welcome');
});

Route::get("product", "PageController@getProduct");
Route::get("detail", "PageController@getDetail");
Route::get("checkout", "PageController@getCheckout");
Route::get("contact", "PageController@getContact");
Route::get("index", "PageController@getIndex");



// Route:: get ('index',[
//     'as' =>'trang-chu',
//     'users' => 'PageController@getIndex',
//     return view('master');
// ]);
// Route::get('/', function () {
//     return view('contact');
// });