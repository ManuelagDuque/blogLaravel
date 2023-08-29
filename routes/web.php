<?php

use Illuminate\Support\Facades\Route;
use Mockery\Undefined;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('homeView');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'indexBlog')->name('blog');
    Route::get('/blog/{slug}', 'showPost')->name('post');
});
