<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{PostController, UserListController};

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

Route::get('/', function () {
    return view('app');
})
->name('application');

Route::get('/api/get-all-posts', [PostController::class, 'getAllPosts'])->name('get.allposts');
Route::get('/api/get-user-lists', [UserListController::class, 'getUserLists'])->name('get.userlists');
Route::get('/api/search', [PostController::class, 'searchPosts'])->name('get.searchposts');
