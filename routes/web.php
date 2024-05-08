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

Route::get('/', [\App\Http\Controllers\front\HomeController::class, 'index'])->name('front.index');

Route::get('/quero-expor', [\App\Http\Controllers\front\QueroExporController::class, 'index'])->name('front.quero-expor');
Route::get('/quero-expor/#mapa-do-evento', [\App\Http\Controllers\front\QueroExporController::class, 'index'])->name('front.expositores');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
