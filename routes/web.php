<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::middleware(['auth','verified'])->group(function () {
    Route::get('/', function(){ return redirect()->route('login');});
    Route::get('/home', [PostController::class,'index'])->name('home');
    Route::get('/post/add', [PostController::class,'add'])->name('post.add');
    Route::Post('/post/add', [PostController::class,'save'])->name('post.save');
    Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('post.edit');
    Route::PUT('/post/update/{post}', [PostController::class,'update'])->name('post.update');
    Route::DELETE('/post/delete/{post}', [PostController::class,'delete'])->name('post.delete');
    Route::get('/2fa',[PostController::class,'twofactor']);
    Route::get('/profile/{id}',[AdminController::class,'profile'])->name('profile');
    Route::get('/profile/edit/{id}',[AdminController::class,'editProfile'])->name('editProfile');
    Route::post('/profile/update/{user}',[AdminController::class,'saveChange'])->name('saveChange');
    //Route::get('/login',[PostController::class,'login'])->name('login');
});


Route::get('test',[PostController::class,'test'])->name('test');
