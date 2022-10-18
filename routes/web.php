<?php

use App\Http\Controllers\AspalController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PavingController;
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

Route::get('/', [MainController::class, 'index'])->name('login')->middleware('guest');
Route::get('/aspal', [AspalController::class, 'index'])->middleware('guest');
Route::get('/paving', [PavingController::class, 'index'])->middleware('guest');
Route::post('/aspal', [AspalController::class, 'index']);
Route::post('/addComment', [MainController::class, 'addComment']);

Route::get('/comment', [MainController::class, 'comment'])->middleware('auth');
Route::delete('/destroyComment/{comment}', [MainController::class, 'deleteComment'])->middleware('auth');
Route::resource('/gallery', GalleryController::class)->middleware('auth');
Route::resource('/blog', BlogController::class)->middleware('auth');

Route::get('/blogs', [MainController::class, 'blogs'])->middleware('guest');
Route::get('/blogs/{blog:slug}', [MainController::class, 'blog']);

Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
