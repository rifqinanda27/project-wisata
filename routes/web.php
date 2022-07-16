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
Route::middleware(['check_off_login'])->group(function() {    
    Route::get('/admin/login', 'App\Http\Controllers\AdminController@login');
    Route::post('/admin/savelogin', 'App\Http\Controllers\AdminController@savelogin');
    Route::get('/admin/register', 'App\Http\Controllers\AdminController@register');
    Route::post('/admin/saveregister', 'App\Http\Controllers\AdminController@saveregister');
});

Route::middleware(['check_on_login'])->group(function() {
    Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');
    Route::resource('/admin/provinsi', 'App\Http\Controllers\ProvinsiController');
    Route::resource('/admin/wisata', 'App\Http\Controllers\WisataController');
    Route::resource('/admin/kota', 'App\Http\Controllers\KotaController');
    Route::resource('/admin/member', 'App\Http\Controllers\MemberController');
    Route::resource('/admin/user', 'App\Http\Controllers\UserController');
});
