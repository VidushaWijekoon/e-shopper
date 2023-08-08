@extends('layouts.frontend.app')
@section('content')
    <div class="intro-slider-container mb-5">
        @include('pages.frontend.hero-slider.index')
    </div>

    <div class="container">
        @include('pages.frontend.categories.index')
    </div>

    <div class="container">
        @include('pages.frontend.offers.index')
    </div>

    <div class="container mt-5">
        @include('pages.frontend.new_arrivals.index')
    </div>

    <div class="container mt-5">
        @include('pages.frontend.promotions.index')
    </div>

    <div class="container mt-5 bg-info p-5">
        @include('pages.frontend.box_icons.index')
    </div>

    <div class="container mt-5">
        @include('pages.frontend.trending_products.index')
    </div>
@endsection
