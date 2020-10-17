@extends('layouts.master')
@section('content')


<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>collection</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">collection</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- section start -->
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Categories</h3>

                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach ($categories as $category)

                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <a href="{{ "/category/$category->id" }}"
                                            class="btn btn">{{ $category->name }}</a>
                                    </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                            class="fa fa-filter" aria-hidden="true"></i> Filter</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">

                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    {{-- <div
                                                            class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="../assets/images/icon/2.png" alt=""
                                                                        class="product-2-layout-view"></li>
                                                                <li><img src="../assets/images/icon/3.png" alt=""
                                                                        class="product-3-layout-view"></li>
                                                                <li><img src="../assets/images/icon/4.png" alt=""
                                                                        class="product-4-layout-view"></li>
                                                                <li><img src="../assets/images/icon/6.png" alt=""
                                                                        class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div> --}}


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            @foreach ($products as $product)

                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">

                                                        @if (count($product->images)>1)

                                                        <div class="front">
                                                            <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                                                    src="/uploads/{{ $product->images[0]->image_name }}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="back">
                                                            <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                                                    src="/uploads/{{ $product->images[1]->image_name }}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt=""></a>
                                                        </div>

                                                        @else

                                                        <div class="front">
                                                            <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                                                    src="/uploads/{{ $product->images->first()->image_name }}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="back">
                                                            <a href="{{ url('/singleitem/' . $product->id) }}"><img
                                                                    src="/uploads/{{ $product->images->first()->image_name }}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt=""></a>
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
                                                    <div>
                                                        {{-- <div class="rating">
                                                                        <i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i>
                                                                    </div><a href="product-page(no-sidebar).html">
                                                                        --}}
                                                        <br>
                                                        <h6>{{ $product->name }}</h6>
                                                        <br>
                                                        </a>
                                                        <p>{{ $product->desc }}</p>
                                                        <h4>ksh {{ $product->price }}</h4>
                                                        <br>
                                                        <a href="{{ url('/singleitem/' . $product->id) }}"
                                                            class="btn btn-dark"> View Details </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach







                                    </div>
                                </div>
                                <br>
                                <div class="prosduct-pagination">
                                    <div class="s-paggination-block">




                                        {{ $products->links() }}


                                        {{-- <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5>
                                                    </div>
                                                </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- section End -->


@endsection