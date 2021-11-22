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

    // Admin
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    // Hak Akses
    Route::resource('user', 'UserController');
    Route::get('change-password', 'UserController@changePassword')->name('changePassword');
    Route::post('update-password', 'UserController@updatePassword')->name('updatePassword');

    // Kabupaten
    Route::resource('kabupaten', 'KabupatenController');
});
