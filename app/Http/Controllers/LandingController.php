<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingController extends Controller
{
    public function home()
    {
        $products = Product::latest()->get();
        return view('pages.landing.home', compact('products'));
    }
}
