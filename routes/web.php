<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/search', function () {
    return view('search', [
        'title' => 'search'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Rayhan Gallery',
        'email' => 'gallery@Gmail.com',
        'image' => 'https://source.unsplash.com/500x500'
    ]);
});

Route::get('/dashboard', fn () => view('dashboard.index', [
    'title' => 'Dashboard'
]))->middleware(['auth'])->name('dashboard');



Route::get('/', [PostController::class, 'index']);
// Route::get('/posts', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', [PostController::class, 'category']);
Route::get('/authors/{author:username}', [PostController::class, 'author']);
Route::get('/search', [PostController::class, 'search']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/posts/generateSlug', [DashboardPostController::class, 'generateSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
