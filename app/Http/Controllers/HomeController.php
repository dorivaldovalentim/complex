<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontsite.home');
    }

    public function projects()
    {
        return view('frontsite.projects');
    }

    public function services()
    {
        return view('frontsite.services');
    }

    public function blog()
    {
        return view('frontsite.blog');
    }

    public function about()
    {
        return view('frontsite.about');
    }

    public function contacts()
    {
        return view('frontsite.contacts');
    }
}
