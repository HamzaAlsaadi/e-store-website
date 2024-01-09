<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function store(Request $request, $product_id)
{
    $product = Product::findOrFail($product_id);

    $validatedData = $request->validate([
        'price' => 'required|numeric',
        'expiration_date' => 'required|date', // Add validation for expiration date
        // Other validation rules for the offer
    ]);

    $offer = new offer([
        'price' => $validatedData['price'],
        'expiration_date' => $validatedData['expiration_date'], // Assign expiration date
        // Other offer details
    ]);

    $product->offers()->save($offer);

    return response()->json(['message' => 'Offer created successfully'], 201);
}

public function deleteOffer($offerId)
    {
        $offer = Offer::findOrFail($offerId);
        $offer->delete();

        return response()->json(['message' => 'Offer deleted successfully'], 200);
    }

    public function modifyOffer(Request $request, $offerId)
    {
        $offer = Offer::findOrFail($offerId);

        // Validate request data
        $validatedData = $request->validate([
            'price' => 'numeric',
            'expiration_date' => 'date',
        ]);

        // Update offer details
        if (isset($validatedData['price'])) {
            $offer->price = $validatedData['price'];
        }

        if (isset($validatedData['expiration_date'])) {
            $offer->expiration_date = $validatedData['expiration_date'];
        }

        $offer->save();

        return response()->json(['message' => 'Offer modified successfully'], 200);
    }

    public function allOffersWithProductNames()
    {
        $offers = Offer::with('product:name')->get();

        return response()->json(['offers_with_product_names' => $offers], 200);
    }
}
