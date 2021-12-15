<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function show()
    {
        $users =new User();
        $x = [];
        //dd($users->all());
        return view("start", ['users'=>$users->all(), 'x'=>$x]);
    }
}
