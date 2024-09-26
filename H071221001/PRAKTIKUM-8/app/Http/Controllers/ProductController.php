<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $productLine = $request->input('productLine');

        $products = Product::where('productLine', $productLine)->get();

        return view('productlines', ['products' => $products]);
    }

    public function showProduct($productName)
    {
        $product = Product::where('productName', $productName)->first();

        return view('show', ['product' => $product]);
    }
}
