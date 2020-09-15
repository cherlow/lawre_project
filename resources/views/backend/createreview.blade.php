@extends('layouts.buyer')
@section('content')



<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Create A review

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>

                        <li class="breadcrumb-item active">Create A Review</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        {{-- contentn here  --}}

    <form class="theme-form" action="/reviewsave/{{$bid->id}}" method="post">
        @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="media">

                        <div class="media-body ml-3">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="name">Service Rating(1-5)</label>
                    <input type="number" name="service" class="form-control" id="name" placeholder="Service Rating "
                        required="" max="5" min="0">
                </div>
                <div class="col-md-6">
                    <label for="email">Quality Rating(1-5)</label>
                    <input type="number" name="quality" class="form-control" id="email" placeholder="Quality Rating" required="" max="5" min="0">
                </div>
                <div class="col-md-6">
                    <label for="email">Friendly Rating(1-5)</label>
                    <input type="number" class="form-control" name="friendly" name="friendly" id="email" placeholder="Friendly Rating" required="" min="0" max="5">
                </div>

                <div class="col-md-6">
                    <label for="email">Pricing Rating(1-5)</label>
                    <input type="number" class="form-control" name="Pricing" id="email" placeholder="Pricing Rating" required="" min="0" max="5">
                </div>

                <div class="col-md-6">
                    <label for="email">Seller Rating(1-5)</label>
                    <input type="number" name="Seller" class="form-control" id="email" placeholder="Seller Rating" required="" min="0" max="5">
                </div>

                <div class="col-md-6">
                    <label for="review">Review Title</label>
                    <input type="text" name="title" class="form-control" id="review" placeholder="Enter your Review Subject"
                        required="">
                </div>
                <div class="col-md-12">
                    <label for="review">Review </label>
                    <textarea name="review" class="form-control" placeholder="Wrire Your Testimonial Here"
                        id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="col-md-12">
                    <br>
                    <button class="btn btn-solid" type="submit">Submit YOur Review</button>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection