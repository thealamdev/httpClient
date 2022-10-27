<?php

use App\Http\Controllers\PostController;
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
    return view('home');
});

Route::get('posts',[PostController::class, "index"])->name('post.index');
Route::get('posts/{id}',[PostController::class, "view"])->name('post.view');
Route::get('addpost',[PostController::class, "addpost"])->name('addpost');
Route::get('updatepost/{id}',[PostController::class, "update"])->name('update.post');