<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function result(Request $request)
    {
            $request->validate([

                'quiry' => 'required',
            ]);
            $search = $request->input('quiry');
            $products = Product::where('mobile_name', 'like', "%$search%")->get();

            return view('web.search', compact('products'));

    }
}
