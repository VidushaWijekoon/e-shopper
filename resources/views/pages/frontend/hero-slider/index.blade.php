<div class="intro-slider-container mb-5">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
        data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
        @forelse ($slider as $sliderItem)
            <div class="intro-slide" style="background-image: url({{ asset($sliderItem->image) }})">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-third">{{ $sliderItem->title }}</h3>
                            <h1 class="intro-title">{{ $sliderItem->title }}</h1>
                            <h1 class="intro-title">{{ $sliderItem->short_description }}</h1>

                            <div class="intro-price">
                                <span class="text-third">
                                    AED د.إ{{ $sliderItem->price }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <span>Slider Not Found</span>
        @endforelse

    </div>

    <span class="slider-loader"></span>
</div>
