<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResource;
use App\Http\Resources\RegisterResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request){
        $user=User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);
       $token = $user->createToken('auth_token')->plainTextToken; // ✅

       return response()->json([
        
            "message"=>"Register Successfully",
            "data"=>new RegisterResource($user,$token),
        
       ]);
    }
    public function login(Request $request){
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                "data"=>[
                    "message"=>"Invalid password and email",
                ]
            ]);
        }

        $user=Auth::user();
        $token=$user->createToken('Auth_token')->plainTextToken;


       

        return response()->json([
            "message"=>"Login Successfully",
            "data"=>new LoginResource($user,$token),
        ]);

    }
}
