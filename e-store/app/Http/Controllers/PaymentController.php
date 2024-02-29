<?php

namespace App\Http\Controllers\payment;

use App\Models\Payment;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Http\Controllers\Controller;
use App\Models\Order;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkout()
    {
        return redirect()->route('show.cart');
    }

    public function session(Request $request)
    {
      /*  $cartItems = session()->get('cart');
        if ($cartItems) {

            $totalPrice = 0;
            foreach ($cartItems as $cartItem) {
                $str1 = $cartItem["price"];
                $str2 =  $cartItem["quantity"];
                $result = $str1 * $str2;
                $totalPrice =$totalPrice + $result;
            }};
            $totalPriceRounded = round($totalPrice * 100);
            $productname='majd';*/
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            #"name" => $productname,
                            "name" => 'trigger',
                        ],
                        #'unit_amount'  => $totalPriceRounded,
                        'unit_amount'  => '1500',
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return redirect()->route('Order.Place');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
