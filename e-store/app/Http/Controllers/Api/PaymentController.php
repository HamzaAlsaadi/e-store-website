<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'currency' => 'required'
        ]);

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount,
                'currency' => $request->currency,
            ]);

            return response()->json(['client_secret' => $paymentIntent->client_secret]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
