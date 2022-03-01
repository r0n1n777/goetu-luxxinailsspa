<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="themeColor" content="#000">
        <!-- site metas -->
        <title>@yield('title')</title>
        <meta name="keywords" content="Luxxi, Nails, Spa, Nail Enhancement, Pedicure, Manicure">
        <meta name="description" content="LUXXI Nails & Spa will ensure your utmost satisfaction through an attentive staff and professional environment. Your health and safety are our top priority, so we always maintain a clean, friendly and relaxing atmosphere.">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- owl css -->
        <link rel="stylesheet" href="{{ asset('css-template/owl.carousel.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css-template/style.css') }}">
        <!-- responsive-->
        <link rel="stylesheet" href="{{ asset('css-template/responsive.css') }}">
        <!-- awesome fontfamily -->
        <link rel="stylesheet" href="{{ asset('css-template/font-awesome.min.css') }}">
        <!--AOS CSS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader">
                <img src="{{ asset('images/loading.gif') }}">
            </div>
        </div>

        <div class="wrapper">
            <div id="content">

                <header class="fixed-top">
                    <div class="head-top pb-0" style="background-image: url('{{ asset('images/header-bg.webp') }}'); background-position: center; background-repeat: no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                    <div class="logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('images/logo.webp') }}" width="150px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="container">
                            <nav class="navigation navbar-expand-md navbar-dark">

                                <button class="bg-dark p-2 rounded text-primary navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-center" id="navbar-main">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link @if (request()->is('/')) text-primary font-weight-bold @endif" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if (request()->is('promotions')) text-primary font-weight-bold @endif" href="{{ route('promotions') }}">Promotions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if (request()->is('services')) text-primary font-weight-bold @endif" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if (request()->is('gallery')) text-primary font-weight-bold @endif" href="{{ route('gallery') }}">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if (request()->is('contact')) text-primary font-weight-bold @endif" href="{{ route('contact') }}">Contact us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.facebook.com/luxxinailsandspa" target="new">Booking Online</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>

                <div class="pt-5 mt-5">
                    @yield('content')
                    
                    <div id="online" class="yoga">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title pb-2" data-aos="fade-up" data-aos-duration="1000">
                                        <h2><strong class="black"> Follow us on Social Media!</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <footer>
                    <div class="footer mt-2">
                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a class="btn btn-lg text-white" href="https://www.facebook.com/luxxinailsandspa" target="new">
                                            <x-feathericon-facebook class="text-primary"/> Like us on Facebook
                                        </a>
                                        <a class="btn btn-lg text-white" href="https://www.instagram.com/luxxi_nailsandspa" target="new">
                                            <x-feathericon-instagram class="text-primary"/> Follow us on Instagram
                                        </a>
                                        <a class="btn btn-lg text-white" href="https://www.google.com/search?q=luxxi+nails+%26+spa+4702+jfk+blvd+n+little+rock+arizona+72116&rlz=1C1CHBF_enPH961PH961&sxsrf=APq-WBuo2waPF-YqoNscNB1Y3lUK8YlHIQ%3A1645214890391&ei=qvwPYsCpF9HZz7sP4aCbgAs&ved=0ahUKEwjApvuIh4r2AhXR7HMBHWHQBrAQ4dUDCA4&uact=5&oq=luxxi+nails+%26+spa+4702+jfk+blvd+n+little+rock+arizona+72116&gs_lcp=Cgdnd3Mtd2l6EAM6BwgAEEcQsAM6BQghEKABOgUIIRCSAzoECCEQFToHCCEQChCgAUoECEEYAEoECEYYAFDgA1jevgFgucABaARwAXgAgAF5iAH0HpIBBTI5LjEzmAEAoAEByAEIwAEB&sclient=gws-wiz#lrd=0x87d2bdda91dbefc5:0x4b202d344e42c17a,1" target="new">
                                            <x-feathericon-star class="text-primary"/><x-feathericon-star class="text-primary"/><x-feathericon-star class="text-primary"/><x-feathericon-star class="text-primary"/><x-feathericon-star class="text-primary"/> Rate us on Google
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" data-aos="zoom-out-up">
                                        <p>
                                            <span style="font-weight:bold; font-size: 20px; text-transform: uppercase;">
                                                Business Address
                                            </span>
                                            <br><x-feathericon-map-pin/> 4702 JFK Blvd,
                                            <br> N. Little Rock AZ 72116
                                        </p>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" data-aos="zoom-out-up">
                                        <p>
                                            <span style="font-weight:bold; font-size: 20px; text-transform: uppercase;">
                                                Business Contact
                                            </span>
                                            <br><x-feathericon-phone/> (501) 772-9740
                                            <br><x-feathericon-globe/> www.luxxinail.com
                                        </p>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" data-aos="zoom-out-up">
                                        <p>
                                            <span style="font-weight:bold; font-size: 20px; text-transform: uppercase;">
                                                Business Hours
                                            </span>
                                            <br><x-feathericon-clock/> Monday - Saturday: <b>9:00AM - 7:00PM</b>
                                            <br><x-feathericon-clock/> Sunday: <b>10:00AM - 6:00PM</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div class="overlay"></div>

        <div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="promotion" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="font-weight-bold">Limited Promo</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <x-feathericon-x/>
                        </button>
                    </div>
                    <div class="modal-body p-3 bg-dark">
                        <img src="{{ asset('images/promotions/1.webp') }}" class="img-fluid">
                    </div>
                    <div class="modal-footer bg-primary"></div>
                </div>
            </div>
        </div>

        <!-- Javascript files-->
        <script src="{{ asset('js-template/jquery.min.js') }}"></script>
        <script src="{{ asset('js-template/popper.min.js') }}"></script>
        <script src="{{ asset('js-template/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js-template/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js-template/custom.js') }}"></script>
        <script src="{{ asset('js-template/jquery.mCustomScrollbar.concat.min.js') }}"></script>

        <script src="{{ asset('js-template/jquery-3.0.0.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

        <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                });

                var image = 'images/maps-and-flags.png';
                var beachMarker = new google.maps.Marker({
                    position: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                    map: map,
                    icon: image
                });
            }
        </script>
        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
        <!-- end google map js -->
        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>

        @if (request()->is('/') || request()->is('services'))
        <script>
        $(document).ready(function(){
            $('#promotion').modal('show');
        });
        </script>
        @endif
    </body>

</html>