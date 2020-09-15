@extends('layouts.buyer')
@section('content')


<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Bids

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>

                        <li class="breadcrumb-item active">Bids</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Bids</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Item Id</th>
                                    <th>Product</th>


                                    <th>Bid Status</th>
                                    <th>Date</th>
                                    <th>Bid Amount</th>
                                    {{-- <th>Action</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bids as $bid)

                                <tr>
                                    <td>{{$bid->product_id}}</td>
                                    <td>
                                        {{ $products->where('id',$bid->product_id)->first()->name }}
                                    </td>

                                    @if ($bid->status==0)
                                    <td><span class="badge badge-primary">Active</span></td>
                                    @else
                                    <td><span class="badge badge-success">Accepted</span></td>
                                    @endif



                                    <td>{{date('d-m-Y', strtotime($bid->created_at))}}</td>
                                    <td>{{$bid->bid_amount}}</td>
                                    <td><a href="/allitems" class="btn btn-air-danger">go to products</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>


@endsection