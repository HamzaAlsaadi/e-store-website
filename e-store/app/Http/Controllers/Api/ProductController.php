<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mobile_name' => 'required',
            'Cpu_spsecfication' => 'required',
            'Gpu_spsecfication' => 'required',
            'battery_spsecfication' => 'required',
            'Front_camera_spsecfication' => 'required',
            'Back_camera_spsecfication' => 'required',
            'Screen_Size' => 'required',
            'Type_of_charge' => 'required',
            'Price' => 'required',
            'imge' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required|exists:categories,id',
            'Company_id' => 'required|exists:companies,id',
            // Add other validation rules for your fields
        ]);

        $product = Product::create($validatedData);

        return response()->json(['product' => $product], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json(['product' => $product], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validatedData = $request->validate([
            'mobile_name' => 'required',
            'Cpu_spsecfication' => 'required',
            'Gpu_spsecfication' => 'required',
            'battery_spsecfication' => 'required',
            'Front_camera_spsecfication' => 'required',
            'Back_camera_spsecfication' => 'required',
            'Screen_Size' => 'required',
            'Type_of_charge' => 'required',
            'Price' => 'required',
            'imge' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required|exists:categories,id',
            'Company_id' => 'required|exists:companies,id',
            // Add other validation rules for your fields
        ]);

        $product->update($validatedData);

        return response()->json(['product' => $product], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
