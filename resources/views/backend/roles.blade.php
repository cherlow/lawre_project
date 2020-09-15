@extends('layouts.adminlayout')
@section('content')




<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Roles

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{url('home')}}l"><i data-feather="home"></i></a>

                        </li>

                        <li class="breadcrumb-item active">Roles</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->



    <div class="col-xl-6 xl-100">
        <div class="card">
            <div class="card-header">
                <h5>User Roles</h5>

                <div class="card-header-right">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test"
                            data-target="#exampleModal">Add Role</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Role</h5>
                                        <button class="close" type="button" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" method="post" action="{{url('role')}}">
                                            @csrf
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Role Name :</label>
                                                    <input name="role" class="form-control" id="validationCustom01"
                                                        type="text" required>
                                                </div>

                                            </div>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="user-status table-responsive latest-order-table">
                    <table class="table table-bordernone">
                        <thead>
                            <tr>
                                <th scope="col">Role ID</th>
                                <th scope="col">Role</th>
                                <th scope="col">User Count</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{ auth()->user()->role }}
                            @foreach ($roles as $role)
                            <tr>
                                    <td>{{$role->id}}</td>
                            <td class="digits">{{$role->name}}</td>
                                    <td class="font-danger">10</td>
    
                                    </tr>
                            @endforeach
                       
                              





                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>

</div>

@endsection