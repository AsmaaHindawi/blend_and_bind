<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Book;

class CartController extends Controller
{
    /**
     * Display the cart page.
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        $isCartEmpty = empty($cart);

        return view('cart', compact('cart', 'isCartEmpty'));
    }

    /**
     * Add an item to the cart.
     */
    public function addToCart(Request $request, $id)
    {
        $type = $request->input('type'); 


        if (!$type || !in_array($type, ['book', 'menu'])) {
            return redirect()->back()->with('error', 'Invalid item type.');
        }


        $item = $type === 'book'
            ? Book::find($id)
            : MenuItem::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'Item not found.');
        }


        $cart = session()->get('cart', []);


        $cartKey = "{$type}-{$id}";


        if (isset($cart[$cartKey])) {
            $cart[$cartKey]['quantity']++;
        } else {

            $cart[$cartKey] = [
                'type' => $type,
                'name' => $type === 'book' ? $item->title : $item->name,
                'price' => $item->price,
                'quantity' => 1,
                'image' => $item->image ?? 'default.jpg',
            ];
        }

        // Save the cart to the session
        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Item added to cart!');
    }

    /**
     * Remove an item from the cart.
     */
    public function removeFromCart($id)
    {

        $cart = session()->get('cart', []);


        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', 'Item removed from cart');
        }

        return redirect()->route('cart')->with('error', 'Item not found in cart');
    }

    /**
     * Update item quantity.
     */
    public function updateQuantity(Request $request, $id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);


    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {

        $cart[$id]['quantity'] = $request->quantity;


        session()->put('cart', $cart);


        $itemTotal = $cart[$id]['price'] * $cart[$id]['quantity'];


        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $salesTax = $subtotal * 0.1;
        $grandTotal = $subtotal + $salesTax;

        return response()->json([
            'success' => true,
            'itemTotal' => $itemTotal,
            'subtotal' => $subtotal,
            'salesTax' => $salesTax,
            'grandTotal' => $grandTotal,
        ]);
    }

    return response()->json(['success' => false, 'message' => 'Item not found in cart'], 404);
}
}
