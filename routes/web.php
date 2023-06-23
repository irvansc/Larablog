<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('front.pages.example');
// });
Route::view('/','front.pages.home')->name('home');

Route::get('/article/{any}',[BlogController::class,'readPost'])->name('read_post');
Route::get('/category/{any}',[BlogController::class,'categoryPost'])->name('category_post');
Route::get('/tag/{any}',[BlogController::class,'tagPost'])->name('tag_post');
Route::get('/search',[BlogController::class,'searchBlog'])->name('search_post');

