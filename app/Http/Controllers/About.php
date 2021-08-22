<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    function index()
    {
        return view('about');
    }

    function contactUs()
    {
        return view('contact-us');
    }
}
