@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4" style="font-family: 'Dancing Script', cursive;">Checkout</h1>

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Billing Details -->
            <div class="col-md-8">
                <h3>Billing Details</h3>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter your first name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="street_address">Street Address</label>
                    <input type="text" id="street_address" name="street_address" class="form-control" placeholder="Enter your street address" required>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="city">Town / City</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter your city" required>
                    </div>
                    <div class="col-md-6">
                        <label for="postcode">Postcode / ZIP</label>
                        <input type="text" id="postcode" name="postcode" class="form-control" placeholder="Enter your postcode" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                </div>
            </div>

            <!-- Cart Total -->
            <div class="col-md-4">
                <h3>Cart Total</h3>
                <div class="card" style="border: 2px solid black; padding: 20px;">
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between" style="color: black; font-weight: bold;">
                            <span>Subtotal:</span>
                            <span>${{ number_format($subtotal, 2) }}</span>
                        </li>
                        <li class="d-flex justify-content-between" style="color: black; font-weight: bold;">
                            <span>Delivery:</span>
                            <span>${{ number_format($delivery, 2) }}</span>
                        </li>
                        <li class="d-flex justify-content-between" style="color: black; font-weight: bold;">
                            <span>Discount:</span>
                            <span>-${{ number_format($discount, 2) }}</span>
                        </li>
                        <li class="d-flex justify-content-between" style="color: black; font-weight: bold;">
                            <span>Total:</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </li>
                    </ul>
                </div>

                <!-- Payment Methods -->
                <h3 class="mt-4">Payment Method</h3>
                <div class="form-check">
                    <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" class="form-check-input payment-method" required>
                    <label for="bank_transfer" class="form-check-label">Direct Bank Transfer</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="wish" name="payment_method" value="wish" class="form-check-input payment-method">
                    <label for="wish" class="form-check-label">Wish</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="omt" name="payment_method" value="omt" class="form-check-input payment-method">
                    <label for="omt" class="form-check-label">OMT</label>
                </div>

                <!-- Terms and Conditions -->
                <div class="form-check mt-3">
                    <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
                    <label for="terms" class="form-check-label">I have read and accept the terms and conditions</label>
                </div>

                <button type="submit" class="btn btn-warning btn-lg w-100 mt-3">Place an Order</button>
            </div>
        </div>
    </form>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Enter Card Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('saveCardDetails') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="1234 5678 9012 3456" inputmode="numeric" maxlength="19" required>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="expiry_date">Expiry Date</label>
                            <input type="text" id="expiry_date" name="expiry_date" class="form-control" placeholder="MM/YY" required>
                        </div>
                        <div class="col">
                            <label for="ccv">CCV</label>
                            <input type="text" id="ccv" name="ccv" class="form-control" placeholder="123" maxlength="4" inputmode="numeric" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Save Details</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* General form input styles */
    .form-control {
        background-color: white !important;
        color: black !important;
        border: 1px solid black !important;
        padding: 10px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #ffcc00 !important;
        box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
    }

    /* Placeholder styling */
    ::placeholder {
        color: #aaa;
    }

    .card {
        border-color: black !important;
    }
</style>
@endpush

@push('scripts')
<script>
    // Show payment modal when a payment method is selected
    document.querySelectorAll('.payment-method').forEach(method => {
        method.addEventListener('change', function () {
            $('#paymentModal').modal('show');
        });
    });
</script>
@endpush