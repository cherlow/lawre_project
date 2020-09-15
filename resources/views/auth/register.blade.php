@extends('layouts.app')

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                  
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{ route('register') }}" >
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email"> Name</label>
                                <input type="text" class="form-control" name="name" id="fname" placeholder=" Name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="col-md-6">
                                <label for="review">Password</label>
                                <input type="password" name="password" class="form-control" id="review"
                                    placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="review"
                                    placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="seller" name="role" value="1" required>
                                <label for="seller">Seller</label><br>
                                <input type="radio" id="buyer" name="role" value="2" required>
                                <label for="buyer">Buyer</label><br>
                            </div>
                   


                        </div>
                        <button class="btn btn-primary" type="submit">create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection