<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gsm;
use App\Models\Mobolist;
use Illuminate\Http\Request;

class infromationRetiavl extends Controller
{
    public function IR(Request $request)
    {
        $searchTerm = $request->input('mobile_name');

        $product_Gsm = Gsm::where('name_phone', 'like', "%$searchTerm%")->get();
        $product_mobo = Mobolist::where('name', 'like', "%$searchTerm%")->get();

        return response()->json($product_Gsm, $product_mobo);
    }
}
