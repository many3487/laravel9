<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::controller(PageController::class)->group(function (){
    Route::get('/', 'home')->name('home');
    
    Route::get('blog','blog')->name('blog');
    
    Route::get('blog/{post:slug}','post')->name('post');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
