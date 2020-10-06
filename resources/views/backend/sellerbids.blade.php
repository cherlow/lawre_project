@extends('layouts.seller')
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



                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Bid Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Bid Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bids as $product)
                                        @foreach ($product->bids as $bid)

                                            <tr>
                                                <td>{{ $bid->product_id }}</td>
                                                <td>
                                                    {{ $product->name }}
                                                </td>

                                                @if ($bid->status == 0)
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                @else
                                                    <td><span class="badge badge-success">Accepted</span></td>
                                                @endif



                                                <td>{{ date('d-m-Y', strtotime($bid->created_at)) }}</td>
                                                <td>{{ $bid->bid_amount }}</td>
                                                @if ($bid->status == 0)
                                                    <td><a href="/acceptbid/{{ $bid->id }}"
                                                            class="btn btn-air-danger">Accept</a></td>
                                                @else
                                                    <td><a href="/acceptbid/{{ $bid->id }}"
                                                            class="btn btn-air-danger disabled">Accept</a></td>
                                                @endif

                                            </tr>
                                        @endforeach
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
