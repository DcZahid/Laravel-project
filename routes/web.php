<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureBlockController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TeamController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::middleware('auth')->group( function () {
    Route::resource('team', TeamController::class)->names('team');
    Route::resource('blog', BlogController::class)->names('blog');
    Route::resource('slider', SliderController::class)->names('slider');
    Route::resource('brand', BrandController::class)->names('brand');
    Route::resource('service', ServiceController::class)->names('service');
    Route::resource('feature', FeatureController::class)->names('feature');
    Route::resource('featureBlock', FeatureBlockController::class)->names('fblock');
    Route::resource('subscribe',SubscribeController::class)->names('subscribe');
    Route::resource('contact',ContactController::class)->names('contact');
   
});



// Route::get('/dashboard',[BackendController::class,'body']);
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/contact', function () {
    return view('page.contact');
});
Route::get('/blogcontent', function () {
    return view('blog.blogcontent');
});
Route::get('/blogdetails',[FrontController::class,'blogdetails'] );

Route::get('/', [FrontController::class, 'team']);
Route::get('/about', [FrontController::class, 'aboutPage']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [FrontController::class, 'login']);

