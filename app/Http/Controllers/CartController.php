<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $cart = Cart::where("user_id", 1)->get();
    return response()->json($cart);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $cart = Cart::create([
            'msp' => $request->msp,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);

        return response()->json(['message' => 'create success'], 200);
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();
        $response = [
            'status' => 'success',
            'message' => 'Product deleted successfully',
        ];
        return response()->json($response);
    }
}
