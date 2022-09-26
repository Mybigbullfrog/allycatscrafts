@extends('layouts.master')
@section('title', 'Products')
@section('content')
    <p class="shop-results space-left">Showing <strong>1-12</strong> of <strong>36</strong> items.
        <span class="pull-right space-right">
                <select class="selectpicker">
                    <optgroup label="Sort By:">
                        <option>Default</option>
                        <option>Popularity</option>
                        <option>Newness</option>
                        <option>Rating</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                    </optgroup>
                </select>
            </span>
    </p>
    <ul class="row shop list-unstyled" id="grid">
        <!-- product -->
        @foreach ($books as $book)
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["mens"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">{{ $book->price }}</h5>
                    <a href="{{ route('product') }}" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="{{ $book->image_url }}" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="{{ route('product') }}" class="view-btn" data-toggle="tooltip" title="View product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="{{ route('shopping-cart') }}" class="cart-btn" data-toggle="tooltip"
                           title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">{{ $book->title }}</h5>
                        {{--Used pages_count and not category--}}
                        <p class="product-category">{{ $book->pages_count }} pages</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
        @endforeach
        <!-- / product -->
        <!-- sizer -->
        <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
        <!-- / sizer -->
    </ul> <!-- / products -->
@endsection

