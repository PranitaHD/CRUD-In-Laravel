<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product();
        $product->productname = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.show');
    }
    public function show(Request $request)
    {
        $product = Product::all();
        return view('table', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->productname = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->update();
        return redirect()->route('product.show');
    }
    public function delete($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.show');
    }
}