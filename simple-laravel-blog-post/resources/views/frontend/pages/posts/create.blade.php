@extends('frontend.layouts.master')
@section('title', 'Create Post')
@section('content')
<div class="container">
    <div class="row gx-0 mt-5">
        <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
            <h1 for="" class="text-center">Create Post</h1>
            <form id="registerForm" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <select name="category" id="" class="form-control bg-light border-light">
                        @foreach($categories as $category)
                        <option value="{{$category->slug}}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control bg-light border-light" id="title" name="title" required
                    placeholder="Title">
                </div>
                <div class="mb-3">
                    <textarea class="w-50" style="height: 16vh" name="short_description" id="Description" placeholder="Short Description"></textarea>
                </div>
                <div class="mb-3">
                    <textarea class="w-100 " name="description" id="Description" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control bg-light border-light" id="file" name="image" required
                    placeholder="Image">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary shadow-none " type="submit">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
