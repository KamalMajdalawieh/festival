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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('event/music', [App\Http\Controllers\EventController::class, 'music'])->name('music');
Route::get('event/stage', [App\Http\Controllers\EventController::class, 'stage'])->name('stage');
Route::get('event/cinema', [App\Http\Controllers\EventController::class, 'cinema'])->name('cinema');
Route::get('event/shows', [App\Http\Controllers\EventController::class, 'shows'])->name('show');
Route::get('event/lecture', [App\Http\Controllers\EventController::class, 'lecture'])->name('lecture');
Route::get('event/workshop', [App\Http\Controllers\EventController::class, 'workshop'])->name('workshop');
Route::get('event/article', [App\Http\Controllers\EventController::class, 'article'])->name('article');
