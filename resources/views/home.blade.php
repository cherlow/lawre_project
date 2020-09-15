@extends('layouts.adminlayout')
@section('content')


<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
                            <small>Multikart Admin panel</small>
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
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Buyers</span>
                                <h3 class="mb-0"> <span class="counter">{{count($buyers)}}</span><small>
                                        Buyer Account(s)</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Sellers</span>
                                <h3 class="mb-0"> <span class="counter">{{count($sellers)}}</span><small> Seller
                                        Account(s) </small></h3>
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
                                <div class="align-self-center text-center"><i data-feather="box"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Products</span>
                                <h3 class="mb-0"><span class="counter">{{count($products)}}</span><small> Posted
                                        Product(s)</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-danger card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="navigation"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Bids</span>
                                <h3 class="mb-0"> <span class="counter">{{count($bids)}}</span><small> Bid(s)
                                    </small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h5>Buyer Accounts</h5>

                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Bid(s)</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $count=1;
                                @endphp

                                @foreach ($buyers as $buyer)
                                <tr>
                                <td>{{$count}}</td>
                                <td class="digits">{{$buyer->name}}</td>
                                <td class="font-danger">{{$buyer->email}}</td>
                                <td class="digits">{{count($buyer->bids)}}</td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                                @endforeach



                            </tbody>
                        </table>
                        <a href="order.html" class="btn btn-primary">View All Orders</a>
                    </div>

                </div>
            </div>






        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection