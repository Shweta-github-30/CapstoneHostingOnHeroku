<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Premade_cake;
use App\Cake;
use App\User;
use App\Cart;

class BirthdayController extends Controller
{
    //
    function index(){
        // $test = Premade_cake::all();

        $test = DB::table('premade_cakes')
        ->join('cakes', 'premade_cakes.id',"=",'cakes.premade_cake_id')
        ->where('occasion_id', 1)
        ->get();
        return view('birthday', ['test'=>$test]);
    }

    function getChristmas()
    {
        $christmas = DB::table('premade_cakes')
        ->join('cakes', 'premade_cakes.id',"=",'cakes.premade_cake_id')
        ->where('occasion_id', 4)
        ->get();
        return view('christmas', ['christmas'=>$christmas]);
    }

    function getGraduation()
    {
        $graduation = DB::table('premade_cakes')
        ->join('cakes', 'premade_cakes.id',"=",'cakes.premade_cake_id')
        ->where('occasion_id', 2)
        ->get();
        return view('graduation', ['graduation'=>$graduation]);
    }

    function getValentine()
    {
        $valentine = DB::table('premade_cakes')
        ->join('cakes', 'premade_cakes.id',"=",'cakes.premade_cake_id')
        ->where('occasion_id', 5)
        ->get();
        return view('valentine', ['valentine'=>$valentine]);
    }

    function getWedding()
    {
        $wedding = DB::table('premade_cakes')
        ->join('cakes', 'premade_cakes.id',"=",'cakes.premade_cake_id')
        ->where('occasion_id', 3)
        ->get();
        return view('wedding', ['wedding'=>$wedding]);
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            // dd($user);
            $product=cake::find($id);
            $premade=premade_cake::find($id);
            // dd($product);

            $cart=new cart;

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->user_id=$user->id;

            $cart->cake_id=$product->id;

            $cart->quantity=$request->quantity;
            // $cartItem = Cart::find(1);
            $totalPrice = $cart->total_price;
            $cart->total_price = $premade->price * $cart->quantity;
            $cart->save();
            // return redirect()->back();
            return redirect('/cart')->with('status', "Add to cart sucessfully");
        }
        else
        {
            return redirect('login');
        }
    }
}
