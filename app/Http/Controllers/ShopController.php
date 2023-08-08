<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function product(Product $product)
    {
        return view('pages.shop.product', compact('product'));
    }
}
