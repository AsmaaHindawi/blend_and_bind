<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PaymentController;

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
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout'); // Display checkout
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process'); // Process checkout
Route::post('/save-card-details', [CheckoutController::class, 'saveCardDetails'])->name('saveCardDetails'); // Save card details

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // Contact form submission

// Games page route
Route::get('/games', [GameController::class, 'index'])->name('games');

// Menu page route
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');

// Zones routes
Route::prefix('zones')->group(function () {
    Route::get('/', [ZoneController::class, 'index'])->name('zones'); // Zones index
    Route::post('/', [ZoneController::class, 'store'])->name('zones.store'); // Store zones
});

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');

// Login page route
Route::get('/login', function () {
    return view('login');
})->name('login');

// Search API route
Route::get('/api/search', [SearchController::class, 'search'])->name('api.search');

// Payment method page route
Route::get('/paymentmethod', [PaymentController::class, 'showPaymentPage'])->name('paymentmethod'); // View the payment method page
Route::post('/paymentmethod/confirm', [PaymentController::class, 'confirmPayment'])->name('paymentmethod.confirm'); // Confirm payment
