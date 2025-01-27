<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // login page route
    public function index()
    {
        return view('login');
    }

    // dahsboard page route
    public function dashboard()
    {
        return view('dashboard');
    }


}
