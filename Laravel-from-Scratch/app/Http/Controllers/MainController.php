<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $x = 7/0;
        // return view('test');
        return view('welcome');
        // $viewName = env("APP_NAME");
        // $viewName = config("app_name");
        // dump(111);
        // dd($viewName, env("APP_NAME"),config("app_name"));
        // return view($viewName);
    }
}
