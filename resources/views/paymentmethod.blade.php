@extends('layouts.app')

@section('title', 'Payment Methods - Blend & Bind')

@section('content')
<div class="container payment-methods mt-5">
    <h2>Choose Your Payment Method</h2>
    <form id="paymentForm" action="{{ route('payment.confirm') }}" method="POST">
        @csrf <!-- CSRF Protection -->

        <!-- Credit/Debit Card Option -->
        <div class="payment-method">
            <input type="radio" name="payment_method" id="visa" value="visa" required>
            <label for="visa">
                <img src="{{ asset('images/visa-logo.png') }}" alt="Visa" width="60">
                <img src="{{ asset('images/mastercard-logo.png') }}" alt="MasterCard" width="60">
                Credit/Debit Card
            </label>
            <div class="form-row mt-3">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="card_number" placeholder="Card Number" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="card_holder_name" placeholder="Cardholder's Name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="expiry_date" placeholder="MM/YY" required>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="cvv" placeholder="CVV" required>
                </div>
            </div>
        </div>

        <!-- PayPal Option -->
        <div class="payment-method">
            <input type="radio" name="payment_method" id="paypal" value="paypal">
            <label for="paypal">
                <img src="{{ asset('images/paypal-logo.png') }}" alt="PayPal" width="80">
                PayPal
            </label>
            <div class="mt-3" id="paypal-email-input" style="display: none;">
                <div class="form-group">
                    <input type="email" class="form-control" name="paypal_email" placeholder="PayPal Email Address">
                </div>
            </div>
        </div>

        <!-- Apple Pay Option -->
        <div class="payment-method">
            <input type="radio" name="payment_method" id="apple-pay" value="apple-pay">
            <label for="apple-pay">
                <img src="{{ asset('images/apple-pay-logo.png') }}" alt="Apple Pay" width="60">
                Apple Pay
            </label>
        </div>

        <!-- Google Pay Option -->
        <div class="payment-method">
            <input type="radio" name="payment_method" id="google-pay" value="google-pay">
            <label for="google-pay">
                <img src="{{ asset('images/google-pay-logo.png') }}" alt="Google Pay" width="60">
                Google Pay
            </label>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-custom">Confirm Payment</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const paypalOption = document.querySelector('#paypal');
        const paypalEmailInput = document.querySelector('#paypal-email-input');

        paypalOption.addEventListener('change', function () {
            if (paypalOption.checked) {
                paypalEmailInput.style.display = 'block';
            }
        });

        // Hide PayPal email input when other options are selected
        document.querySelectorAll('input[name="payment_method"]').forEach(option => {
            option.addEventListener('change', function () {
                if (this !== paypalOption) {
                    paypalEmailInput.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection
