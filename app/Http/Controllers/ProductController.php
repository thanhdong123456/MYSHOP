<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param 
     * @return
     */
    public function index(Request $request)
    {
        $cateId = Category::where('deleted_at', null)->first();
        $cateId = $request->category ? $request->category : $cateId->id;
        $products = Category::where('deleted_at', null)->find($cateId)->products()->get();
        $categories = Category::where('deleted_at', null)->get();
        // dd($products);
        return view('index', compact('products', 'categories'));
    }
}
