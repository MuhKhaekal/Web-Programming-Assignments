<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLines;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_all_products()
    {
        $productlines = ProductLines::all();
        $products = Product::all();
        return view('products', compact('products', 'productlines'));
    }

    public function get_details($value)
    {
        $productlines = ProductLines::all();
        $productLine = ProductLines::where('productLine', $value)->first();
        
        if ($productLine) {
            $products = Product::where('productLine', $value)->get();
            return view('products', compact('products', 'productlines'));
        } else {
            $productdetails = Product::where('productCode', $value)->get();
            return view('productDetails', compact('productdetails', 'productlines'));
        }
    }

    public function get_product($value)
    {
    $productlines = ProductLines::all();
    
    $productdetails = Product::where('productCode', $value)->first();

    if ($productdetails) {
        return view('product', compact('productdetails', 'productlines'));
    } else {
        // Produk tidak ditemukan, atur penanganan yang sesuai di sini, misalnya redirect atau tampilkan pesan error.
    }
}

    
}
