<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Http\Resources\PhotoResource;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    
    public function store(StorePhotoRequest $request)
    {
        $url=Storage::put("/",$request->file('image'));

        $photo=Photo::create(["url"=>$url]);

        return response()->json([
            "message"=>"image stored successfully",
            "data"=>new PhotoResource($photo),
        ]);

    }    
    public function destroy($url)
    {
        Storage::delete($url);
        Photo::where("url",$url)->delete();

        return response([
            "message" => "Photo deleted successfully",
        ]);

    }
}
