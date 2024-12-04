<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paid; // Import the Paid model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    /**
     * Display the checkout page.
     */
    public function index()
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Calculate the subtotal
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        $discount = 0; // Example discount logic
        $delivery = 0; // Example delivery cost
        $total = $subtotal - $discount + $delivery;

        return view('checkout', compact('cart', 'subtotal', 'discount', 'delivery', 'total'));
    }

    /**
     * Process the checkout form.
     */
    public function process(Request $request)
    {
        \Log::info('Checkout process method started.');

        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to place an order.');
        }

        // Validate the request inputs
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'payment_method' => 'required|in:bank_transfer,wish,omt,cash',
        ]);

        \Log::info('Validation completed without issues.');

        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('checkout')->with('error', 'Your cart is empty.');
        }

        // Calculate totals
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $discount = 0;
        $delivery = 0;
        $total = $subtotal - $discount + $delivery;

        // Save the order in the Paid table
        $paid = new Paid();
        $paid->user_id = Auth::id(); // Get the authenticated user's ID
        $paid->purchased_date = now();
        $paid->total_payment = $total;
        $paid->payment_method = $validated['payment_method'];
        $paid->address = $validated['street_address'] . ', ' . $validated['city'] . ', ' . $validated['postcode'];
        $paid->phone_number = $validated['phone'];
        $paid->save();

        // Clear the cart session
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }

    /**
     * Save card details method.
     */
    public function saveCardDetails(Request $request)
    {
        \Log::info('Reached saveCardDetails method in CheckoutController.');

        // Validate card details with corrected regex and length requirements
        $request->validate([
            'card_number' => 'required|digits:16', // Ensure card number is exactly 16 digits
            'expiry_date' => ['required', 'regex:/^(0[1-9]|1[0-2])\/(\d{4})$/'], // Validate MM/YYYY format
            'ccv' => 'required|digits:3', // Ensure CCV is exactly 3 digits
        ]);

        \Log::info('Validation passed for card details.');

        // Save card details temporarily in session for testing purposes
        // For production, use a secure method such as encryption or tokenization
        session()->put('card_details', [
            'card_number' => $request->input('card_number'),
            'expiry_date' => $request->input('expiry_date'),
            'ccv' => $request->input('ccv'),
        ]);

        \Log::info('Card details saved successfully in session.');

        return redirect()->route('checkout')->with('success', 'Card details saved successfully!');
    }
}
