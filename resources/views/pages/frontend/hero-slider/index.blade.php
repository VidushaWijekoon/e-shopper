<div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>

    @foreach ($slider as $sliderItem)
    <div class="intro-slide" style="background-image: url({{ asset($sliderItem->image) }});">
    </div>
    <!-- End .intro-slide -->
    @endforeach
</div>
<!-- End .intro-slider owl-carousel owl-simple -->

<span class="slider-loader"></span><!-- End .slider-loader -->