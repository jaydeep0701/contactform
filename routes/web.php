<?php

use Illuminate\Support\Facades\Route;
use Laraphantt\Contactform\Http\Controllers\ContactFormController;

Route::middleware(['guest','web'])->group(function(){
	Route::get('/contact', [ContactFormController::class,'create']);
	Route::post('/create/contact', [ContactFormController::class,'createPost'])->name('create.post');
});