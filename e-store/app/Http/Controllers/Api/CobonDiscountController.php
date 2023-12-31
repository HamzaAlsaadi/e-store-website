<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Couppon;
use App\Models\couppon_order;
use App\Models\coupponorder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CobonDiscountController extends Controller
{
    public function applyDiscount(Request $request)
    {
        // Get the total price from the request
        $totalPrice = $request->input('total_price');

        // Get the coupon code from the request
        $couponCode = $request->input('coupon_code');

        // Find the coupon in the database by the provided code
        $coupon = Couppon::where('code', $couponCode)
            ->where('expiration_date', '>=', Carbon::now()) // Check if the coupon is not expired
            ->first();

        if ($coupon) {
            // Check if the user has used this coupon before (assuming $userId holds the user's ID)

            // var_dump($order);
            // print($order);
            $isUsed = Order::where('user_id', Auth::user()->id)
                ->where('total_price', $totalPrice)
                ->whereHas('coupon', function ($query) use ($couponCode) {
                    $query->where('code', $couponCode);
                })
                ->exists();

            if (!$isUsed) {
                // The coupon is valid and not used by the user
                $order = Order::where('user_id', Auth::user()->id)
                    ->where('total_price', $totalPrice)->pluck('id')->toArray();
                // Apply the discount to the total price
                // var_dump($order);
                $discountedPrice = $totalPrice - ($totalPrice * ($coupon->discount / 100));
                //insert here to couppon order table
                // couppon_order::create([
                //     "couppon_id " => $coupon->id,
                //     "order_id " => $order[0],

                // ]);

                // Return the discounted price
                return response()->json(['discounted_price' => $discountedPrice]);
            } else {
                return response()->json(['message' => 'Coupon already used by the user']);
            }
        } else {
            return response()->json(['message' => 'Invalid or expired coupon']);
        }
    }

    public function index()
    {
        $coupons = Couppon::all();
        return response()->json($coupons);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:coupons',
            'discount' => 'required|numeric',
            'expiration_date' => 'required|date'
        ]);

        $coupon = Couppon::create($validatedData);
        return response()->json($coupon, 201);
    }

    public function show($id)
    {
        $coupon = Couppon::findOrFail($id);
        return response()->json($coupon);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:coupons,code,' . $id,
            'discount' => 'required|numeric',
            'expiration_date' => 'required|date'
        ]);

        $coupon = Couppon::findOrFail($id);
        $coupon->update($validatedData);
        return response()->json($coupon, 200);
    }

    public function destroy($id)
    {
        $coupon = Couppon::findOrFail($id);
        $coupon->delete();
        return response()->json(null, 204);
    }
}
