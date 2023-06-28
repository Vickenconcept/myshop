<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function __invoke()
    // {
    //     // ...
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $user = auth()->user();
        // $projects = new Product;
        $product = $user->products->create([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        // dd();
       // Save the model instance to the database
        $product->save();
        // Redirect or perform any other actions after storing the data
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = Product::findorfail($product->id);
        // $this->authorize('update-product', $product);

        return view('admin.edit-product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id); // Retrieve the specific product

        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'required',
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $product->update($validatedData); // Update the product
        return redirect('admin');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // dd($product);
        $product = Product::find($product->id);
        $product->delete();

        return redirect('admin');
    }
}
