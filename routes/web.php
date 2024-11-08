<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home page route
Route::get('/', function () {
    return view('index');
})->name('home');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Shop page route
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');

// Events page route
Route::get('/events', function () {
    return view('events');
})->name('events');

// Contact page route (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact form submission route (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact');
