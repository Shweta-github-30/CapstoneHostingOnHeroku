<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customize;
use App\Cake;
use App\Cart;

class CustomizeController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $customizes = new Customize();
        $customizes->cake_shape = $request->input('shape');
        $customizes->cake_layer = $request->input('layer');
        $customizes->cake_filling = $request->input('filling');
        $customizes->icing = $request->input('icing');
        $customizes->cake_flavor = $request->input('flavour');
        $customizes->message = $request->input('message');
        $customizes->calculated_price = $request->input('price');
        $customizes->save();

        // Create a new cake record in the cakes table with the cus_id set to the customize ID
        $cake = new Cake;
        $cake->cus_id = $customizes->id;
        $cake->save();

        // Store cart data in the carts table
        $cart = new Cart;
        $cart->cake_id = $cake->id; // Use the cus_id as the cake_id in the carts table

        if (Auth::id()) {
            $user = Auth::user();
            // dd($user);

            // $cart=new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->user_id = $user->id;

            $cart->cake_id = $cake->id;
            $totalPrice = $cart->total_price;
            $cart->total_price = $customizes->calculated_price;
            $cart->save();
            // return redirect()->back();
            // return redirect('/cart')->with('status', "Add to cart sucessfully");
            // return redirect()-> back();
            // return redirect()-> back();
        } else {
            return redirect('login');
        }
        // Redirect the user back to the product page or wherever you want them to go next
        return redirect()->back()->with('success', 'Product added to cart!');
    }
}