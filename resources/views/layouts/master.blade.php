<!DOCTYPE html>
<html lang="en">




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Auctions">
    <meta name="keywords" content="Auctions">
    <meta name="author" content="Auctions">


    <title>Auctions - Buy and Sell anything</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/js/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="/js/dist/assets/owl.theme.default.min.css" />

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color1.css" media="screen" id="color">




    @toastr_css
</head>

<body>


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Auctions</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">

                            @guest

                                <li class=" mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>


                                    <a href="{{ url('/login') }}" style="color: black">My Account

                                    </a>

                                </li>

                            @else
                                {{-- <li class="mobile-wishlist"><a href="#"><i
                                            class="fa fa-bell" aria-hidden="true"></i></a>
                                </li> --}}

                                <li class=" mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href="/home">{{ auth()->user()->name }}
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">

                            <div class="brand-logo">
                                <a href="{{ url('/') }}">
                                    <h3>Auctions</h3>
                                </a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>

                                        </li>
                                        <li>
                                            <a href="{{ url('/allitems') }}">Available Products</a>

                                        </li>
                                        @guest
                                            <li>
                                                <a href="{{ url('/register') }}">Become A Seller</a>

                                            </li>
                                            <li class="mega" id="hover-cls"><a href="{{ url('/login') }}">Login

                                                </a>

                                            </li>
                                        @else
                                            <li class="mega" id="hover-cls"><a href="{{ url('/bids') }}">My Active Bids

                                                </a>

                                            </li>
                                            <li class="mega" id="hover-cls"><a href="{{ url('/home') }}"> Dashboard

                                                </a>

                                            </li>
                                        @endguest


                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        {{-- <li class="onhover-div mobile-search">
                                            <div><img src="../assets/images/icon/search.png" onclick="openSearch()"
                                                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    @yield('content')


    <!-- footer -->
    <footer class="footer-light">
        <div class="light-layout">
            <div class="container">
                <section class="small-section border-section border-top-0">

                </section>
            </div>
        </div>
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <h3>Auctions</h3>
                            </div>
                            <p>it is all about you! Auctions for consumer products, travel and related products. Come
                                and
                                join in the fun!</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    @foreach ($categories as $category)

                                        <li><a href="#">{{ $category->name }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Quick Links</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Available Items</a></li>
                                    <li><a href="#">My Favorites</a></li>
                                    <li><a href="#">My Bids</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>contact </h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Nchiru, Meru Kenya
                                    </li>
                                    <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@auctions.com</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> {{ Date('Y') }} Auctions</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->




















    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="../assets/js/jquery-ui.min.js"></script>

    <!-- exitintent jquery-->
    <script src="../assets/js/jquery.exitintent.js"></script>
    <script src="../assets/js/exit.js"></script>

    <!-- popper js-->
    <script src="../assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="../assets/js/slick.js"></script>

    <!-- menu js-->
    <script src="../assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="../assets/js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="../assets/js/fly-cart.js"></script>

    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="/js/dist/owl.carousel.min.js"></script>
    @toastr_js

    <script>
    </script>

    <script>
        $(window).on('load', function() {

        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }

        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
        });

    </script>

    @toastr_render

</body>




</html>
