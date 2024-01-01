<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SerachController extends Controller
{
    public function search(Request $request)
    {
        $query = Product::query();

        // Filter by brand if provided
        // if ($request->has('brand')) {
        //     $query->where('brand', $request->input('brand'));
        // }

        // Add more filters based on user inputs...

        // Perform search based on user input (e.g., search by name or any other criteria)
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('mobile_name', 'like', "%$searchTerm%");
                // ->orWhere('specification_field', 'like', "%$searchTerm%"); // Adjust as per your database schema
            });
        }

        // Fetch the results
        $results = $query->get();

        return response()->json($results);
    }
}
