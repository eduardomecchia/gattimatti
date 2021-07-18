<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        return view("home");
    }

    public function prisk() 
    {
        return view("prisk");
    }

    public function zelda() 
    {
        return view("zelda");
    }
}
