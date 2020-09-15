@extends('layouts.seller')
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
                                <h6>{{ $users->where('id',$review->author_id)->first()->name }} <span>(
                                        {{ \Carbon\Carbon::parse($review->created_at)->diffForhumans()  }} )</span></h6>
                                <p>{{$review->body}}</p>
                                <ul class="comnt-sec">

                                    <li><a href="javascript:void(0)">
                                            <div class="unlike"> Rating: ({{ $review->rating }})</div>
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