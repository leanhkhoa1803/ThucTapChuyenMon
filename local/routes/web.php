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

Route::get('/','FrontendController@getHome');

Route::get('detailProduct/{id}/{slug}.html','FrontendController@getDetailProduct');
Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::post('detailProduct/{id}/{slug}.html','FrontendController@postComment');

Route::get('search','FrontendController@getSearch');
Route::get('searchPrice','FrontendController@getSearchPrice');
Route::get('searchSortPrice','FrontendController@getChangePrice');

Route::get('about','FrontendController@getAbout');
Route::get('contact','FrontendController@getContact');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login','middleware'=>'CheckLogin'], function () {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
        
    });
    Route::get('logout','HomeController@getLogout');
  
    Route::group(['prefix' => 'admin','middleware'=>'CheckLogout'], function () {
        Route::get('home','HomeController@getHome');
        

        Route::group(['prefix' => 'category'], function () {
            Route::get('/','CategoryController@getCategory');

            Route::post('/','CategoryController@postCategory');
            
            Route::get('editCategory/{id}','CategoryController@getEditCategory');
            Route::post('editCategory/{id}','CategoryController@postEditCategory');

            Route::get('deleteCategory/{id}','CategoryController@getDeleteCategory');
        });

        Route::group(['prefix' => 'product'], function () {
            Route::get('/','ProductController@getProduct');

            Route::get('addProduct','ProductController@getAddProduct');
            Route::post('addProduct','ProductController@postAddProduct');

            Route::get('editProduct/{id}','ProductController@getEditProduct');
            Route::post('editProduct/{id}','ProductController@postEditProduct');

            Route::get('deleteProduct/{id}','ProductController@getDeleteProduct');
        });

    });
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}','CartController@getAddCart');
    Route::get('show','CartController@getShowCart');
    Route::get('delete/{id}','CartController@getDeleteCart');
    Route::get('update','CartController@getUpdateCart');

    Route::get('checkout','CartController@getCheckout');
    Route::post('checkout','CartController@postCheckout');
    
    Route::get('addwishlist/{id}','CartController@getAddWishlist');
    Route::get('showWishlist','CartController@showWishlist');
    Route::get('deleteWishlist/{id}','CartController@getDeleteWishlist');
});
Route::get('success','CartController@getSuccess');