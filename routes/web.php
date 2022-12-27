<?php

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

Route::get('/about', function () {
    return view('about', [
        'name' => 'Rayhan Gallery',
        'email' => 'gallery@Gmail.com',
        'image' => 'https://source.unsplash.com/500x500'
    ]);
});

Route::get('/post', function () {
    return view('posts');
});