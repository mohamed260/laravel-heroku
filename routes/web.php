<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('/create', function () {
    return view('create');
});

// Route::get('/show', function () {
//     return view('show');
// });



Route::get('/', 'HttpController@index');



Route::post('store','PostController@store');

Route::get('show','PostController@show');
