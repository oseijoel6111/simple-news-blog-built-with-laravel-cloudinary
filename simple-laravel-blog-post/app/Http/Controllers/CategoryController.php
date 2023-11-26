<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{


    public function index()
    {
        return view('frontend.pages.categories.create');
    }

    public function store(Request $req)
    {

        // validate category
        $req->validate([
            'title' => ['required', 'string']
        ]);

        // store category
        Category::create([
            'name' => $req->get('title'),
            'slug' => Str::slug($req->get('title'))
        ]);

        return redirect()->route('home', [], 201);
    }
}
