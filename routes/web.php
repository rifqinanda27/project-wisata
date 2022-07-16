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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');
Route::resource('/admin/provinsi', 'App\Http\Controllers\ProvinsiController');
Route::resource('/admin/wisata', 'App\Http\Controllers\WisataController');
Route::resource('/admin/kota', 'App\Http\Controllers\KotaController');