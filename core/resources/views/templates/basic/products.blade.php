@extends($activeTemplate . 'layouts.frontend')

@section('content')
    @include('popup')

    <section class="slider-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-11">
                    <div class="slider-wrapper">
                        <div class="slick-carousel">
                            <!-- Your slider images -->
                            <div><a href="#"><img src="https://acelogstore.com/assets/assets/images/slider/slide_1.png" alt="Slider Image 1"></a></div>
                            <div><a href="https://chat.whatsapp.com/IrZvCzG5STtDCUiRZzJPjn"><img src="https://acelogstore.com/assets/assets/images/slider/slide_2.png" alt="Slider Image 2"></a></div>
                            <div><a href="https://t.me/+fTn69pDmZuc1MjM0"><img src="https://acelogstore.com/assets/assets/images/slider/slide_3.png" alt="Slider Image 3"></a></div>
                            <div><a href="https://t.me/oprimeds"><img src="https://acelogstore.com/assets/assets/images/slider/slide_4.png" alt="Slider Image 4"></a></div>
                            <div><a href="#"><img src="https://logmarketplace.com/public/concept/assets/images/Logplace__3.png" alt="Slider Image 5"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
 <div><a href="https://oprimeboost.com" class="btn btn-primary w-100 mt-1"
                        id="btn-confirm">@lang('Boost Account')</a>
                    <br>
                    <br>
            <a href="https://oprimeverify.com" class="btn btn-danger w-100 mt-1"
                        id="btn-confirm">@lang('BUY USA Number for Verifications')</a>
                    </div>
<style>
    /* Add custom CSS styles */
    .product-description {
        font-weight: normal; /* Override bold font weight */
    }
</style>

<section class="catalog-section section-bg py-{{ @$categories->count() ? 120 : 60 }}" style="background-color: red;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-10 col-xl-11">
                @forelse($categories as $category)
                    @php
                        $products = $category->products;
                    @endphp
                    <br>
                    <div class="catalog-item-wrapper">
                        <div class="catalog-item-wrapper__header d-flex align-items-center justify-content-between">
                            <h5 class="title mb-0 btn btn-danger" style="width: 100%; background-color: black; color: white;">{{ __($category->name) }}</h5>
                        </div>
                        @foreach($products->take(10) as $product)
                            @include($activeTemplate.'partials/products')
                        @endforeach
                        <div class="text-center mt-3">
                            <a href="{{ route('category.products', ['search'=>request()->search, 'slug'=>slug($category->name), 'id'=>$category->id]) }}" class="btn btn-danger btn--sm" style="width: 100%;">@lang('View All')</a>
                            <br>
                        </div>
                    </div>
                @empty
                    <div class="empty-data text-center">
                        <div class="thumb">
                            <img src="{{ asset($activeTemplateTrue . 'images/not-found.png') }}">
                        </div>
                        <h4 class="title">@lang('No result found for "'.request()->search.'"')</h4>
                    </div>
                @endforelse
                {{ paginateLinks($categories) }}
            </div>
        </div>
    </div>
</section>

   

    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif

    <x-purchase-modal />
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slick-carousel').slick({
                dots: false, // Disable dots
                arrows: false, // Disable arrows
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true, // Enable autoplay
                autoplaySpeed: 3000 // Set autoplay speed in milliseconds
            });
        });
    </script>
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <style>
        /* Add your custom styles for the slider */
    </style>
@endpush
