@extends('layout/app')

@section('title', 'Contact Us - Luxxi Nails & Spa')

@section('content')
<div class="bg-black text-white mx-3 p-5 rounded shadow-sm text-center" style="margin-top: 10em;">
    Contact us via email: luxxinails@gmail.com<br>
    <a href="mailto:luxxinails@gmail.com" class="btn btn-lg btn-primary"><x-feathericon-mail/> Send us a email</a>
    <br><br>
    Send us a chat via Facebook or Messenger<br>
    <a href="https://www.facebook.com/luxxinailsandspa" target="new" class="btn btn-lg btn-primary"><x-feathericon-facebook/> Connect with us through Facebook</a>
    <br><br>
    Book an appointment with us!<br>
    <a href="https://www.facebook.com/luxxinailsandspa" target="new" class="btn btn-lg btn-primary"><x-feathericon-facebook/> Booking through Facebook</a>
</div>

<div class="col-12 d-flex justify-content-center align-items-center p-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.314317594493!2d-92.25744454947419!3d34.79803328031343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d2bdad2f3cc399%3A0x78d1fc106d30da58!2s4702%20John%20F%20Kennedy%20Blvd%2C%20North%20Little%20Rock%2C%20AR%2072116%2C%20USA!5e0!3m2!1sen!2sph!4v1645968241517!5m2!1sen!2sph" height="400" style="border:0; width: 100vw;" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection