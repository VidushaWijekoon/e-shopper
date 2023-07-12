@extends('layouts.frontend.app')
@section('content')

<div class="intro-slider-container mb-5">
    @include('pages.frontend.hero-slider.index')
</div>
<!-- End .intro-slider-container -->

<div class="container">
    @include('pages.frontend.categories.index')
</div>

@endsection