<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('paymentmethod');
    }

    public function confirmPayment(Request $request)
    {

        $request->validate([
            'payment_method' => 'required',
            'card_number' => 'required_if:payment_method,visa',
            'card_holder_name' => 'required_if:payment_method,visa',
            'expiry_date' => 'required_if:payment_method,visa',
            'cvv' => 'required_if:payment_method,visa',
            'paypal_email' => 'required_if:payment_method,paypal|email',
        ]);

        return redirect()->route('paymentmethod')->with('success', 'Payment processed successfully!');
    }
}
