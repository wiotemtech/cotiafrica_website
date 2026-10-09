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
Route::view('/it-support', 'spa')->name('it-support');
Route::view('/our-work', 'spa')->name('our-work');
Route::view('/events', 'spa')->name('events');

// Legacy backend/auth pages remain server-rendered
Route::view('/login', 'backend.login')->name('login.show');
Route::view('/dashboard', 'backend.dashboard')->middleware('auth')->name('dashboard');

Route::middleware('auth')->prefix('admin/works')->name('works.')->controller(\App\Http\Controllers\WorkController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::put('/{work}', 'update')->name('update');
    Route::delete('/{work}', 'destroy')->name('destroy');
});

Route::middleware('auth')->prefix('admin/events')->name('events.')->controller(\App\Http\Controllers\EventController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::put('/{event}', 'update')->name('update');
    Route::delete('/{event}', 'destroy')->name('destroy');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/admin/blogs', 'index')->name('blogs.index');
    Route::post('/admin/blogs/store', 'store')->name('blogs.store');
    Route::put('/admin/blogs/update/{blog}', 'update')->name('blog.update');
    Route::delete('/admin/blogs/delete/{blog}', 'destroy')->name('blog.destroy');
});


