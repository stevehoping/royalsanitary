<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('portal.home.index');
    }
    public function about_us()
    {
        return view('portal.about-us.index');   
    }
}
