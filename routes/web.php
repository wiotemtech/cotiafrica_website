<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
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
Route::controller(Controller::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{id}/{title}','showBlog')->name('blogs.show');

    Route::get('/why-us', 'whyus')->name('whyus');
    Route::get('/contact-us','contactus')->name('contactus');
    Route::get('/softwares','software')->name('software');
    Route::get('/mobileApp','mobile')->name('mobileApp');
    Route::get('/webDevelopment','web')->name('webDevelopment');
    Route::get('/ai','artificial')->name('ai');
    Route::get('/programming','program')->name('programming');
    Route::get('/ict-training','coperate')->name('ict-training');
    Route::get('/women-in tech','tech')->name('women-in tech');
    Route::get('/frontend','fronts')->name('frontend');
    Route::get('/backend','backends')->name('backend');
    Route::get('/mobileApp-development','mobileApp2')->name('mobileApp-development');





    Route::get('/cloude','cloudes')->name('cloude');


    Route::get('/login', 'showLogin')->name('login.show');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/admin/blogs', 'index')->name('blogs.index');
    Route::post('/admin/blogs/store', 'store')->name('blogs.store');
    Route::put('/admin/blogs/update/{blog}', 'update')->name('blog.update');
    Route::delete('/admin/blogs/delete/{blog}', 'destroy')->name('blog.destroy');
});


