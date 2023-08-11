<div class="intro-slider-container">
    <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
        @foreach ($slider as $sliderItem)
            <div class="intro-slide" style="background-image: url({{ asset($sliderItem->image) }});">
                <div class="container intro-content">
                    <h2 class="intro-subtitle text-capitalize">{{ $sliderItem->title }}</h2>
                    <h1 class="intro-title text-capitalize text-warning">{{ $sliderItem->short_description }}</h1>
                </div>
            </div>
        @endforeach
    </div>

    <span class="slider-loader text-white"></span>
</div>
