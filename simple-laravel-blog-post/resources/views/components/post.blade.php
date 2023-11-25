@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row gx-0 mt-5">
        <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
            <form id="registerForm" method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control bg-light border-light" id="category" name="category" required
                    placeholder="Category">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control bg-light border-light" id="title" name="title" required
                    placeholder="Title">
                </div>
                <div class="mb-3">
                    <textarea class="w-100 " name="description" id="Description" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control bg-light border-light" id="file" name="image" required
                    placeholder="Image">
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark shadow-none " type="submit">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection