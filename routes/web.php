<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProjectTitleController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ContactController;


Route::as('front.')->group(function (){
   Route::get('/',[FrontController::class,'home'])->name('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    //Header Routes
    Route::get('/header',[HeaderController::class,'index'])->name('headers.index');
    Route::post('/header',[HeaderController::class,'update'])->name('headers.update');

    //About Routes
    Route::get('/about',[AboutController::class,'index'])->name('about.index');
    Route::post('/about',[AboutController::class,'update'])->name('about.update');

    //Project  Routes
    Route::get('/project-title',[ProjectTitleController::class,'index'])->name('project-title.index');
    Route::post('/project-title',[ProjectTitleController::class,'update'])->name('project-title.update');
    Route::resource('/project-categories',ProjectCategoryController::class);
    Route::resource('/projects',ProjectController::class);

    //Contact Routes
    Route::resource('/contacts',ContactController::class);





});
