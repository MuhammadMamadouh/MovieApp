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

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index']);
Route::get('/movies/{movie}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [App\Http\Controllers\ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [App\Http\Controllers\ActorsController::class, 'index']);
Route::get('/actors/{actor}', [App\Http\Controllers\ActorsController::class, 'show'])->name('actors.show');

Route::get('/tvshows', [App\Http\Controllers\TvController::class, 'index'])->name('tv.index');
Route::get('/tvshows/{tv}', [App\Http\Controllers\TvController::class, 'show'])->name('tv.show');

