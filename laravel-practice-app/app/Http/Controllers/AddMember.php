<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AddMember extends Controller
{
    function add(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash('username',$data);
        return redirect('add');
    }
}
