<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return 'A from to create a product from controller';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        return view('products.show');
    }

    public function edit($product)
    {
        return "Showing the form to edit the product {$product}";
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
