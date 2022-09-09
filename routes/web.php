<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
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
//     return view('home');
// });

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login',[LoginController::class, 'login'])->name('login');
// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::post('/login',[LoginController::class, 'login'])->name('login');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route::get('profile', [AdminController::class, 'index'])->name('admin.profile');
    // Route::get('settings', [AdminController::class, 'index'])->name('admin.settings');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('settings', [UserController::class, 'index'])->name('user.settings');

});