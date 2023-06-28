<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $product = Product::latest()->get();

        return view('pages.dashboard', compact('product'));
    }

}
