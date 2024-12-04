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
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\FavoriteController;

// Home page route
Route::get('/', function () {
    return view('index');
})->name('home');

// About page route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Books page route
Route::get('/books', [BookController::class, 'index'])->name('books');

// Cart-checkout routes
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart'); // View the cart
    Route::post('/add/{id}', [CartController::class, 'addToCart'])->name('cart.add'); // Add to cart
    Route::delete('/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove'); // Remove from cart
    Route::post('/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update'); // Update cart
});

// Checkout routes
Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth')->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'process'])->middleware('auth')->name('checkout.process');
Route::post('/save-card-details', [CheckoutController::class, 'saveCardDetails'])->middleware('auth')->name('saveCardDetails');

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // Contact form submission

// Games page route
Route::get('/games', [GameController::class, 'index'])->name('games');

// Menu page route
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');

// Reservations routes
Route::prefix('reservations')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('reservations'); // View reservations
    Route::post('/', [ReservationController::class, 'store'])->name('reservations.store'); // Create a reservation
});

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');

// Login page route
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Register User
Route::post('/register', [RegisterController::class, 'register']);

// Admin dashboard route
Route::get('/admin', function () {
    return view('Admin Dashboard');
})->name('admin');

// Search API route
Route::get('/api/search', [SearchController::class, 'search'])->name('api.search');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Favorite routes
Route::middleware('auth')->group(function () {

    Route::post('/books/{id}/favorite', [BookController::class, 'toggleFavorite'])->name('books.favorite');
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');
});


// Edit Routes
Route::prefix('admin')->group(function () {
    Route::get('/users/edit', [AdminController::class, 'editUsers'])->name('admin.users.edit');
    Route::get('/admins/edit', [AdminController::class, 'editAdmins'])->name('admin.admins.edit');
    Route::get('/books/edit', [AdminController::class, 'editBooks'])->name('admin.books.edit');
    Route::get('/menus/edit', [AdminController::class, 'editMenus'])->name('admin.menus.edit');

    Route::post('/users/update', [AdminController::class, 'updateUsers'])->name('admin.users.update');
    Route::post('/admins/update', [AdminController::class, 'updateAdmins'])->name('admin.admins.update');
    Route::post('/books/update', [AdminController::class, 'updateBooks'])->name('admin.books.update');
    Route::post('/menus/update', [AdminController::class, 'updateMenus'])->name('admin.menus.update');
});
