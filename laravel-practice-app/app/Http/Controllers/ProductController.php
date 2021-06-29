<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Products;

class ProductController extends Controller
{
    public function getData()
    {
        return Products::all();
    }
}
