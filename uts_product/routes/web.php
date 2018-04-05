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
    return view('layouts.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*========================================================== Creator ===================================================================*/
Route::get('/creator', 'CreatorController@index')->name('creator.index');

Route::get('/creator/create', 'CreatorController@create')->name('creator.create');
Route::post('/creator/create','CreatorController@store');

Route::get('/creator/{creator}/edit', 'CreatorController@edit')->name('creator.edit');

Route::patch('/creator/{creator}/edit', 'CreatorController@update')->name('creator.update');
Route::delete('/creator/{creator}/delete', 'CreatorController@destroy')->name('creator.destroy');

/*========================================================== Categori ===================================================================*/
Route::get('/categori', 'CategoriController@index')->name('categori.index');

Route::get('/categori/create', 'CategoriController@create')->name('categori.create');
Route::post('/categori/create','CategoriController@store');

Route::get('/categori/{categori}/edit', 'CategoriController@edit')->name('categori.edit');

Route::patch('/categori/{categori}/edit', 'CategoriController@update')->name('categori.update');
Route::delete('/categori/{categori}/delete', 'CategoriController@destroy')->name('categori.destroy');

/*========================================================== Product ===================================================================*/
Route::get('/product', 'ProductController@index')->name('product.index');

Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store');

Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');

Route::patch('/product/{product}/edit', 'ProductController@update')->name('product.update');
Route::delete('/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');