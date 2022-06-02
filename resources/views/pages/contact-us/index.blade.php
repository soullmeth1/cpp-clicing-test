@extends('layouts.app')

@section('title', 'Contact Us')

@section('header')
<header class="header-contact text-white flex flex-col">
    @include('layouts.navbar')

    <section class="flex-1 flex flex-col justify-center px-4 md:px-10 py-20 md:p-20">
        <h2 class="font-bold text-2xl">Contact Us</h2>
        <p class="max-w-lg">Feel free to give us your questions and suggestions.
            <br>Please contact us anytime via the contact form or by sending an email to sales@shrimpimprovement.com.sg</p>
    </section>
</header>
@endsection

@section('content')
<section class="container py-10 md:py-20 px-4 md:px-10">
    <p class="font-medium">For enquiries, email us or fill up the form below.</p>
    <form class="grid justify-items-start gap-8 mt-10">
        <section class="grid lg:grid-cols-2 gap-10 w-full">
            <div class="grid gap-5">
                <input class="input-control" type="text" name="company" placeholder="Company">
                <input class="input-control" type="text" name="name" placeholder="Name">
                <input class="input-control" type="email" name="email" placeholder="Email">
                <textarea class="input-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
                <button class="rounded-lg bg-utama text-white py-3 px-16 md:justify-self-start">SUBMIT</button>
            </div>

            <div class="text-center flex flex-col gap-2 md:text-left">
                <h4 class="font-medium mb-2">SHRIMP IMPROVEMENT SYSTEMS</h4>
                <select class="input-control" name="select">
                    <option selected disabled>Select Option</option>
                    <option value="singapore">Singapore</option>
                    <option value="indonesia">Indonesia</option>
                </select>
                <div class="grid md:flex my-5 gap-5">
                    <p class="address">No. 90 Lim Chu Kang Lane 6 F Singapore 718873</p>
                    <i class="border-t md:border-r border-utama"></i>
                    <p class="email">sales@shrimpimprovement.com.sg</p>
                </div>
                <div id="map" class="h-64">
                    {{-- <img src="{{ url('assets/images/location.png') }}" alt="Map Image"> --}}
                </div>
            </div>
        </section>
    </form>
</section>
@endsection

@push('styles')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
<style>
    .fb9 {
        border: 1px solid #3366FF;
        background-color: #B3C6FF;
        width:150px;
        height:30px;
    }
    </style>
@endpush

@push('scripts_head')
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endpush

@push('scripts_body')
    <script>
        	mapboxgl.accessToken = 'pk.eyJ1IjoibXViYXJvcTkyIiwiYSI6ImNsM25yZjkzNDBoOHMzZGw4eWs4MzNmODYifQ.VjirMRaeC4_GFQ1GW790FQ';
            const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [106.8296376, -6.3296044], // starting position [lng, lat]
            zoom: 13 // starting zoom
            });
    </script>
@endpush