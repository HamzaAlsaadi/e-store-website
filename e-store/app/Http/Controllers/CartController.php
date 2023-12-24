<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{

    public function addProducttoCart(Request $request , $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]=["quantity" => $request->quantity];
        } else {
            $cart[$id] = [
                "id"=>$id,
                "name" => $product->mobile_name,
                "quantity" => $request->quantity,
                "price" => $product->price,
                "Company_id" => $product->Company_id,
                "category_id" => $product->category_id
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }
}
