@extends('layouts.seller')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h5>Add Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="row product-adding">

                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" novalidate=""
                                    enctype="multipart/form-data" method="post" action="{{url('/productsave')}}">
                                    @csrf
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" name="name"
                                                id="validationCustom01" type="text" required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02"
                                                type="number" required="" name="price" required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1"
                                                class="col-xl-3 col-sm-4 mb-0">Category</label>
                                            <select class="form-control digits col-xl-8 col-sm-7"
                                                id="exampleFormControlSelect1" name="category" required>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Add Description :</label>
                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <textarea id="editor1" name="editor1" cols="75" rows="4"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Images
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02"
                                                type="file" name="images[]" required="" multiple>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="reset" class="btn btn-light">Clear</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection