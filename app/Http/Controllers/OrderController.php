<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $orders = Order::all();
        return response()->json(['message' => 'orders fetched','data' => $orders]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric|min:1',
            'total' => 'required|numeric|min:1',
            'status' => 'required|in:pending,processing,completed',
        ]);
        $order = Order::create($validatedData);
        return response()->json(['message' => 'order created','data' => $order]);
    }
    public function show($id){
        $order = Order::with('product','user')->find($id);
        if($order){
            return response()->json(['message' => 'order fetched','data' => $order]);
        }else{
            return response()->json(['message' => 'order not found']);
        }
    }
    public function update(Request $request, $id){
        $order = Order::find($id);
        if($order){
            $validatedData = $request->validate([
                'product_id' => 'required|numeric',
                'quantity' => 'required|numeric|min:1',
                'total' => 'required|numeric|min:1',
                'status' => 'required|in:pending,processing,completed',
            ]);
            $order->update($validatedData);
            return response()->json(['message' => 'order updated','data' => $order]);
        }else{
            return response()->json(['message' => 'order not found']);
        }
    }
    public function destroy($id){
        $order = Order::find($id);
        if($order){
            $order->delete();
            return response()->json(['message' => 'order deleted']);
        }else{
            return response()->json(['message' => 'order not found']);
        }
    }
}
