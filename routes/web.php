<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

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

Auth::routes();
Route::get('/', 'Auth\LoginController@adminLogin')->name('adminLogin');

// ROUTE FOR ADMIN ONLY
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin', 'active', 'check.session'])->group(function () {

    // Dashboard
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    // Data KTP
    Route::resource('ktp', 'KTPController');

    // Data KTP By Kabupaten
    Route::resource('ktp-by-kabupaten', 'KTPByKabupatenController');

    // Data Article
    Route::resource('article', 'ArticleController');

    // Hak Akses
    Route::resource('user', 'UserController');
    Route::get('change-password', 'UserController@changePassword')->name('changePassword');
    Route::post('update-password', 'UserController@updatePassword')->name('updatePassword');

    // Data Kabupaten
    Route::resource('kabupaten', 'KabupatenController');
});
