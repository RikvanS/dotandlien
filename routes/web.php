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

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'Imagecontroller@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/imagelibrary', 'Imagecontroller@index');
Route::get('/test', 'Imagecontroller@test');
Route::get('/upload', 'Imagecontroller@upload');
Route::post('/uploadfile', 'Imagecontroller@store');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');