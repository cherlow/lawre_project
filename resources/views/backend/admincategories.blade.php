@extends('layouts.adminlayout')
@section('content')


<!-- Button trigger modal -->




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

            <button class="btn btn-primary float-right" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#exampleModal">Add Category</button>

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
                            <td class="digits"><a href="/delete/{{ $category->id }}" class="btn btn-primary"> Delete
                                </a></td>
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



    <!-- Create Modal Here-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/categories" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
                                name="name">
                            <small id="emailHelp" class="form-text text-muted">required since products belong to a
                                category.</small>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    {{-- create modal end here --}}

</div>

@endsection