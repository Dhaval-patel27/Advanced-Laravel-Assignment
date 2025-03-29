<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('myform');
Route::post('/', [UserController::class, 'create'])->name('mycreate');

Route::get('/login', [UserController::class, 'log'])->name('userlogin');
Route::post('/login', [UserController::class, 'login'])->name('mylogin');

// Route::get('/show', [UserController::class, 'show'])->name('mydata');

Route::get('/user', [UserController::class, 'admin'])->name('myadmin');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');




//post controller
Route::get('/addpost', [PostController::class, 'showpostfrom'])->name('showpostfrom');
Route::post('/addpost', [PostController::class, 'addpost'])->name('myshowpost.insert');
Route::get('/showpost/{id}', [PostController::class, 'showpost'])->name('myshowpost');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('formedit');
Route::put('/edit/{id}', [PostController::class, 'update'])->name('formedit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('postdelete');
Route::get('/normal', [PostController::class, 'normal'])->name('normal');