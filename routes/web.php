<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController; 
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
Route::get('/', function(){ return redirect()->route('login');});
Route::get('/home', [PostController::class,'index'])->name('home')->middleware('auth','verified');
Route::get('/post/add', [PostController::class,'add'])->name('post.add');
Route::Post('/post/add', [PostController::class,'save'])->name('post.save');
Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('post.edit');
Route::PUT('/post/update/{post}', [PostController::class,'update'])->name('post.update');
Route::DELETE('/post/delete/{post}', [PostController::class,'delete'])->name('post.delete');
//Route::get('/login',[PostController::class,'login'])->name('login');