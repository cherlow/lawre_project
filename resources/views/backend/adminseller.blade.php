@extends('layouts.adminlayout')
@section('content')


    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Sellers
                                <small>Auctions</small>
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


        <div class="card">
            <div class="card-header">
                <h5>Seller Accounts</h5>

            </div>
            <div class="card-body">
                <div class="user-status table-responsive latest-order-table">
                    <table class="table table-bordernone">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Product(s)</th>
                                <th scope="col">Role</th>
                                <th scope="col">Joined At</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $count=1;
                            @endphp

                            @foreach ($sellers as $buyer)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td class="digits">{{ $buyer->name }}</td>
                                    <td class="font-danger">{{ $buyer->email }}</td>
                                    <td class="digits">{{ count($buyer->products) }}</td>
                                    <td class="digits"><span class="badge badge-success">Buyer</span></td>
                                    <td class="digits">{{ $buyer->created_at }}</td>
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

@endsection
