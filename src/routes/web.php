<?php

use ContactUs\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/contact-usAdmin', 'ContactUs\Http\Controllers\ContactUsController@admin');
Route::resource('contact-us', ContactUsController::class);
