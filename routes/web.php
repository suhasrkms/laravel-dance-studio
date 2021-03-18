<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('validateProfile')->name('home');

Route::resource('/home', App\Http\Controllers\HomeController::class)->parameters([
    'index' => 'home'
]);

Route::resource('/home/profile', ProfileController::class)->middleware('auth');

Route::resource('/user/profile',App\Http\Controllers\UserProfileController::class)->middleware('auth');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('isAdmin','auth');

Route::resource('/admin/users', App\Http\Controllers\AdminUsersController::class)->middleware('auth','isAdmin');

Route::resource('/admin/events', App\Http\Controllers\AdminEventsController::class)->middleware('auth','isAdmin');
//Route::get('/profile', [ProfileController::class, 'edit']);
