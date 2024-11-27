@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<div class="container my-5 pt-5">
    <h1 class="mb-4 cart-title text-center" style="font-family: 'Dancing Script', cursive;">
        Your Cart ({{ count($cart) }} items)
    </h1>

    <!-- Display success and error messages -->
    @if(session('success'))
        <div class="alert alert-success text-white" style="background-color: #4476ac;">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger text-white" style="background-color: #4476ac;">
            {{ session('error') }}
        </div>
    @endif

    <!-- Check if the cart is empty -->
    @if($isCartEmpty)
        <div class="alert alert-info" style="color: #4476ac;">
            Your cart is currently empty.
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ url('/menu') }}" class="btn btn-custom">Browse Menu</a>
            <a href="{{ url('/books') }}" class="btn btn-custom">Browse Books</a>
        </div>
    @else
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $key => $item)
<tr data-id="{{ $key }}">
    <td>
        <div class="d-flex align-items-center">
            @php
                $isBook = $item['type'] === 'book';
                $imagePath = $isBook 
                    ? asset('book_images/' . $item['image'])
                    : asset('images/' . $item['image']);
            @endphp
            <img src="{{ $imagePath }}" alt="{{ $item['name'] }}" class="cart-item-img">
            <div class="ms-3">
                <h5 class="item-name">{{ $item['name'] }}</h5>
            </div>
        </div>
    </td>
    <td class="text-black">${{ number_format($item['price'], 2) }}</td>
    <td class="text-center">
        <div class="input-group quantity-buttons">
            <button type="button" class="btn btn-outline-warning btn-sm btn-quantity decrement-btn" data-id="{{ $key }}">-</button>
            <input type="number" value="{{ $item['quantity'] }}" min="1" class="form-control text-center quantity-input text-black" readonly>
            <button type="button" class="btn btn-outline-warning btn-sm btn-quantity increment-btn" data-id="{{ $key }}">+</button>
        </div>
    </td>
    <td class="text-black">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
    <td class="text-center">
        <form action="{{ route('cart.remove', $key) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-circle-delete">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach

                </tbody>
            </table>
        </div>

        <!-- Summary Section -->
        <div class="cart-summary mt-5">
            <div class="d-flex justify-content-between">
                <span class="cart-label">Subtotal:</span>
                <span class="text-black subtotal">
                    ${{ number_format(array_sum(array_map(function ($item) { return $item['price'] * $item['quantity']; }, $cart)), 2) }}
                </span>
            </div>
            <div class="d-flex justify-content-between">
                <span class="cart-label">Sales Tax (10%):</span>
                <span class="text-black sales-tax">
                    ${{ number_format(array_sum(array_map(function ($item) { return $item['price'] * $item['quantity']; }, $cart)) * 0.1, 2) }}
                </span>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <span class="cart-label">Grand Total:</span>
                <span class="text-black grand-total">
                    ${{ number_format(array_sum(array_map(function ($item) { return $item['price'] * $item['quantity']; }, $cart)) * 1.1, 2) }}
                </span>
            </div>
            <div class="text-end mt-3">
                <a href="{{ url('/checkout') }}" class="btn btn-checkout">Check Out</a>
            </div>
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    .cart-item-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
    }

    .item-name {
        font-size: 18px;
        font-weight: bold;
    }

    .quantity-buttons {
        display: inline-flex;
        align-items: center;
    }

    .quantity-buttons .btn-quantity {
        width: 30px;
        height: 30px;
        padding: 0;
        border-color: #ffcc00;
        color: #ffcc00;
    }

    .quantity-input {
        width: 50px;
        height: 30px;
        font-weight: bold;
        text-align: center;
    }

    .btn-circle-delete {
        background-color: #ffcc00;
        border: none;
        border-radius: 50%;
        color: black;
        padding: 10px;
        font-size: 16px;
    }

    .btn-checkout {
        background-color: #ffcc00;
        color: black;
        font-size: 16px;
        padding: 10px 20px;
    }

    .cart-label {
        font-size: 14px;
        font-weight: bold;
    }

    .text-black {
        color: #000 !important;
    }
</style>
@endpush

@push('scripts')
<script>
   function updateCart(id, quantity) {
    console.log('updateCart called for ID:', id, 'Quantity:', quantity);

    const row = document.querySelector(`tr[data-id="${id}"]`);
    if (!row) {
        console.error('No row found for ID:', id);
        return; // Stop further execution if the row is not found
    }

    // Fetch request
    fetch(`/cart/update/${id}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);
        if (data.success) {
            // Update item total and cart summary
            row.querySelector('.item-total').textContent = `$${data.itemTotal.toFixed(2)}`;
            document.querySelector('.subtotal').textContent = `$${data.subtotal.toFixed(2)}`;
            document.querySelector('.sales-tax').textContent = `$${data.salesTax.toFixed(2)}`;
            document.querySelector('.grand-total').textContent = `$${data.grandTotal.toFixed(2)}`;
        } else {
            console.error('Failed to update cart:', data.error || 'Unknown error');
        }
    })
    .catch(error => console.error('Error updating cart:', error));
}

document.addEventListener('DOMContentLoaded', () => {
    // Unified event listener for increment and decrement buttons
    document.addEventListener('click', function (e) {
        const button = e.target;
        if (button.classList.contains('increment-btn') || button.classList.contains('decrement-btn')) {
            const row = button.closest('tr');
            const id = row.getAttribute('data-id');
            const input = row.querySelector('.quantity-input');
            const currentQuantity = parseInt(input.value);

            if (button.classList.contains('increment-btn')) {
                input.value = currentQuantity + 1;
                updateCart(id, currentQuantity + 1);
            } else if (button.classList.contains('decrement-btn') && currentQuantity > 1) {
                input.value = currentQuantity - 1;
                updateCart(id, currentQuantity - 1);
            }
        }
    });
});


</script>

@endpush