<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\MenuResource;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query=Menu::query();
        $keyword=$request->get('q');

        $query->where(function ($q) use ($keyword) {
            $q->where('title','like',"%{$keyword}")
            ->orWhere('slug','like',"%{$keyword}")
            ->orWhere('price','like',"%{$keyword}")
            ->orWhere('image','like',"%{$keyword}");
        });

        if($request->min_price && $request->max_price){
            $query->whereBetween('price',[
                $request->min_price,
                $request->max_price
            ]);
        }

        $sortBy=$request->get('sort_by') ?? "id";
        $sortByDirection=$request->get('sort_by_direction') ?? "desc";
        $query->orderBy($sortBy,$sortByDirection);

        $menus=$query->paginate(7);

        return response()->json([
            "data"=>MenuResource::collection($menus)
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu=Menu::create([...$request->validated(),
        "slug"=>Str::slug($request->title),
        "user_id"=>Auth::id()]);

        return response()->json([
            "messsage"=>"Menu stored successfully",
            "data"=>new MenuResource($menu)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return response()->json([
            "data"=>new MenuResource($menu)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update([...$request->validated(),
        "slug"=>$request->filled('title') ? Str::slug($request->title) : $menu->slug,
        ]);

        return response()->json([
            "message"=>"Menu stored successfully",
            "data"=>new MenuResource($menu)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return response()->json([
            "data"=>[
                "message"=>"Menu deleted successfully"
            ]
        ]);
    }
}
