<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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
Route::controller(AuthController::class)->group(function(){
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});

// Vue SPA frontend entry points
Route::view('/', 'spa')->name('home');
Route::view('/about', 'spa')->name('about');
Route::view('/blogs', 'spa')->name('blogs');
Route::view('/blogs/{id}/{title}', 'spa')->name('blogs.show');
Route::view('/why-us', 'spa')->name('whyus');
Route::view('/contact-us', 'spa')->name('contactus');
Route::view('/softwares', 'spa')->name('software');
Route::view('/mobileApp', 'spa')->name('mobileApp');
Route::view('/webDevelopment', 'spa')->name('webDevelopment');
Route::view('/ai', 'spa')->name('ai');
Route::view('/programming', 'spa')->name('programming');
Route::view('/ict-training', 'spa')->name('ict-training');
Route::view('/women-in-tech', 'spa')->name('women-in-tech');
Route::view('/cloude', 'spa')->name('cloude');
Route::view('/ehealth', 'spa')->name('ehealth');
Route::view('/digital-security', 'spa')->name('digital-security');
Route::view('/digital-skills', 'spa')->name('digital-skills');
Route::view('/startup-incubator', 'spa')->name('startup-incubator');
Route::view('/green-tech', 'spa')->name('green-tech');

// Legacy backend/auth pages remain server-rendered
Route::view('/login', 'backend.login')->name('login.show');
Route::view('/dashboard', 'backend.dashboard')->name('dashboard');

Route::controller(BlogController::class)->group(function(){
    Route::get('/admin/blogs', 'index')->name('blogs.index');
    Route::post('/admin/blogs/store', 'store')->name('blogs.store');
    Route::put('/admin/blogs/update/{blog}', 'update')->name('blog.update');
    Route::delete('/admin/blogs/delete/{blog}', 'destroy')->name('blog.destroy');
});


