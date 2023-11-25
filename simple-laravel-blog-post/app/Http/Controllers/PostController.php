<?php

namespace App\Http\Controllers;

use App\Models\Post;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function post()
    {
        return view("components.post");
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'category' => ['required'],
                'title' => ['required'],
                'description' => ['required'],
                'image' => '',
            ]);
            $post = new Post();
            $post->category = $request->category;
            $post->title = $request->title;
            $post->slug = Str::slug($request->title);
            $post->description = $request->description;
            $post->save();

            return redirect()->route('home');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
