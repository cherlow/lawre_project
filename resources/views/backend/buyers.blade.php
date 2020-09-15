@extends('layouts.buyer')
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
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="navigation"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Bids</span>
                                <h3 class="mb-0"> <span class="counter">{{count(auth()->user()->bids)}}</span><small>
                                        Total Bids
                                    </small></h3>
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
                                <div class="align-self-center text-center"><i data-feather="box"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Bids Won</span>
                                <h3 class="mb-0"> <span
                                        class="counter">{{count(auth()->user()->bids->where('status',1))}}</span><small>
                                        Bids
                                        Won</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Latest Bids</h5>
                        <div class="card-header-right">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Bid ID</th>
                                        <th scope="col">Bid Amount</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (auth()->user()->bids->take(5) as $bid)
                                        
                                    <tr>
                                        <td>{{ $bid->id }}</td>
                                    <td class="digits"><b>ksh</b> {{$bid->bid_amount}}</td>
                                    <td class="font-danger">{{$bid->product->name}}</td>
                                    @if ($bid->status==0)
                                    <td class="digits">Active</td>
                                    @else
                                    <td class="digits">Won</td>
                                        
                                    @endif    
                                   
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <a href="/bids" class="btn btn-primary">View All Bids</a>
                        </div>

                    </div>
                </div>
            </div>









        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection