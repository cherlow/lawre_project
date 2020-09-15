@extends('layouts.buyer')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Reviews

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>

                        <li class="breadcrumb-item active">Reviews</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">


        <div class="card">
            <div class="card-header">
                <h5>Leave a Review</h5>
                <div class="card-header-right">

                </div>
            </div>
            <div class="card-body">
                <div class="user-status table-responsive latest-order-table">
                    <table class="table table-bordernone">
                        <thead>
                            <tr>
                                <th scope="col">Item Id</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Bid Won on</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids as $bid)

                            <tr>
                                <td>{{$bid->product_id}}</td>
                                <td class="digits">{{$products->where('id',$bid->product_id)->first()->name}}</td>
                                <td class="font-danger">{{date('d-m-Y', strtotime($bid->updated_at))}}</td>
                                <td class="digits"><a href="{{url('/leavereview/'.$bid->id)}}"
                                        class="btn btn-air-danger"> Leave A Review </a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Previous Reviews</h5>
                <div class="card-header-right">

                </div>
            </div>
            <div class="card-body">

                <ul class="comment-section">
                    @foreach ($reviews as $review)
                    <li>
                        <div class="media"><img src="/avatar.jpeg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h6>{{ $users->where('id',$review->reviewrateable_id)->first()->name }} <span>(
                                        {{ \Carbon\Carbon::parse($review->created_at)->diffForhumans()  }} )</span></h6>
                                <p>{{$review->body}}</p>
                                <ul class="comnt-sec">
                                    
                                    <li><a href="javascript:void(0)">
                                            <div class="unlike">Seller Rating: ({{ $review->rating }})</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
                {{-- content her --}}
            </div>
        </div>

    </div>
</div>



@endsection