<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    // public function index($user)
    // {
    //     // echo $user;
    //     // echo " hello from controller";
    //     return ['name' => 'sadik', 'email' => 'sadik@gmail.com'];
    // }
    public function loadView($name)
    {
        return view("users",['name'=>$name]);
    }
}
