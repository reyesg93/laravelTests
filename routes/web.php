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
/* 
Route::get('/', function () {
    return view('inicio');
}); */


Route::get('/', 'InicioController@inicio')->name('/');

Route::get('/add-to-cart/{id}', 'InicioController@addCart')->name('addCart');
Route::get('/show-items-cart', 'InicioController@getShopingCart')->name('showItems');