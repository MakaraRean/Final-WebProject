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
    
    Route::get('/post/add', [PostController::class,'add'])->name('post.add');
    Route::Post('/post/add', [PostController::class,'save'])->name('post.save');
    Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('post.edit');
    Route::PUT('/post/update/{post}', [PostController::class,'update'])->name('post.update');
    Route::DELETE('/post/delete/{post}', [PostController::class,'delete'])->name('post.delete');
    Route::get('/2fa',[PostController::class,'twofactor']);
    Route::get('/profile/{id}',[AdminController::class,'profile'])->name('profile');
    Route::get('/profile/edit/{id}',[AdminController::class,'editProfile'])->name('editProfile');
    Route::post('/profile/update/{user}',[AdminController::class,'saveChange'])->name('saveChange');
    Route::post('/profile/changepf/{user}',[AdminController::class,'changePf'])->name('changePf');
    Route::get('/user',[AdminController::class,'user'])->name('user');
    Route::post('/upload-comment',[PostController::class,'comment'])->name('comment');
    Route::post('/reply-comment',[PostController::class,'reply'])->name('reply');
    Route::post('/follow',[AdminController::class,'follow'])->name('follow');
    Route::get('/follower/{id}',[AdminController::class,'follower'])->name('follower');
    Route::get('/following/{id}',[AdminController::class,'following'])->name('following');
    //Route::get('/login',[PostController::class,'login'])->name('login');
});
Route::get('/home', [PostController::class,'index'])->name('home');
Route::get('/post/{id}',[PostController::class,'readPost'])->name('readPost');


Route::get('test',[PostController::class,'test'])->name('test');
