<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ingenioushubs.com/Quarantine-html/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:56:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quarantine - Medical, Doctor and Hospital Theme</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body data-spy="scroll" data-target="#nav-part" data-offset="90">

    <!--=============
    Preloader Part HTML Start
    ===================-->
    <div id="preloader">
        <div id="loading-center">
            <img src="{{ asset('assets/images/preloader.gif') }}" alt="">
        </div>
    </div>
    <!--=============
    Preloader Part HTML End
    ===================-->
    <!-- ===================
       back to top start 
     =================== -->
    <a href="#" id="back-top-btn">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ===================
       back to top End 
     =================== -->

    <!--===================
    Navbar Part HTML Start
    =====================-->
    <header>
        <nav id="nav-part" class="navbar header-nav sticky-top navbar-expand-md">
            <div class="container p-0">
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" width="20px" class="img-fluid" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="nav-link active" href="#banner">Home<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Corona </a></li>
                        <li class="nav-item"><a class="nav-link" href="#symptoms">Symptoms</a></li>
                        <li class="nav-item"><a class="nav-link" href="#prevention">Prevention</a></li>
                        <li class="nav-item"><a class="nav-link" href="#doctors">Doctors</a></li>
                        <li class="dropdown nav-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu maindrop_menu">
                                <li><a href="index-medical.html">Home version-2</a></li>
                                <li><a href="blog-style-1.html">Blog Style-1</a></li>
                                <li><a href="blog-style-2.html">Blog Style-2</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="error-page.html">404 page</a></li>
                            </ul>
                        </li>
                    </ul> -->

                    <div class="btn-bar">
                        <a href="{{url('/')}}" class="">Search Another</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--=========================
        Breadcrum Part HTML Start
        =======================-->
    <section id="breadcrun" class="breadcrun-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="bread-inner">
                        <h1 class="heading-font">OXYhelp</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">
                                    <p>Home</p>
                                </a>
                            </li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>
                                <p>{{$search_text}}</p>
                            </li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>
                                <p>{{$type}}</p>
                            </li>
                        </ul>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====================
        Breadcrum Part HTML End
    ======================-->

    <!--==================
    Our Services Part HTML Start
    ===================-->

    <section id="services" class="services ser-page section" style="padding-top: 30px!important;">
        <div class="container">
            <div class="row">
                @php
                $i=1;
                @endphp
                @foreach($data as $row)
                <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center align-item-center">
                    <div class="ser-inner" style="width: 350px;">
                        <div class="number-ser">
                            <i class="flaticon-pill"></i>
                            <h5>{{$i}}</h5>
                        </div>
                        <h3>{{substr($row->title,0,20)}}</h3>
                        <p>{{$row->phone_1}}</p>
                        <p>{{$row->last_verified_on}}</p>
                        <div class="cont-txt">
                            <ul class="d-flex justify-content-around align-item-center">
                                <li><a href="vote/{{'upvote'}}/{{$row->Id}}/{{$type}}"><i class="fa fa-thumbs-up" style="color: forestgreen;"></i></a></li>
                                <li><a href="vote/{{'downvote'}}/{{$row->Id}}/{{$type}}"><i class="fa fa-thumbs-down" style="color: red;"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                @php
                $i+=1;
                @endphp
                @endforeach

            </div>

        </div>
    </section>

    <!--====================
    Contact Part HTML Start
    ======================-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="content-text">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cont-logo">
                            <a href="#"><img src="{{ asset('assets/images/logo.png') }}" width="20px" alt="footer logo"></a>
                        </div>
                        <div class="cont-txt">
                            <p class="cont-gap">Lorem ipsum dolor sit amet, consectetur adipisng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-12">
                        <div class="cont-center">
                            <h3>Important Links</h3>
                        </div>

                        <div class="c-text-menu1">
                            <ul>
                                <li><a href="#">WHO Information </a></li>
                                <li><a href="#">Covid-19 Wikipedia</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">CNN News</a></li>
                                <li><a href="#">Worldometer Info</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-12">
                        <div class="cont-center">
                            <h3>Privacy & TOS</h3>
                        </div>

                        <div class="c-text-menu1">
                            <ul>
                                <li><a href="#">Advertiser Agreement</a></li>
                                <li><a href="#">Acceptable Use Policy</a></li>
                                <li><a href="blog_details.html">Privacy Policy</a></li>
                                <li><a href="blog_details.html">Technology Privacy</a></li>
                                <li><a href="#">Developer Agreement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="cont-center">
                            <h3>Contact us</h3>
                        </div>
                        <div class="c-text-location">
                            <div class="row">
                                <div class="col-lg-3  col-md-3">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe-americas"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9  col-md-9">
                                    <div class="address">

                                        <p>1234, Park Street Avenue, NY, America - 6658</p>

                                        <p>+880 1234 567 890<br>
                                            +880 0987 654 321</p>

                                        <p>www.quarantine.com<br>
                                            www.coronavirus.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright © 2020. All rights reserved by <a href="#">Designer</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--===========================
        Contact Part HTML End
    ============================-->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>


<!-- Mirrored from ingenioushubs.com/Quarantine-html/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:56:16 GMT -->

</html>