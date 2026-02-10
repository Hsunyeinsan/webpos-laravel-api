<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        

        $query=Category::query();
        $keyword=$request->get("q");

        $query->where(function ($q) use ($keyword){
            $q->where('title','like',"%{$keyword}")
            ->orWhere('slug','like',"%{$keyword}");
        });

        $sortBy=$request->get('sort_by') ?? "id";
        $sortDirection=$request->get('sort_direction') ?? "desc";

        $query->orderBy($sortBy,$sortDirection);

        $categories=$query->paginate(7);

        return response()->json([
            "data"=>CategoryResource::collection($categories)
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category=Category::create([...$request->validated(),"slug"=> Str::slug($request->title),"user_id"=>Auth::id()]);

        return response()->json([
            "message"=>"category stored successfully",
            "data"=>new CategoryResource($category)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            "data"=>new CategoryResource($category)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        
        $category->update([...$request->validated(),
        'slug' => $request->filled('title') 
        ? Str::slug($request->title) 
        : $category->slug
        ]);

        return response()->json([
            "message"=>"category updated successfully",
            "data"=>new CategoryResource($category)
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            "data"=>[
                "message"=>"category deleted successfully",
            ]
        ]);
    }
}
