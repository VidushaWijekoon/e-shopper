<div class="container mt-4">
    <h2 class="title text-center mb-4">Explore Popular Categories</h2>
    <div class="cat-blocks-container mt-5">
        <div class="row">
            @foreach ($categories as $categoryItems)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ url('/products/' . $categoryItems->slug) }}" class="cat-block">
                        <figure>
                            <span>
                                <img src="{{ asset($categoryItems->image) }}" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{ $categoryItems->title }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
