<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function show($name)
    {
        //$user = DB::table('users')->where('name', $name)->first();
        //dd($user);

        //Eloquent
        return view('users', ['user' => User::where('name', $name)->firstOrfail()]);
    }

    public function saluda()
    {
        //return view('users', ['name' => 'Samuel']);
        return view('users')->with('name', 'Tamuekaaa');
    }
}
