<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>Auctions - Sell and Buy Anything</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper"><a href="{{url('/')}}">
                            <h2>Auction</h2>
                        </a></div>
                </div>
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">



                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img
                                class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded"
                                src="/avatar.jpeg" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span
                                    class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            {{-- <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li> --}}



                            <li>
                                <a href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                        data-feather="log-out"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="{{url('/')}}">
                            <h2>Auctions</h2>
                        </a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle lazyloaded blur-up" src="/avatar.jpeg" alt="#">
                        </div>
                        <h6 class="mt-3 f-14">{{auth()->user()->name}}</h6>
                        <p>Admin</p>
                    </div>
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="{{url('/home')}}"><i
                                    data-feather="home"></i><span>Dashboard</span></a></li>

                        <li><a class="sidebar-header" href="{{"/adminbuyers"}}"><i
                                    data-feather="users"></i><span>Buyers</span></a></li>
                        <li><a class="sidebar-header" href="{{"/adminsellers"}}"><i
                                    data-feather="user"></i><span>Sellers</span></a></li>

                        <li><a class="sidebar-header" href="{{"/adminproducts"}}"><i
                                    data-feather="box"></i><span>Products</span></a></li>
                        <li><a class="sidebar-header" href="{{"/admincategories"}}"><i
                                    data-feather="tag"></i><span>Categories</span></a></li>




                        {{-- <li><a class="sidebar-header" href="/datatables"><i
                                    data-feather="bar-chart"></i><span>Charts</span></a></li> --}}



                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            @yield('content')


            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>

    </div>

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="../assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="../assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="../assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!--sparkline chart js-->
    <script src="../assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="../assets/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="../assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="../assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="../assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="../assets/js/admin-script.js"></script>

</body>

</html>