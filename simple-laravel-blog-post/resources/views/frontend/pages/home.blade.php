@extends('frontend.layouts.master')
@section('content')
    <div class="section pt-5 pb-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="heading">Trending</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="posts-slide-wrap">
                        <div class="posts-slide" id="posts-slide">


                            <x-single-trend-post />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row g-5">

                @foreach ($posts as $post)
                    <x-single-post />
                @endforeach


            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="heading">Most Popular Posts</h2>
                </div>
            </div>
        </div>
        <div class="most-popular-slider-wrap px-3 px-md-0">
            <div id="most-popular-nav">
                <span class="prev" data-controls="prev">Prev</span>
                <span class="next" data-controls="next">Next</span>
            </div>
            <div class="most-popular-slider" id="most-popular-center">

                <x-single-popular-post />

            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h2 class="h4 fw-bold">Sports</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <x-single-short-post />

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h2 class="h4 fw-bold">Business</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <x-single-short-post />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-light mx-md-3 sec-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h4 fw-bold">Subscribe to newsletter</h2>
                </div>
            </div>
            <form action class="row">
                @csrf
                <div class="col-md-8">
                    <div class="mb-3 mb-md-0">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                </div>
                <div class="col-md-4 d-grid">
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                </div>
            </form>
        </div>
    </div>
@endsection
