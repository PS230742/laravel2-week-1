<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
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

// Route::get('/songs', function() {return 'hallo';});

Route::resource('songs',SongController::class);
Route::resource('albums',AlbumController::class);
Route::resource('bands',BandController::class);



/* 
Route::get('/songs', [SongController::class, 'index'])->Name('songs');

Route::get('/songs/create', [SongController::class,'create'])->Name('create');
Route::post('/songs',[SongController::class,'store'])->name('store');
Route::get('/songs/{index}/delete', [SongController::class,'delete'])->Name('delete');

Route::get('/songs/{index}', [SongController::class, 'show'])->Name('show');

Route::get('/songs/{index}/edit', [SongController::class, 'edit'])->Name('edit');
*/
