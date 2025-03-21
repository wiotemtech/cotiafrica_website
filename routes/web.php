<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
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

    Route::get('/events','events')->name('events');
    Route::get('/events/{id}/{title}', 'showBlog1')->name('events.show');

    Route::get('/why-us', 'whyus')->name('whyus');
    Route::get('/contact-us','contactus')->name('contactus');
    Route::post('/contact-us',[ContactController::class,'sendEnquiry'])->name('contact-us.sendEnquiry');
    
    Route::get('/softwares','software')->name('software');
    Route::get('/mobileApp','mobile')->name('mobileApp');
    Route::get('/webDevelopment','web')->name('webDevelopment');
    Route::get('/data','dataAnalysis')->name('data');
    Route::get('/programming','program')->name('programming');
    Route::get('/ict-training','coperate')->name('ict-training');
    Route::get('/women-in tech','tech')->name('women-in tech');
    Route::get('/frontend','fronts')->name('frontend');
    Route::get('/backend','backends')->name('backend');
    Route::get('/mobileApp-development','mobileApp2')->name('mobileApp-development');
    Route::get('/software-intern','software2')->name('software-intern');
    Route::get('/data-analysis','dataA')->name('data-analysis');
    Route::get('/cyber-security','cyberS')->name('cyber-security');



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



Route::controller(EventController::class)->group(function(){
    Route::get('/admin/events', 'index2')->name('events.index2');
    Route::get('admin/messages-2025',[MessageController::class,'index3'])->name('messages.index3');
    Route::post('/admin/events/store', 'store')->name('events.store');
    Route::put('/admin/events/update/{event}', 'update')->name('event.update');
    Route::delete('/admin/events/delete/{event}', 'destroy')->name('event.destroy');
});

