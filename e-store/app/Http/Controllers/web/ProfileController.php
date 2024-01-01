<?php

namespace App\Http\Controllers\web;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AddressUser;
use Validator;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $address = AddressUser::where('user_id', $user->id)->first();

        return view('web.profile.profile_user',compact('user','address'));
    }

    public function show($id )
    {
        return view('web.profile.profile.store');
    }

    public function edit($id )
    {
        $user_id=Auth::id();
        $address = AddressUser::where('user_id', 'like', "%$user_id%")->get();
        $user=User::findOrfail($user_id);
        return view('web.profile.edit',compact('address','user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_of_the_city' => 'nullable',
            'number_of_the_street' => 'nullable',
            'number_of_building'=> 'nullable'
         ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user=Auth::id();
        $address=new AddressUser;
        $address->name_of_the_city = $request->name_of_the_city;
        $address->number_of_the_street = $request->number_of_the_street;
        $address->number_of_building = $request->number_of_building;
        $address->user_id=$user;
        $address->save();

        $user = Auth::user();
        $user->update([
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('success', 'User information stored successfully!');
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name_of_the_city' => 'required',
            'number_of_the_street' => 'required',
            'number_of_building' => 'required',
            'phone' => 'required',
         ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by id
        $user = User::findOrFail($id);
        // Update the user's profile data
        $user->update([
            'phone' => $request->input('phone'),
        ]);
        // Find the address of the user by user_id
        $address = AddressUser::where('user_id', $id)->first();
        // Update the address data
        $address->update([
            'name_of_the_city' => $request->input('name_of_the_city'),
            'number_of_the_street' => $request->input('number_of_the_street'),
            'number_of_building' => $request->input('number_of_building'),
        ]);
        // Redirect the user back to the previous page with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
