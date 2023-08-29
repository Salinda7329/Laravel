<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function addUser()
    {
        return view('addUser');
    }

    public function viewUsers()
    {
        return view('viewUsers');
    }
}
