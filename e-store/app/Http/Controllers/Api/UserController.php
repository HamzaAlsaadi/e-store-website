<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {

        $user = User::all();
        return response()->json($user);
    }
    public function show(Request $request)
    {
        $token_id = auth()->user()->id;
        $user = User::where('id', $token_id)->first();
        if (!$user) {
            $response = ['message' => 'id incorrect'];
        } else {
            $response =  $user;
        }return response()->json($response);
    }
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'Nationality' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'Nationality' => $request->Nationality,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'type_of_user'=>$user->Type_of_user,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'user not found'], 404);
        }
        $this->validate($request, [
            'name' => 'required',
            'Nationality' => 'required',
            'Type_of_user' => 'required',
            'email' => 'required',
            'password' => 'required',
            // Add validation rules for other fields
        ]);
        $user->update($request->all());
        return response()->json($user, 200);
    }
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'user not found'], 404);
        }

        $user->delete();
        return response()->json(['message' => 'user deleted successfully'], 200);
    }


    public function sendVerifyEmail($email)
    {
        if (auth()->user()) {
            $user = User::where('email', $email)->get();
            if (count($user) > 0) {
                $random = Str::random(40);
                $domain = URL::to('/');
                $url = $domain . '/verify-email/' . $random;
                $data['url'] = $url;
                $data['email'] = $email;
                $data['title'] = 'Email verified';
                $data['body'] = "please click here to  verify your email";

                Mail::send('API.Email_verify', ['data' => $data], function ($message) use ($data) {
                    $message->to($data['email'])->subject($data['title']);
                });

                $user = User::find($user[0]['id']);
                $user->remember_token = $random;
                $user->save();
                return response()->json(['success' => true, 'msg' => 'Mail sent successfully']);
            } else {
                return response()->json(['success' => false, 'msg' => 'user is not found .']);
            }
        } else {
            return response()->json(['success' => false, 'msg' => 'user is not Authenticated .']);
        }
    }

    public function verificationMail($token)
    {
        $user = User::where('remember_token', $token)->get();

        if (count($user) > 0) {
            $user = User::find($user[0]['id']);
            $user->remember_token = '';
            $user->email_verified_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();

            return response()->json(['success' => true, 'msg' => 'user is verificated .']);
        } else {
            return  response()->json(['success' => false, 'msg' => 'Error user is not verificated  .']);
        }
    }
}
