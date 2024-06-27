@extends('web-layouts.app')

@section('page-content')
    <link href="css/restravel.min.css" type="text/css" rel="stylesheet">

    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{ $pageData['section1image'] }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{{ $pageData['section1heading'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {!! $pageData['section1content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="padding: 30px 50px;">
                    <div class="res-trav">
                        <img src="{{ $pageData['section2image'] }}" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 0px 0px; padding-bottom:40px">
                    <div class="about-text">
                        {!! $pageData['section2content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="padding-left:60px">
                    <div class="res-inner">
                        <img src="images/responsible/Responsible-travel.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-6" style="padding-right:60px">
                    <div class="res-inner">
                        <img src="images/responsible/iStock-.webp" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 30px 0px;">
                    <div class="about-text">
                        <p>We aim to inspire our guests with our proactive approach towards giving
                            back to the local community in multiple ways— which includes support
                            for local employment, friendship and cultural tolerance and the protection
                            of their natural environments and wildlife.

                            <br>
                            <br>
                            We strongly believe that this will not only serve as a win-win experience for
                            our guests and the communities they meet on their travels, but also, in a
                            broader context, add that extra push for safeguarding Planet Earth.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
