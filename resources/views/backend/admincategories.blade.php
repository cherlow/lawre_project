@extends('layouts.adminlayout')
@section('content')


    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Categories
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
                <h5>Categories</h5>

                <button class="btn btn-primary float-right">Add Category</button>

            </div>
            <div class="card-body">
                <div class="user-status table-responsive latest-order-table">
                    <table class="table table-bordernone">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $count=1;
                            @endphp

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td class="digits">{{ $category->name }}</td>

                                    <td class="digits">{{ $category->created_at }}</td>
                                    <td class="digits">{{ $category->created_at }}</td>
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


        {{-- <div id="chart" style="height: 300px;"></div>

        <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sample_chart')",
      });
    </script> --}}

    </div>

@endsection
