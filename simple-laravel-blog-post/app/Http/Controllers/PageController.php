<?php 

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function category()
    {
        return view('frontend.pages.categories');
    }

    public function single()
    {
        return view('frontend.pages.single');
    }
}