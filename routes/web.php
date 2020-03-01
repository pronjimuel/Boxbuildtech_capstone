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

use App\Product;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/update',function(){
    return view('auth.update');
});
Auth::routes();

Route::get('/home', 'ProductController@display');

Route::get('/dashboard',function(){

    $products = App\Product::all();

    return view('dashboardhome',compact('products'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('update/user','UserController@update');

