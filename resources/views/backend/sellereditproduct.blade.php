@extends('layouts.seller')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit Products

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>

                        <li class="breadcrumb-item active">Edit Product</li>
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
                        <h5>Edit Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="row product-adding">

                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" novalidate=""
                                    enctype="multipart/form-data" method="post" action="{{url('/productupdate/'.$product->id) }}">
                                    @csrf
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" name="name"
                                                id="validationCustom01" type="text" value="{{$product->name}}"
                                                required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02"
                                                type="number" required="" name="price" value="{{$product->price}}"
                                                required>
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
                                                    required> {{$product->desc}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Add Images
                                                :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02"
                                                type="file" name="images[]" required="" multiple>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="" class="btn btn-light">Delete Product</a>
                                    </div>
                                </form>

                                <div class="card-body">
                                    <div id="batchDelete" class="category-table media-table jsgrid"
                                        style="position: relative; height: auto; width: 100%;">
                                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                            <table class="jsgrid-table">
                                                <tr class="jsgrid-header-row">
                                                    <th class="jsgrid-header-cell jsgrid-align-center"
                                                        style="width: 50px;"><button type="button"
                                                            class="btn btn-danger btn-sm btn-delete mb-0 b-r-4">Images</button>
                                                    </th>
                                                    <th class="jsgrid-header-cell jsgrid-align-center"
                                                        style="width: 50px;">Image</th>
                                                    <th class="jsgrid-header-cell jsgrid-align-right"
                                                        style="width: 90px;">File Name</th>
                                                    <th class="jsgrid-header-cell" style="width: 100px;">Url</th>
                                                </tr>
                                                <tr class="jsgrid-filter-row" style="display: none;">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                    </td>
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                    </td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;">
                                                        <input type="number"></td>
                                                    <td class="jsgrid-cell" style="width: 100px;"></td>
                                                </tr>
                                                <tr class="jsgrid-insert-row" style="display: none;">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                    </td>
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                        <input type="file"></td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;">
                                                        <input type="number"></td>
                                                    <td class="jsgrid-cell" style="width: 100px;"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="jsgrid-grid-body">
                                            <table class="jsgrid-table">
                                                <tbody>
                                                    @foreach ($product->images as $image)
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell jsgrid-align-center"
                                                    style="width: 50px;"><a href="/imagedelete/{{$image->id}}" class="btn btn-air-danger" >Delete</a></td>
                                                        <td class="jsgrid-cell jsgrid-align-center"
                                                            style="width: 50px;"><img
                                                                src="/uploads/{{$image->image_name}}"
                                                                style="height: 50px; width: 50px;"></td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;">
                                                            {{$image->image_name}}</td>
                                                        <td class="jsgrid-cell" style="width: 100px;">
                                                            {{url('/uploads/'. $image->image_name)  }}</td>
                                                    </tr>
                                                    @endforeach





                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="jsgrid-load-shader"
                                            style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;">
                                        </div>
                                        <div class="jsgrid-load-panel"
                                            style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">
                                            Please, wait...</div>
                                    </div>
                                </div>
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