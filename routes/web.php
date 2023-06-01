<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;


Route::as('front.')->group(function (){
   Route::get('/',[FrontController::class,'home'])->name('home');
   Route::get('download',[FrontController::class,'download'])->name('download');
});
