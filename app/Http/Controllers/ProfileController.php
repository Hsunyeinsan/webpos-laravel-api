<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeNameRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangePhotoRequest;
use App\Http\Resources\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(Request $request){

        Log::info($request->user());

        return response()->json([
            "data"=>new ProfileResource($request->user()),
        ]);
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            "data"=>[
                "message"=>"Logout successfully",
            ]
        ]);
    }
    public function changePassword(ChangePasswordRequest $request){
        $user=$request->user();

        if(!Hash::check($request->old_password,$user->password)){
            return response()->json([
                "data"=>[
                    "message"=>"Old password is incorrect"
                ]
            ],401);
        }

        $user->update(["password"=>Hash::make($request->new_password)]);

        $user->tokens()->delete();

        return response()->json([
            "data"=>[
                "message"=>"Password changed successfully",
            ]
        ]);
    }
    public function changeName(ChangeNameRequest $request) {
        $user=$request->user();

        $user->update(["name"=>$request->name]);

        return response()->json([
            "data"=>[
                "message"=>"Name changed successfully",
            ]
        ]);

    }
    public function changeProfileImage(ChangePhotoRequest $request){
        $user=$request->user();
        if($user->image){
            Storage::delete($user->image);
        }
        

        $url=Storage::put("/",$request->file('image'));

        $user->update(["image"=> $url]);

        return response()->json([
            "message"=>"Profile image changed successfully",
            "data"=>new ProfileResource($user),
        ]);
    }
}
