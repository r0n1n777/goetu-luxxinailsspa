@extends('layout/app')

@section('title', 'Promotions - Luxxi Nails & Spa')

@section('content')

<!-- six_box-->
<div class="container-fluid pt-5 mt-5" style="background-image: url('{{ asset('images/promotions/promo-bg.webp') }}'); background-size: cover; background-position: center; background-repeat; no-repeat;">
    <div class="row no-gutters">
        <div class="col-12 text-center py-3">
            <img src="{{ asset('images/promotions/3.webp') }}" class="rounded shadow w-50">
        </div>
    </div>
</div>
<!-- end six_box-->

<!-- six_box-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
            <div class="about_box">
                <div class="about_box_text pb-5">
                    <div class="title mb-2">
                        <h2><strong>BE UPDATED</strong></h2>
                    </div>
                    <p id="about-details" style="white-space: nowrap; font-size: 15px;" data-aos="zoom-out-up">
                    We offer gift certificates and promotions! <br>
                    Keep in touch with us always to get <br>
                    advantage of our promos and freebies!
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
            <img class="img-fluid shadow-sm" src="{{ asset('images/promotions/2.webp') }}" data-aos="fade-up" data-aos-duration="3000">
        </div>
    </div>
</div>

@endsection