<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;

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
    return view('home');
});

Route::get('/about', [ContactController::class, 'about']);
Route::get('/services', [ContactController::class, 'services']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/contact_save', [ContactController::class, 'contact_save']);

Route::get('/admin',[AdminController::class, 'admin']);

Route::post('/admin_dashboard', [AdminController::class, 'admin_dashboard']);

Route::get('/logout',[LogoutController::class, 'destroy'])->name('logout');