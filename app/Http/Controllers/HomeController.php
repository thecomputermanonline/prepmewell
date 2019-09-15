<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function marker_info()
    {
        return view('become-a-marker');
    }
}
