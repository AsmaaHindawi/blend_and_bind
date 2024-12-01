@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/ouvrir-un-coffee-shop-etapes.jpg') }}" alt="Zone Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Your Cart</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Cart</span>
            </p>
        </div>
    </div>
</div>

<style>
    /* Header Section */
.header-banner {
        position: relative;
        overflow: hidden;
    }

    .header-banner img {
        height: 300px;
        object-fit: cover;
    }

    .header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .header-title {
        font-family: 'Dancing Script', cursive;
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
        color: white;
    }

    .modal-body {
    padding: 15px;
}

.form-label {
    margin-bottom: 5px;
}

#reservationModal input,
    #reservationModal select {
        color: black  !important;/* Ensures input text is black */
    }

/* Style for the Breadcrumbs */
.breadcrumbs {
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    color: #bfbfbf; /* Default breadcrumb text color */
}

.breadcrumbs span {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    color: #bfbfbf; /* Span text color */
}

.breadcrumbs span a {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    color: #ffffff; /* Link color specifically for "Home" */
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumbs span a:hover {
    color: #edca1b; /* Darker color when hovered */
}
</style>


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
            <a href="{{ url('/menu') }}" class="btn btn-custom" id="btn-browse-menu">Browse Menu</a>
            <a href="{{ url('/books') }}" class="btn btn-custom" id="btn-browse-books">Browse Books</a>
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
    <td class="text-black item-total">
        ${{ number_format($item['price'] * $item['quantity'], 2) }}
    </td>
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

        <div class="d-flex justify-content-between pt-3 ">
            <a href="{{ url('/menu') }}" class="btn btn-custom" id="btn-browse-menu">Browse Menu</a>
            <a href="{{ url('/books') }}" class="btn btn-custom" id="btn-browse-books">Browse Books</a>
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
/* Special selector for "Browse Menu" button */
#btn-browse-menu {
    background-color: hsla(213, 59%, 29%, 0.858); /* Green background */
    color: white; /* White text */
    border-radius: 1px; /* Rounded corners */
    padding: 12px 20px; /* Padding */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
    transition: background-color 0.3s, transform 0.3s;
}

#btn-browse-menu:hover {
    background-color: hsla(213, 53%, 36%, 0.858); /* Darker green on hover */
    transform: scale(1.05); /* Slight zoom effect */
}

/* Special selector for "Browse Books" button */
#btn-browse-books {
    background-color: hsl(244, 34%, 42%); /* Orange background */
    color: white; /* White text */
    border-radius: 1px; /* Rounded corners */
    padding: 12px 20px; /* Padding */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
    transition: background-color 0.3s, transform 0.3s;
}

#btn-browse-books:hover {
    background-color: hsl(244, 34%, 42%); /* Darker orange on hover */
    transform: scale(1.05); /* Slight zoom effect */
}

</style>
@endpush

@push('scripts')
<script>
    function updateCart(id, quantity) {
        console.log(`Updating cart for ID: ${id}, Quantity: ${quantity}`);

        $.ajax({
            url: `/cart/update/${id}`, // Ensure the URL is correct
            method: 'POST',
            data: {
                quantity: quantity,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    const row = $(`tr[data-id="${id}"]`);

                    // Update the item total
                    row.find('.item-total').text(`$${response.itemTotal.toFixed(2)}`);

                    // Update the subtotal, sales tax, and grand total
                    $('.subtotal').text(`$${response.subtotal.toFixed(2)}`);
                    $('.sales-tax').text(`$${response.salesTax.toFixed(2)}`);
                    $('.grand-total').text(`$${response.grandTotal.toFixed(2)}`);
                } else {
                    console.error('Failed to update cart:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error updating cart:', error);
            }
        });
    }

    $(document).ready(function () {
        // Attach click event listeners for increment and decrement buttons
        $(document).on('click', '.increment-btn, .decrement-btn', function () {
            const row = $(this).closest('tr');
            const id = row.data('id');
            const input = row.find('.quantity-input');
            const currentQuantity = parseInt(input.val());

            if ($(this).hasClass('increment-btn')) {
                console.log('Increment button clicked');
                input.val(currentQuantity + 1);
                updateCart(id, currentQuantity + 1);
            } else if ($(this).hasClass('decrement-btn') && currentQuantity > 1) {
                console.log('Decrement button clicked');
                input.val(currentQuantity - 1);
                updateCart(id, currentQuantity - 1);
            }
        });
    });
</script>
@endpush

