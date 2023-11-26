@extends('frontend.layouts.master')
@section('title', 'Create Category')
@section('content')
<div class="container">
    <div class="row gx-0 mt-5">
        <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
            <h1 for="" class="text-center">Create Category</h1>
            <form id="registerForm" method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control bg-light border-light" id="title" name="title" required
                    placeholder="Title">
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary shadow-none " type="submit">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
