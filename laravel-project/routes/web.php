<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [PagesController::class, 'Home'])->name('Home');
Route::get('/about', [PagesController::class, 'About'])->name('About');
Route::post('/about', [PagesController::class, 'About'])->name('About');

Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('Login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
