<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Book; // Include the Book model

class CartController extends Controller
{
    /**
     * Display the cart page.
     */
    public function index()
    {
        $cart = session()->get('cart', []); // Get the cart from session
        $isCartEmpty = empty($cart); // Check if the cart is empty

        return view('cart', compact('cart', 'isCartEmpty'));
    }

    /**
     * Add an item to the cart.
     */
    public function addToCart($id)
    {
        // Check if the item is a book or menu item
        $isBook = request()->has('type') && request()->input('type') === 'book';
        
        $item = $isBook
            ? \App\Models\Book::where('book_id', $id)->first()
            : \App\Models\MenuItem::where('item_id', $id)->first();
    
        if (!$item) {
            return redirect()->back()->with('error', 'Item not found.');
        }
    
        // Get the cart from the session or initialize it
        $cart = session()->get('cart', []);
    
        // Check if the item is already in the cart
        $cartKey = $isBook ? 'book-' . $id : 'menu-' . $id; // Unique key for each item type
    
        if (isset($cart[$cartKey])) {
            $cart[$cartKey]['quantity']++;
        } else {
            // Add the item to the cart
            $cart[$cartKey] = [
                'type' => $isBook ? 'book' : 'menu',
                'name' => $isBook ? $item->title : $item->name,
                'price' => $item->price,
                'quantity' => 1,
                'image' => $item->image,
            ];
        }
    
        // Save the cart to the session
        session()->put('cart', $cart);
    
        return redirect()->route('cart')->with('success', 'Item added to cart!');
    }
    
    
    /**
     * Determine if the item is a book or menu item
     */
    private function isBook($id)
    {
        return Book::where('book_id', $id)->exists();
    }
    

    

    /**
     * Remove an item from the cart.
     */
    public function removeFromCart($id)
{
    // Retrieve the cart from the session
    $cart = session()->get('cart', []);

    // Check if the item exists in the cart
    if (isset($cart[$id])) {
        unset($cart[$id]); // Remove the item from the cart
        session()->put('cart', $cart); // Update the session
        return redirect()->route('cart')->with('success', 'Item removed from cart');
    }

    return redirect()->route('cart')->with('error', 'Item not found in cart');
}


    /**
     * Update item quantity (optional placeholder for consistency).
     */
    public function updateQuantity(Request $request, $id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    // Retrieve the cart from session
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        // Update the quantity
        $cart[$id]['quantity'] = $request->quantity;

        // Update the session
        session()->put('cart', $cart);

        // Calculate totals
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $salesTax = $subtotal * 0.1; // Example 10% sales tax
        $grandTotal = $subtotal + $salesTax;

        return response()->json([
            'success' => true,
            'itemTotal' => $cart[$id]['price'] * $cart[$id]['quantity'],
            'subtotal' => $subtotal,
            'salesTax' => $salesTax,
            'grandTotal' => $grandTotal,
        ]);
    }

    return response()->json(['success' => false, 'message' => 'Item not found'], 404);
}

    

}