<?php

namespace App\Http\Controllers\web;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Validator;
class OfferController extends Controller
{
    public function index()
    {
        $products = Product::whereHas('offer', function ($query) {
            $query->where('percent_of_discount', '!=', 0.00);
        })
        ->with(['offer' => function ($query) {
            $query->select('id', 'percent_of_discount');
        }])->get();
        $products->each(function ($product) {
            $product->discounted_price = $product->Price * (1 - floatval($product->offer->percent_of_discount) / 100);
        });
        $products = $this->paginate($products, 10);
        return view('web.offer.offer_product', compact('products'));

    }
    public function paginate($items, $perPage)
    {
        return new LengthAwarePaginator($items->forPage(LengthAwarePaginator::resolveCurrentPage(), $perPage), $items->count(), $perPage, LengthAwarePaginator::resolveCurrentPage(), ['path' => LengthAwarePaginator::resolveCurrentPath()]);
    }

}
