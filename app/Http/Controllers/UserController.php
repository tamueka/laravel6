<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function show ($id) {
        return 'UserID ' .$id;
    }
}
