<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function tests_dashboard()
    {
        return view('tests-dashboard');
    }
    public function feedback()
    {
        return view('feedback');
    }
    public function history()
    {
        return view('history');
    }
}
