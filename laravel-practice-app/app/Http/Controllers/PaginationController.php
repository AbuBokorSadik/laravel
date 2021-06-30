<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    function getData()
    {
        $data = Product::paginate(3);
        return view('pagination',['products'=>$data]);
    }
}
