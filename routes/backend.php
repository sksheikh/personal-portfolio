<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProjectTitleController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    //Header Routes
    Route::resource('banners',BannerController::class)->only(['index','store']);
    //About Routes
    Route::resource('abouts',AboutController::class)->only(['index','store']);
    //Project Routes
    Route::get('/project-title',[ProjectTitleController::class,'index'])->name('project-title.index');
    Route::post('/project-title',[ProjectTitleController::class,'update'])->name('project-title.update');
    Route::resource('/project-categories',ProjectCategoryController::class);
    Route::resource('/projects',ProjectController::class);


});
