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

use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function(){
    $data = 'this is a var';
    return view('hello', compact('data'));
});
route::get('/test', function(){
    $data = "This is a test";
    return view('hello')->with('data');
});
Route::get('index','HelloController@index');
Route::get('/about', 'HelloController@about_test');
Route::get('/services', 'HelloController@services');
