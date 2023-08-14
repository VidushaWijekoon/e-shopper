<div class="container">
    <hr class="mb-4">
    <div class="row">
        <div class="col-12">
            @foreach ($promotions as $promotionItems)
                <div class="banner banner-big">
                    <a href="#">
                        <img src="{{ asset($promotionItems->image) }}" alt="Banner">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
