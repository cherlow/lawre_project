@extends('layouts.master')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- section start -->
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slick">
                        @foreach ($product->images as $image)
                        <div><img src="/uploads/{{$image->image_name}}" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                                @foreach ($product->images as $image)
                                <div><img src="/uploads/{{$image->image_name}}" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rtl-text">
                    <div class="product-right">
                        <h2>{{$product->name}}</h2>

                        <h3>ksh {{$product->price}}</h3>

                        <div class="product-description border-product">
                            <form action="/productbid/{{$product->id}}" method="post">
                                @csrf
                                <h6 class="product-title">Bid Amount</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="number" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                                <br>
                                @guest
                                <div class="product-buttons"><a href="{{url('/login')}}" class="btn btn-solid">Login To
                                        Bid</a>

                                </div>

                                @else
                                <div class="product-buttons">
                                    <button type="submit" class="btn btn-solid">Place
                                        Bid</button>
                                </div>
                                @endguest

                            </form>
                        </div>
                        {{-- <div class="product-buttons"><a href="#" data-toggle="modal" data-target="#addtocart"
                                class="btn btn-solid">add to favourites</a> <a href="#" class="btn btn-solid">Place
                                Bid</a>
                        </div> --}}
                        {{-- <div class="border-product">
                            <h6 class="product-title">product details</h6>
                        <p>{{ $product->desc}}</p>
                    </div> --}}

                    <div class="border-product">
                        <h6 class="product-title">Seller Info</h6>

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/avatar.jpeg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->user->name}}</h5>
                                        <p class="card-text">
                                            <ul class="list-group">
                                                <li class="list-group-item">Name: {{$product->user->name}}</li>
                                                <li class="list-group-item">Email: {{$product->user->email}}</li>
                                                <li class="list-group-item">Items Sold:
                                                    {{count($product->user->products)}} item(s)</li>
                                                <li class="list-group-item">User Rating:
                                                    {{$product->user->averageRating(1)[0]}}</li>
                                                <li class="list-group-item">Service Rating:
                                                    {{$product->user->averageCustomerServiceRating(1)[0]}}</li>
                                                <li class="list-group-item">Quality Rating:
                                                    {{$product->user->averageQualityRating(1)[0]}}</li>

                                            </ul>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="border-product">
                        <h6 class="product-title">Bid info</h6>
                        <div class="timr">

                            <p></p> Number of Bids: &nbsp; <b>{{count($product->bids)}}</b></p>
                            <p></p> Maximum Bid: &nbsp; <b>{{ count($product->bids) }}</b></p>
                            <p></p> Minimum Bid &nbsp; <b>{{count($product->bids)}}</b></p>
                            <p></p> Average Bid &nbsp; <b>{{count($product->bids)}}</b></p>
                            <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span>
                                </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span>
                                </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span>
                                </span><span>57 <span class="timer-cal">Sec</span></span>
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Section ends -->

<!-- product-tab starts -->
<section class="tab-product m-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home"
                            role="tab" aria-selected="true">Description</a>
                        <div class="material-border"></div>
                    </li>


                    <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review"
                            role="tab" aria-selected="false">Seller Reviews</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="review-top-tab2" data-toggle="tab" href="#top-bid"
                            role="tab" aria-selected="false">Active Bids</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <p>{{$product->desc}}</p>
                    </div>


                    <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                        <section class="section-b-space blog-detail-page review-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="comment-section">
                                            @foreach ($product->user->ratings as $rating)
                                            <li>

                                                <div class="media"><img src="/avatar.jpeg"
                                                        alt="Generic placeholder image">

                                                    <div class="media-body">
                                                        <h6>{{ $users->find($rating->author_id)->name }} <span>(
                                                                {{\Carbon\Carbon::parse($rating->created_at)->diffForhumans() }}
                                                                )</span></h6>
                                                        <p><b>Rated:</b> {{$rating->rating}}</p>
                                                        <p>{{ $rating->body }}
                                                        </p>

                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach




                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade  " id="top-bid" role="tabpanel" aria-labelledby="top-home-tab2">
                        <div class="card">
                            <div class="card-header">
                                <h5>People Bidding</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>

                                            <th>Buyer</th>
                                            <th>Bid Status</th>
                                            <th>Date</th>
                                            <th>Bid Amount</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $count=1;
                                        @endphp
                                        @foreach ($product->bids as $bid)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>{{$bid->user->name}}</td>


                                            <td><span class="badge badge-success">Active</span></td>



                                            <td>{{\Carbon\Carbon::parse($bid->created_at)->diffForhumans() }}</td>
                                            <td> <b>Ksh.</b> {{$bid->bid_amount}}</td>

                                        </tr>

                                        @php
                                        $count++;
                                        @endphp
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->

@endsection