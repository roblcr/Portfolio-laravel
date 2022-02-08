<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfolio extends Controller
{
    public function home()
    {
        return view('home');
    }
}
