<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;

// Home page route
Route::get('/', function () {
    return view('index');
})->name('home');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Books page route
Route::get('/books', function () {
    return view('books');
})->name('books');

// Cart page route
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Contact page route (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact form submission route (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Events page route
Route::get('/events', function () {
    return view('events');
})->name('events');

// Games page route
Route::get('/games', function () {
    return view('games');
})->name('games');

// Menu page route
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// Zones page route
Route::get('/zones', function () {
    return view('zones');
})->name('zones');

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/api/search', [SearchController::class, 'search'])->name('api.search');