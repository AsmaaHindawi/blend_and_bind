<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

// Home page route
Route::get('/', function () {
    return view('index');
})->name('home');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

//events
Route::get('/events', function () {
    return view('events');
})->name('events');

// Books page route
Route::get('/books', function () {
    return view('books');
})->name('books');
Route::get('/books', [BookController::class, 'index'])->name('books');

// Cart-checkout page route
// View the cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Add an item to the cart (use POST method)
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

// Remove an item from the cart (use DELETE method for better semantics and security)
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');

// Display the checkout page
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Process the checkout form
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');


Route::post('/save-card-details', [CheckoutController::class, 'saveCardDetails'])->name('saveCardDetails');

// Contact page route (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact form submission route (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Games page route
Route::get('/games', [GameController::class, 'index'])->name('games');


// Menu page route
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');

// Zones page route
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations');

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('register', [RegisterController::class, 'register']);

Route::get('/admin', function () {
    return view('Admin Dashboard');
})->name('admin');


Route::get('/api/search', [SearchController::class, 'search'])->name('api.search');

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])->name('about');
