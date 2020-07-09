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
Route::get('index', ['as'=>'Trang chu','uses'=>'PageController@getIndex']);
Route::get('product', ['as'=>'San Pham','uses'=>'PageController@getProduct']);
Route::get('product-detail', ['as'=>'Chi tiet San Pham','uses'=>'PageController@getProductDetail']);
Route::get('shopping-cart', ['as'=>'Gio Hang','uses'=>'PageController@getShopingCart']);
Route::get('login', ['as'=>'login','uses'=>'PageController@getLogin']);
Route::get('contact', ['as'=>'contact','uses'=>'PageController@getContact']);
Route::get('wish-list', ['as'=>'wish-list','uses'=>'PageController@getWishList']);
Route::get('about', ['as'=>'about','uses'=>'PageController@getAbout']);
Route::get('compare', ['as'=>'compare','uses'=>'PageController@getCompare']);
Route::get('checkout', ['as'=>'checkout','uses'=>'PageController@getCheckOut']);