<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
    public function welcome(){

    	$products = Product::limit(3)->get();
    	return view('welcome',['products' => $products]);
    }
}
