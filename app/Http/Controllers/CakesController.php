<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PremadeCake;

class CakesController extends Controller
{
    //
    function index(){
        $test = premade_cakes::all();
        return view('birthday', compact(test));
        // return DB::select("select * from cake");
    }
}
