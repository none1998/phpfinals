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

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/foods', [\App\Http\Controllers\PostController::class, 'index'])->middleware('auth');
Route::get('/foods/create', [\App\Http\Controllers\PostController::class, 'create'])->name('foods.create')->middleware('auth');
Route::get('/foods/{food}', [\App\Http\Controllers\PostController::class, 'show'])->middleware('auth');
Route::post('/foods/save_food', [\App\Http\Controllers\PostController::class, 'save'])->name('foods.save')->middleware('auth');
Route::get('/foods/{food}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('foods.edit')->middleware('auth');
Route::put('/foods/{food}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('foods.update')->middleware('auth');
Route::delete('/foods/{food}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('foods.delete')->middleware('auth');
Route::get('/users/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/users/post-login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post_login');
Route::post('/users/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/customer', [\App\Http\Controllers\PostController::class, 'customer'])->middleware('auth');
Route::get('/customer/{food}/buy', [\App\Http\Controllers\PostController::class, 'buy'])->name('foods.buy')->middleware('auth');
