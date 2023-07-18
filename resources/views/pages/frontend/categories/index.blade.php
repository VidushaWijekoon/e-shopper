<h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->

<div class="cat-blocks-container">

    <div class="row">
        @foreach ($categories as $categoryItem)
        <div class="col-6 col-sm-4 col-lg-2">
            <a href="{{ url('/collections/'. $categoryItem->slug) }}" class="cat-block">
                <figure>
                    <span>
                        <img src="{{ asset($categoryItem->image) }}" alt="Category image">
                    </span>
                </figure>

                <h3 class="cat-block-title mt-2">{{ $categoryItem->title }}</h3><!-- End .cat-block-title -->
            </a>
        </div>
        @endforeach
    </div>

</div>
<!-- End .cat-blocks-container -->