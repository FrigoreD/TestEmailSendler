<?php

use App\Http\Controllers\UserViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('form');

Route::get('email-auth/{token}', [UserController::class, 'authenticateEmail'])->name('auth.email');

Route::get('/users', [UserViewController::class, 'showUsers'])->name('users');
Route::get('/form', [UserController::class, 'createUserForm']);
Route::post('/form', [UserController::class, 'UserForm'])->name('validate.form');
Route::post('/email', [UserController::class, 'check_email'])->name('validate.email');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
