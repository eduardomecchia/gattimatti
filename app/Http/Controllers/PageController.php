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
        $allPhotos = config("cats");
        $photos = $allPhotos["priskPics"];

        return view("prisk", compact("photos"));
    }

    public function zelda() 
    {
        $allPhotos = config("cats");
        $photos = $allPhotos["zeldaPics"];

        return view("zelda", compact("photos"));
    }
}
