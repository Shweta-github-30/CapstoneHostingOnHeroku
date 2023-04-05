<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PremadeCake;

class Premade_cakesController extends Controller
{
    //
    function index(){
        // $test = premade_cakes::all();
        // return view('birthday', compact(test));
           return DB::select("select * from premade_cakes");
    }
}
