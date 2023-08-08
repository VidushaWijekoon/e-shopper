<div class="col-lg-12 col-xxl-4-5col">
    <div class="row">
        @forelse ($promotions as $promotionsItem)
            <div class="col-md-4">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="{{ asset($promotionsItem->image) }}" alt="{{ $promotionsItem->title }}">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a
                                href="#">{{ $promotionsItem->title }}</a></h4>
                        <h3 class="banner-title text-white"><a href="#">{{ $promotionsItem->title }} Up
                                To {{ $promotionsItem->promotion_discount }} % Off</span></a></h3>
                    </div>
                </div>
            </div>

        @empty
        @endforelse

    </div><!-- End .row -->
</div><!-- End .col-lg-3 col-xxl-4-5col -->
