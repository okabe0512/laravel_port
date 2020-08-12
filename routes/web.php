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

Route::get('/', function () {
    return view('welcome');
});

//NewsController
Route::group(['prefix' => 'admin'], function() {
// ['prefix' => 'admin']は http://XXX.jp/admin/ から始まるURL にしている
  Route::get('news/create', 'Admin\NewsController@add');
  //http://XXX.jp/admin/news/create にアクセスが来たら、
  //Controller Admin\NewsController のAction addに渡す
});

//ProfileController
Route::group(['prefix' => 'admin'], function() {
  Route::get('Profile/create', 'Admin\ProfileController@add');
  Route::get('Profile/edit', 'Admin\ProfileController@edit');
});
