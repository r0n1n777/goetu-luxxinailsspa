@extends('layout/app')

@section('title', 'Home - Luxxi Nails & Spa')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" style="visibility:hidden;">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="width: 100vw; height: 700px; background-image: url('{{ asset('images/carousel/4.webp') }}'); background-position:center; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="carousel-caption relative d-f">
                    <a href="https://www.facebook.com/luxxinailsandspa" target="new">
                        <x-feathericon-calendar/> Book Online
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="width: 100vw; height: 700px; background-image: url('{{ asset('images/carousel/3.webp') }}'); background-position:center; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="carousel-caption relative d-f">
                    <a href="https://www.facebook.com/luxxinailsandspa" target="new">
                        <x-feathericon-calendar/> Book Online
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="width: 100vw; height: 700px; background-image: url('{{ asset('images/carousel/1.webp') }}'); background-position:center; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="carousel-caption relative d-f">
                    <a href="https://www.facebook.com/luxxinailsandspa" target="new">
                        <x-feathericon-calendar/> Book Online
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="width: 100vw; height: 700px; background-image: url('{{ asset('images/carousel/2.webp') }}'); background-position:center; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="carousel-caption relative d-f">
                    <a href="https://www.facebook.com/luxxinailsandspa" target="new">Book Online</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="about" class="about pb-5" style="background-image: url('{{ asset('images/about-bg.webp') }}'); background-position:center; background-size: cover; background-repeat: no-repeat;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
                <div class="about_box shadow-sm">
                    <div class="about_box_text pb-2">
                        <div class="title mb-3" data-aos="zoom-in-up">
                            <h2><strong>ABOUT US</strong></h2>
                        </div>
                        <p id="about-details" data-aos="zoom-in-up">
                            Welcome to LUXXI Nails & Spa! Make yourself at home and enjoy a delightful experience with us. Our goal is to make you feel pampered, relaxed and comfortable, as we want you to leave satisfied. Treat yourself to one of our many services while indulging in the ultimate luxury of our exquisite salon. We believe in only providing you the best quality, so we guarantee all tools used for pedicure and manicure services are new and disposable!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 pppp">
                <div class="about_box_img">
                    <img src="{{ asset('images/about.webp') }}" alt="#" id="about-img" style="object-fit: cover;" data-aos="fade-up" data-aos-duration="3000" class="image-fluid shadow rounded" />
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title py-5" data-aos="fade-up" data-aos-duration="3000">
                    <h2 style="font-family: 'Dancing Script', cursive;"><strong class="black"> Explore More</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/1.webp') }}" alt="#" style="object-fit: cover;"data-aos="fade-up" data-aos-duration="3000"/></figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/2.webp') }}" alt="#" style="height: auto;object-fit: cover;" data-aos="fade-up" data-aos-duration="3000" /></figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/3.webp') }}" alt="#" style="object-fit: cover;"data-aos="fade-up" data-aos-duration="3000" /></figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/4.webp') }}" alt="#" style="object-fit: cover;"data-aos="fade-up" data-aos-duration="3000"/></figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/5.webp') }}" alt="#" style="height: auto;object-fit: cover;" data-aos="fade-up" data-aos-duration="3000" /></figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure class="p-1"><img src="{{ asset('images/explore/6.webp') }}" alt="#" style="object-fit: cover;"data-aos="fade-up" data-aos-duration="3000" /></figure>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center p-5 bg-black">
            <div class="btn-temp pb-3">
                <a href="{{ route('gallery') }}">
                    <h1 class="text-white">See More Photos</h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.314317594493!2d-92.25744454947419!3d34.79803328031343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d2bdad2f3cc399%3A0x78d1fc106d30da58!2s4702%20John%20F%20Kennedy%20Blvd%2C%20North%20Little%20Rock%2C%20AR%2072116%2C%20USA!5e0!3m2!1sen!2sph!4v1645968241517!5m2!1sen!2sph" height="400" style="border:0; width: 100vw;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection