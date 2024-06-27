@extends('web-layouts.app')

@section('page-content')
    <link href="css/services.min.css" type="text/css" rel="stylesheet">


    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{ $pageData['section1Image'] ?? '' }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{{ $pageData['section1tittle'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {{-- <p>
                            We offer the most exclusive experiences to guests through our three ultra- personalised
                            services: The Luxury Collection; Meetings & Conferences; Incentives. We are laser-focused on
                            offering only the finest value-added propositions to our clients. Our expertise has long been
                            recognised for the design, coordination and management of luxury experiential travel, Incentive
                            trips, and Meetings and Conferences. Supported by strong partnerships and an authentic
                            representation we have navigated the challenges of these evolving markets and seek to raise the
                            bar in this growing space as a lead player.

                        </p> --}}
                        {!! $pageData['section1content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($multiServices as $key => $service)
        <?php
if (($key + 1) % 2 != 0) {
?>
        <section class="trips-bg" style="padding-bottom:40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                        <div class="about-img2">
                            <img src="{{ $service->image_path }}" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                        <div class="about_main2" style="background:#FFF7F7;">
                            <div class="about_main3">
                                <div class="about_p">
                                    {!! $service->content_value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
} else {
?>
        <section class="trips-bg" style="padding-top:40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                        <div class="about_main5" style="background:#FFF7F7;">
                            <div class="about_main3">
                                <div class="about_p">
                                    {!! $service->content_value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section" style="position:relative; z-index:-1;">
                        <div class="about-img2">
                            <img src="{{ $service->image_path }}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
}
?>
    @endforeach
    <!-- <section class="trips-bg" style="padding-bottom:40px;">
                                                                                <div class="container-fluid">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                                                                                            <div class="about-img2">
                                                                                                <img src="images/services/Our-Services-incentive.webp" alt="about">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                                                                                            <div class="about_main2" style="background:#FFF7F7;">
                                                                                                <div class="about_main3">
                                                                                                    <div class="about-h">
                                                                                                        <h3 style="margin-bottom:23px;font-weight: bold;">Incentives</h3>
                                                                                                    </div>
                                                                                                    <div class="about_p">
                                                                                                        <p>
                                                                                                            We stand out for our exceptional leisure-time programmes. We have redefined the concept
                                                                                                            of ‘Bluxury’ with our key components of authenticity, personalisation and guest
                                                                                                            satisfaction. They distinguish the uniqueness of our Incentives portfolio of activities
                                                                                                            and experiences on offer. Far and Beyond holds the promise of giving the greatest value
                                                                                                            for time and money through a spectrum of thrilling events and fun activities


                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section> -->
@endsection
