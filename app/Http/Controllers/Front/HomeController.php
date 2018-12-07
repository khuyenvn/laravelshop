<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('front.index', compact('products'));
    }
}
