<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[ArticleController::class,"GetSongDetails"])->name('articles.index');
Route::get('/count/articles',[ArticleController::class,"CountByCategory"])->name('articles.count');
Route::get('/count/authors',[ArticleController::class,"CountByAuthor"])->name('authors.count');
Route::get('/category/{name}',[ArticleController::class,'sp_DSBaiViet']);