<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('frontend.pages.posts.create')->with(['categories' => $categories]);
    }

    public function store(PostRequest $req)
    {
        try {

            // Determine post category
            $category  = Category::where('slug', $req->get('category'))->first();
            if ($category) {
                $post = Post::create([
                    'title' => $req->get('title'),
                    'short_description' => $req->get('short_description'),
                    'body' => $req->get('description'),
                    'slug' => Str::slug($req->get('title')),
                    'category_id' => $category->id
                ]);
                // attached image to its post
                $post->attachMedia($req->file('image'));

                return redirect()->route('home');
            }
        } catch (Exception $ex) {
            dd($ex);
            return abort(404);
        }
    }
}
