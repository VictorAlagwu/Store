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

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('stores', 'StoreController@index')->name('stores');
Route::post('stores', 'StoreController@store')->name('stores');
Route::get('stores/{id}', 'StoreController@show')->name('stores/');

Route::get('managers', 'ManagerController@index')->name('managers');
Route::post('managers', 'ManagerController@store')->name('managers');
Route::post('manager/store', 'StoreManagerController@store')->name('manager/store');


Route::get('products', 'ProductController@index')->name('products');
Route::post('products', 'ProductController@store')->name('products');
Route::post('product/store', 'StoreProductController@store')->name('product/store');
