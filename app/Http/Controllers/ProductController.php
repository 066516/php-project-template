<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        $products = Product::all();
        return response()->json(['message' => 'products fetched','date' => $products]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:10',
            'description' => 'required',
            'stock' => 'required|numeric|min:1',
            'status' => 'required|in:available,unavailable',
            'image' => 'required',
        ]);
        $product = Product::create($validatedData);
        return response()->json(['message' => 'product created','data' => $product]);
    }

    public function show($id){
        $product = Product::find($id);
        if($product){
            return response()->json(['message' => 'product fetched','data' => $product]);
        }else{
            return response()->json(['message' => 'product not found']);
        }
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if($product){
            $validatedData = $request->validate([
                'name' => 'required',
                'price' => 'required|numeric|min:10',
                'description' => 'required',
                'stock' => 'required|numeric|min:1',
                'status' => 'required|in:available,unavailable',
                'image' => 'required',
            ]);
            $product->update($validatedData);
            return response()->json(['message' => 'product updated','data' => $product]);
        }else{
            return response()->json(['message' => 'product not found']);
        }
    }

    public function destroy($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json(['message' => 'product deleted']);
        }else{
            return response()->json(['message' => 'product not found']);
        }
    }
}
