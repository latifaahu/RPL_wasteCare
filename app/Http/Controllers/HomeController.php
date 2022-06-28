<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        return view('home', [
            "title" => "Waste Care | Home",
            "active" => 'home'
        ]);
    }
    public function profile()
    {
        return view('profile', [
            "title" => "Waste Care | Profile",
            "active" => 'profile'
        ]);
    }


}
