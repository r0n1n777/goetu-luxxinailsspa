@extends('layout/app')

@section('title', 'Gallery - Luxxi Nails & Spa')

@section('content')
<img style="width: 100vw; height: 350px; object-fit: cover; margin-top: 7em;" class="first-slide shadow-sm" src="images/gallery-banner.jpg" alt="First slide">

<div id="online" class="yoga">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pb-2" data-aos="fade-up" data-aos-duration="1000">
                    <h2><strong class="black"> Photo Gallery</strong></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            @for ($x = 36; $x >= 1; $x--)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 pppp">
               <div class="about_box_img">
                    <figure class="p-3"><img class="rounded shadow-sm" src="{{ asset('images/gallery/'.$x.'.webp') }}" alt="#" style="width: 600px; height: 500px; object-fit: cover;" data-aos="fade-up" data-aos-duration="3000" /></figure>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

</div>
@endsection