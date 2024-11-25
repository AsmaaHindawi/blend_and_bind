<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paid; // Import the Paid model
use Illuminate\Support\Facades\Auth;

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
        // Validate the checkout form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'payment_method' => 'required|in:bank_transfer,wish,omt',
        ]);

        // Retrieve the cart
        $cart = session()->get('cart', []);

        // If the cart is empty, redirect back with an error
        if (empty($cart)) {
            return redirect()->route('checkout')->with('error', 'Your cart is empty.');
        }

        // Calculate the total payment
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $discount = 0; // Example discount logic
        $delivery = 0; // Example delivery cost
        $total = $subtotal - $discount + $delivery;

        // Save the order in the Paid table
        $paid = new Paid();
        $paid->user_id = Auth::id();
        $paid->purchased_date = now();
        $paid->total_payment = $total; // Use backend-calculated total
        $paid->payment_method = $validated['payment_method'];
        $paid->address = $validated['street_address'] . ', ' . $validated['city'] . ', ' . $validated['postcode'];
        $paid->save();

        // Clear the cart session
        session()->forget('cart');

        // Redirect to a success page
        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
    public function saveCardDetails(Request $request)
    {
        $request->validate([
            'card_number' => 'required|digits:16', // Adjust for card length
            'expiry_date' => 'required|regex:/^(0[1-9]|1[0-2])\/\d{2}$/', // MM/YY format
            'ccv' => 'required|digits:3', // 3-digit CCV
        ]);
    
        // Simulate saving card details (secure storage requires tokenization or encryption)
        session()->put('card_details', [
            'card_number' => $request->input('card_number'),
            'expiry_date' => $request->input('expiry_date'),
            'ccv' => $request->input('ccv'),
        ]);
    
        return redirect()->route('checkout')->with('success', 'Card details saved successfully!');
    }
    

}