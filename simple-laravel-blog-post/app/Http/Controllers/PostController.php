<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();

        return view('frontend.pages.posts.create')->with(['categories'=> $categories]);
    }

    public function store(PostRequest $req){
        try{


            

        }catch(Exception $ex){
            return abort(404);
        }
    }

}
