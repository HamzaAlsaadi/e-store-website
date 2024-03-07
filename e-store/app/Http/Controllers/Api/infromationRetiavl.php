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

        $product_Gsm = Gsm::where('name_phone', 'like', "%$searchTerm%")->first();
        $product_mobo = Mobolist::where('name', 'like', "%$searchTerm%")->first();


        if (isset($product_Gsm) && isset($product_mobo)) {
            return response()->json([$product_Gsm, $product_mobo], 200);

        } else if (isset($product_Gsm) && (!isset($product_mobo))) {
            $product_mobo = Mobolist::find('0270ce88-9f72-4c4b-a13e-6999c18dbc6e');

            return response()->json([$product_mobo, $product_Gsm], 200);
        } else if ((!isset($product_Gsm)) && (isset($product_mobo))) {
            $product_Gsm = Gsm::find('0012a6b3-ac27-464a-aa9c-138c46c16fdc');
            return response()->json([$product_Gsm, $product_mobo], 200);
        } else {
            return response()->json([[], []], 200);
        }
    }
}
