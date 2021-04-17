<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PassportController extends Controller
{
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
 
        if($validator->fails()) {
            return response()->json(["success" => false, "message" => $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('TutsForWeb')->accessToken;
        
        return response()->json(['success' => true, 'token' => $token], 200);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" =>  "required|email",
            "password" =>  "required",
        ]);

        if($validator->fails()) {
            return response()->json(["login" => false, "message" => $validator->errors()]);
        }

        $user = User::where("email", $request->email)->first();

        if(is_null($user)) {
            return response()->json(["login" => false, "message" => "Invalid email address or password"]);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user       =       Auth::user();
            $token      =       $user->createToken('token')->plainTextToken;

            return response()->json(["login" => true, "token" => $token, "data" => $user, "message" => "Login successful"]);
        } else {
            return response()->json(["login" => false, "message" => "Invalid email address or password"]);
        }
    }
}
