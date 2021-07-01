<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->get();
        $products = Product::all();
        // dd($products);
        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create ');
    }

    public function store()
    {
        $product = Product::create(request()->all());
        return $product;
    }

    public function show($product)
    {
        // $product = DB::table('products')->where('id',$product)->get();
        // $product = DB::table('products')->find($product);
        $product = Product::findOrFail($product);
        // dd($product);
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product)
        ]);
    }

    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        return $product;
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return $product;
    }
}