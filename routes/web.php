<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TreesController;
use App\Http\Controllers\ReviewsController;
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

Route::get('/', [ReviewsController::class,'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/comments', [CommentsController::class, 'index'])->name('comments');
Route::get('/create', [CommentsController::class, 'create'])->name('create');
Route::post('/create', [CommentsController::class, 'store'])->name('store');
Route::get('/delete/{id}',[CommentsController::class,'destroy'])->name('delete');
Route::get('/edit/{id}', [CommentsController::class,'edit'])->name('edit');
Route::put('/update/{id}', [CommentsController::class,'update'])->name('update');
Route::get('/trees',[TreesController::class,'index'])->name('trees');
Route::get('/show/{id}',[ReviewsController::class,'show'])->name('show');
Route::post('/store/{id}',[ReviewsController::class,'store'])->name('store');
Route::get('/delete/{id}',[ReviewsController::class,'destroy'])->name('delete');

Route::get('/count/{id}',[ReviewsController::class,'count'])->name('count');
Auth::routes();




