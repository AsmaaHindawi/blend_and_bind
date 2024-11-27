<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('paymentmethod'); // Ensure the view file is named payment.blade.php in the views folder
    }

    public function confirmPayment(Request $request)
    {
        // Validate payment details based on the payment method selected
        $request->validate([
            'payment_method' => 'required',
            'card_number' => 'required_if:payment_method,visa',
            'card_holder_name' => 'required_if:payment_method,visa',
            'expiry_date' => 'required_if:payment_method,visa',
            'cvv' => 'required_if:payment_method,visa',
            'paypal_email' => 'required_if:payment_method,paypal|email',
        ]);

        // Here you would process the payment using an appropriate service.

        // Redirect back with a success message for the sake of simplicity.
        return redirect()->route('paymentmethod')->with('success', 'Payment processed successfully!');
    }
}
