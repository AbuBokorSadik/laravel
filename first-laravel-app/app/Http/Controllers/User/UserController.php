<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        $product_exist = 1;
        return view('product.productList', compact('users', 'product_exist'));
    }
}
