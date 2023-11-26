<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('frontend.pages.home')->with(['posts'=> $posts]);
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
