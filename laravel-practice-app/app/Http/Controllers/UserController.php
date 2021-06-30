<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Users;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function viewLoad()
    {
        // .....................blade.......................

        // return view('users', ['users'=>['monir','sumit','sadik']]);
        // return view('users', ['users'=>'sadik']);
    }

    public function getData(Request $req)
    {

        $req->validate([
            'username' => 'required | max: 15',
            'userpassword' => 'required | min: 7'
        ]);

        // echo $req;
        return $req->input();

        // return Users::all();

        // $collection = Http::get("https://reqres.in/api/users?page=1");
        // return view('users',['collection'=>$collection['data']]);

        // return view('users');



    }

    public function getRequest(Request $req)
    {
        $req->validate([
            'username' => 'required | max: 15',
            'userpassword' => 'required | min: 7'
        ]);
        
        return $req->input();
    }
}
