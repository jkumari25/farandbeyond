@extends('web-layouts.app')

@section('page-content')
    <link href="css/destination.min.css" type="text/css" rel="stylesheet">

    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{ $pageData['section1video'] ?? '' }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container hero-container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-title">
                        <h2>{{ $pageData['section1heading'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-bg" style="background:#FFF7F7;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {!! $pageData['section2content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($designations as $key => $designation)
        <section class="trips-bg" id="{{ $designation->destination_name ?? '' }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                        <div class="about-img1">
                            <img src="{{ $designation->image_one ?? '' }}" alt="about" style="width:100%">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12  inner-section innner-content">
                        <div class="about_main">
                            <div class="about-h">
                                <h2>{{ $designation->destination_name ?? '' }}</h2>
                            </div>
                            <div class="about_p">
                                {!! $designation->content_one ?? '' !!}
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="trips-bg" style="padding:0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12  inner-section innner-content">
                        <div class="about_main2">
                            <div class="about_main3">
                                {!! $designation->content_two ?? '' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                        <div class="about-img2">
                            <img src="{{ $designation->image_two }}" alt="about" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
