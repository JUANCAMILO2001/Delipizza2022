<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;


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
})->name('index');

Route::get('/proximamente', function () {
    return view('proximamente');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/register', [RegisterController::class, 'create'])->name('register.index')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index')->middleware('guest');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');


/*
|
|
|
-------------------------------- Rutas Menu login --------------------
|
|
|
*/

Route::get('/menu', [CartController::class, 'menu'])->name('menu');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index')->middleware('auth');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


/*
|
|
|
-------------------------------- Rutas roles admin --------------------
|
|
|
*/

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

