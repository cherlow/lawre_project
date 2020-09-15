@extends('layouts.seller')
@section('content')


<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="box"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Products</span>
                                <h3 class="mb-0"> <span
                                        class="counter">{{count(auth()->user()->products)}}</span><small> Posted
                                        Products</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-primary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Reviews</span>
                                <h3 class="mb-0"><span class="counter">{{count(auth()->user()->ratings)}}</span><small>
                                        Account
                                        Reviews</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 xl-100">
                <div class="card height-equal" style="min-height: 559px;">
                    <div class="card-header">
                        <h5>My Products</h5>

                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive products-table">
                            <table class="table table-bordernone mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Number of bids</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (auth()->user()->products as $product)
                                    <tr>
                                        <td class="bd-t-none u-s-tb">
                                            <div class="align-middle image-sm-size"><img
                                                    class="img-radius align-top m-r-15 rounded blur-up lazyloaded"
                                            src="/uploads/{{$product->images[0]->image_name}}" alt=""
                                                    data-original-title="" title="">
                                                <div class="d-inline-block">
                                                <h6>{{ $product->name }} <span class="text-muted digits"></span></h6>
                                                </div>
                                            </div>
                                        </td>
                                        @if ($product->status ==1)
                                        <td>In Stock</td>
                                        @else
                                        <td>Sold</td>
                                        @endif
                                        
                                        <td>
                                        {{ count($product->bids) }}
                                        </td>
                                        <td class="digits">{{\Carbon\Carbon::parse($product->created_at)->diffForhumans() }}</td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>











        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection