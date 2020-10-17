@extends('layouts.master')
@section('content')


<!-- Home slider -->
<section class="p-0">
    <div class="slide-1 home-slider">
        <div>
            <div class="home  text-center">
                <img src="/sell.jpdg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>welcome to Auctions</h4>
                                    <h1>Sell Anything</h1>
                                    <a href="{{"/register"}}" class="btn btn-solid">start selling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home text-center">
                <img src="../assets/images/home-banner/2.jdpg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>welcome to Auctions</h4>
                                    <h1>Buy Anything</h1>
                                    <a href="{{"/register"}}" class="btn btn-solid">start shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->




<!-- Paragraph-->
<div class="title1 section-t-space">

    <h2 class="title-inner1">latest collection</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="product-para">
                <p class="text-center">Latest published products</p>
            </div>
        </div>
    </div>
</div>
<!-- Paragraph end -->


<!-- Product slider -->
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
                    @foreach ($products as $product)

                    <div class="product-box">
                        <div class="img-wrapper">

                            @if (count($product->images)>1)

                            <div class="front">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images[0]->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images[1]->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>

                            @else

                            <div class="front">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images->first()->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images->first()->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            @endif


                        </div>
                        <div class="product-detail">
                            {{-- <div class="rating"><i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i>
                                    </div> --}}
                            <a href="{{ url('/singleitem/' . $product->id) }}">
                                <br>
                                <h6>{{ $product->name }}</h6>
                            </a>
                            <h4>ksh {{ $product->price }}</h4>
                            <br>
                            <a href="{{ url('/singleitem/' . $product->id) }}" class="btn btn-dark"> View Details
                            </a>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product slider end -->




<!-- Paragraph-->
<div class="title1 section-t-space">

    <h2 class="title-inner1">Popular Items</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="product-para">
                <p class="text-center">Most Bidded Items</p>
            </div>
        </div>
    </div>
</div>
<!-- Paragraph end -->


<!-- Product slider -->
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
                    @foreach ($products as $product)

                    <div class="product-box">
                        <div class="img-wrapper">


                            @if (count($product->images)>1)

                            <div class="front">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images[0]->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images[1]->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>

                            @else

                            <div class="front">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images->first()->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                        src="/uploads/{{ $product->images->first()->image_name }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            @endif

                            {{-- <div class="front">
                                <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                src="/uploads/{{ $product->images[0]->image_name }}"
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                    src="/uploads/{{ $product->images[1]->image_name }}"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div> --}}

                    </div>
                    <div class="product-detail">
                        {{-- <div class="rating"><i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i>
                                    </div> --}}
                        <a href="{{ url('/singleitem/' . $product->id) }}">
                            <br>
                            <h6>{{ $product->name }}</h6>
                        </a>
                        <h4>ksh {{ $product->price }}</h4>
                        <br>
                        <a href="{{ url('/singleitem/' . $product->id) }}" class="btn btn-dark"> View Details
                        </a>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
    </div>
</section>
<!-- Product slider end -->













<section class="collection section-b-space ratio_square ">
    <div class="container">
        <div class="row partition-collection">

            @foreach ($categories as $category)

            <div class="col-lg-3 col-md-6">
                <div class="collection-block">

                    <div class="collection-content">
                        <h4>({{ count($category->products) }}) Items</h4>
                        <h3>{{ $category->name }}</h3>
                        <a href="{{"/allitems"}}" class="btn btn-outline">shop now !</a>
                    </div>
                </div>
            </div>
            @endforeach




        </div>

    </div>
</section>


@endsection