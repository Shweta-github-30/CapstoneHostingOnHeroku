<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Premade_cake;
use App\Cake;
use App\User;
use App\Cart;

class CartController extends Controller
{
    // public $subtotal = 0;
    function ViewCart()
    {   $cartItem = DB::table('carts')
        // ->join('orders', 'carts.id',"=",'orders.cart_id')
        ->join('cakes', 'carts.cake_id',"=",'cakes.id')
        ->join('premade_cakes', 'cakes.premade_cake_id',"=",'premade_cakes.id')
        ->leftJoin('customizes', 'cakes.cus_id', '=', 'customizes.id')
        ->where('carts.user_id', '=', auth()->id())
        ->get();
        
        // foreach($this->cartItem as $item)
        // {
        //     $this->subtotal += $item->price * $item->quantity ;
        // }
        return view('cart', ['cartItem'=>$cartItem]);

        // $cartItem = DB::table('carts')
        // ->join('orders', 'carts.id',"=",'orders.cart_id')
        // ->join('cakes', 'orders.cake_id',"=",'cakes.id')
        // ->join('premade_cakes', 'cakes.premade_cake_id',"=",'premade_cakes.id')
        // ->get();
        // return view('cart', ['cartItem'=>$cartItem]);
        // return DB::select("
        // SELECT *  
        // FROM carts 
        // JOIN orders
        // ON carts.cart_id=orders.order_id  
        // JOIN cakes
        // ON orders.cake_id = cakes.cake_id 
        // JOIN premade_cakes
        // ON cakes.premade_cake_id = premade_cakes.premade_cake_id");
    }


    

}
