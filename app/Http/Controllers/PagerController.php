<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagerController extends Controller
{
    public function __construct()
    {

    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

}
