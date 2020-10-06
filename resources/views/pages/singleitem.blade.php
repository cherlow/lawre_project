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





    <section class="product-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 py-3 order-2 order-lg-1">

                    <div class="product-slick">
                        @foreach ($product->images as $image)
                            <div><img src="/uploads/{{ $image->image_name }}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        @endforeach


                    </div>


                </div>
                <div class="d-flex col-lg-6 col-xl-5 pl-lg-5 mb-5 order-1 order-lg-2">
                    <div>
                        <ul class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ '/allitems' }}">Products</a></li>
                            <li class="breadcrumb-item active">{{ $product->name }}</li>
                        </ul>
                        <h2 class="mb-4">{{ $product->name }}</h2>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 font-weight-light mb-0">Ksh: {{ $product->price }}</li>

                            </ul>

                        </div>
                        <p class="mb-4 text-muted">{{ $product->desc }}</p>
                        <form action="/productbid/{{ $product->id }}" method="post">
                            @csrf
                            <div class="row">



                                <div class="col-12 col-lg-6 detail-option mb-5">
                                    <label class="detail-option-heading font-weight-bold">Bid Amount
                                        <span>(required)</span></label>
                                    <input class="form-control detail-quantity" name="quantity" type="number"
                                        value="{{ $product->price }}">
                                </div>
                            </div>
                            <ul class="list-inline">



                                @guest


                                    <li class="list-inline-item">
                                        <a class="btn btn-dark btn-lg mb-1" href="{{ url('/login') }}">Login</a>
                                    </li>

                                @else

                                    <li class="list-inline-item">
                                        <button class="btn btn-dark btn-lg mb-1" type="submit"> Place Bid</button>
                                    </li>
                                @endguest



                            </ul>
                        </form>
                        <br>
                        <div class="border-product">
                            <h3 class="product-title">Seller Info</h3>

                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="/avatar.jpeg" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->user->name }}</h5>
                                            <p class="card-text">
                                            <ul class="list-group">
                                                <li class="list-group-item">Name: {{ $product->user->name }}</li>
                                                <li class="list-group-item">Email: {{ $product->user->email }}</li>
                                                <li class="list-group-item">Items Sold:
                                                    {{ count($product->user->products) }} item(s)</li>
                                                <li class="list-group-item">User Rating:
                                                    {{ $product->user->averageRating(1)[0] }}</li>
                                                <li class="list-group-item">Service Rating:
                                                    {{ $product->user->averageCustomerServiceRating(1)[0] }}</li>
                                                <li class="list-group-item">Quality Rating:
                                                    {{ $product->user->averageQualityRating(1)[0] }}</li>

                                            </ul>
                                            </p>

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
                            <p>{{ $product->desc }}</p>
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
                                                                        {{ \Carbon\Carbon::parse($rating->created_at)->diffForhumans() }}
                                                                        )</span></h6>
                                                                <p><b>Rated:</b> {{ $rating->rating }}</p>
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


                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Buyer</th>
                                                <th scope="col">Bid Status</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Bid Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count=1;
                                            @endphp
                                            @foreach ($product->bids as $bid)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $bid->user->name }}</td>


                                                    <td><span class="badge badge-success">Active</span></td>



                                                    <td>{{ \Carbon\Carbon::parse($bid->created_at)->diffForhumans() }}</td>
                                                    <td> <b>Ksh.</b> {{ $bid->bid_amount }}</td>

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
