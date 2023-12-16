<?php

use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\MyPost;
use App\Livewire\PostController;
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


// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', Login::class)->name('login');
Route::get('/post', PostController::class)->name('post');
Route::get('/mypost', MyPost::class)->name('mypost');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout');
