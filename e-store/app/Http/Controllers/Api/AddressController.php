<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AddressUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{


    public function index()
    {
        $user = Auth::user();
        $address = AddressUser::where('user_id', $user->id)->first();

        return response()->json($address, 200);
    }

    public function show($id)
    {
        $address = AddressUser::find($id);
        if (!$address) {
            return response()->json(['message' => 'user not found'], 404);
        }

        return response()->json($address, 200);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_of_the_city' => 'required',
            'number_of_the_street' => 'required',
            'number_of_building' => 'required',
            'user_id' => 'required',
        ]);
        $AddressUser = AddressUser::create($validatedData);
        return response()->json($AddressUser, 201);
    }

    public function update(Request $request, $id)
    {
        $AddressUser = AddressUser::find($request->id);
        if (!$AddressUser) {
            return response()->json(['error' => 'address user not found'], 404);
        }
        $validatedData = $request->validate([
            'name_of_the_city' => 'required',
            'number_of_the_street' => 'required',
            'number_of_building' => 'required',
            'user_id' => 'required',
        ]);
        $AddressUser->update($validatedData);
        return response()->json($AddressUser, 200);
    }

    public function destroy(Request $request)
    {
        $company = AddressUser::find($request->id);
        if (!$company) {
            return response()->json(['error' => 'address user not found'], 404);
        }
    }
}
