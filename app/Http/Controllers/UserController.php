<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function show($id)
    {
        return 'UserID ' . $id;
    }

    public function saluda()
    {
        //return view('users', ['name' => 'Samuel']);
        return view('users')->with('name', 'Tamuekaaa');
    }
}
