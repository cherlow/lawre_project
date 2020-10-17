@extends('layouts.seller')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>Auction</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row products-admin ratio_asos">

            @foreach ($products as $product)



            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body product-box">
                        <div class="img-wrapper">
                            <div class="front">

                                @if (count($product->images)>1)
                                <a href="#"><img src="/uploads/{{$product->images[0]->image_name}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                @else
                                <a href="#"><img src="/uploads/{{$product->images->first()->image_name}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>

                             
                                @endif


                            </div>
                        </div>
                        <div class="product-detail">
                            <br>
                            <p>
                                <span>
                                    <a href="#">
                                        {{$product->name}}
                                    </a>

                                </span>
                                @if ($product->status==1)
                                <span class="float-right font-success">
                                    On Sale
                                </span>
                                @else
                                <span class="float-right font-primary">
                                    Sold
                                </span>
                                @endif

                            </p>

                            <p>
                                <span style="font-size:15px; font-weight:bold">
                                    ksh {{$product->price}}
                                </span>
                                <span class="float-right">
                                    {{count($product->bids)  }} bid(s)
                                </span>

                            </p>

                            <br>

                            <a href="/sellereditproducts/{{$product->id}}" class="btn btn-air-danger"> Edit </a>


                        </div>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection