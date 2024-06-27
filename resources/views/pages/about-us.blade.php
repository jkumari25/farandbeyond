@extends('web-layouts.app')

@section('page-content')
    <link href="css/about.min.css" type="text/css" rel="stylesheet">



    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{ $pageData['section1image'] }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{{ $pageData['section1heading'] }}</h2>
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
                        {!! $pageData['section2title'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Mission section start -->
    <section class="trips-bg" style="padding-bottom:0px;">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-5 col-md-5 col-sm-12 inner-section">
                    <div class="about-img1" style="padding:0px 75px;">
                        <img src="{{ $pageData['section3image'] }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 inner-section innner-content">
                    <div class="about_main1 hard-responsive">
                        {{-- <div class="about-h" style="text-align:left;">
                            <h2>Our Mission</h2>
                        </div>
                        <div class="about_p">
                            <p style="text-align:left!important;">
                                We aim to embed ourselves as a specialised brand for years to come in this unique market,
                                which is growing by leaps and bounds. We are experts in creating the most alluring
                                handcrafted luxury travel programmes. Over the years we have honed our skills in handling
                                the most exclusive luxury experiential friends and family travel.
                                <br />
                                <br />
                                Our personalized and customized journeys are a compelling choice for the discerning luxury
                                traveller. The passion of our dedicated team and hyper-personalisation have been the key
                                components in designing these re-imagined, delight-giving traveller experiences.
                            </p>
                        </div> --}}

                        {!! $pageData['section3content'] !!}


                        {{-- <br /> --}}
                        {{-- <div class="about-h" style="text-align:left;">
                            <h2>Exclusivity Just For You</h2>
                        </div>
                        <div class="about_p">
                            <p style="text-align:left!important;">
                                Exclusivity, careful curation and innovation — ourbespoke modern luxury offerings have all
                                these hallmarksto elevate the guest experience for travellers looking forexceptional
                                experiences in their next destination.Exclusivity, careful curation and innovation —
                                ourbespoke modern luxury offerings have all these hallmarksto elevate the guest experience
                                for travellers looking forexceptional experiences in their next destination.
                                <br />
                                <br />
                                Our Travel Partners, the cornerstone of our global operations, have worked closely alongside
                                with theirmarket-savvy actionable insights, in supporting these unique, once-in-a-lifetime
                                and culturally immersive luxury experinces.

                            </p>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission section ended -->

    <!-- Our Network section started -->
   
    <section class="trips-bg my-30px">
    <div class="container-fluid">
        <div class="row main3">
            <div class="col-lg-6 col-md-6 col-sm-12 order-2 order-md-1">
                <div class="about_main3 hard-responsive">
                    {!! $pageData['section4content'] !!}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-md-2">
                <div class="about-img2">
                    <img src="{{ $pageData['section4image'] }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Our Network section ended -->

    <!-- Why us section started -->
    <section class="trips-bg" id="why-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 order-1 order-md-2" style="padding-left:0px;padding-right:0px;">
                <img src="{{ $pageData['section5image'] }}" alt="about" style="width:100%">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 order-2 order-md-1">
                <div class="about_main3  hard-responsive">
                    <!-- Paragraph Content Goes Here -->
                    {!! $pageData['section5content'] !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why us section ended -->


    <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12" style="padding-left:0px;padding-right:0px;">
                    <div class="about-img2">
                        <img src="{{ $pageData['section5image2'] }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="about_main3 hard-responsive">
                            <div class="about_p">
                                {{-- <p style="font-size:16px">
                                    Our fantastic luxury Concierge network ‘far and beyond’ empowers the guest experience.
                                    These amazing connections set the stage for driving home the message that each guest is
                                    well-cared-for and their needs are attended to at any time, any place.
                                    <br />
                                    Our partnerships with deeply knowledgeable local service providers serve as a pivotal
                                    point for our delivery of exceptional experiences. The intimate knowledge and the
                                    immersive approach of our private and specialist guides bring invaluable insights.


                                </p> --}}

                                {!! $pageData['section5content2'] !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#FFF7F7;" id="meet-our-team">
        <div class="container meet_team">
                <h2 >MEET OUR TEAM</h2>
        </div>
    </section>

    <section class="trips-bg" style="position:relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="{{ $pageData['section6image'] }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            {{-- <div class="about-h  about_left">
                                <h2 style="text-align:left;">Vinay DHALL</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p  about_left">
                                <p>
                                    For someone who has run over 25,000 kms in over 25 cities around world, Travel being a
                                    passion is not surprising. What is surprising is the number of years he has spent in
                                    travel since his first stint with Travel Corporation of India. Clocking twenty years in
                                    the industry Vinay has been heading Luxury MICE and experiential FIT for a company
                                    counted among the top five Luxury Operators in the World.

                                </p>
                                <br>
                                <p style="font-size:16px">
                                    His other love is people and their cultures, fluent in French his insight into
                                    travellers profile has ensured many a successful luxury operations both for incentive
                                    travel, small groups and individual curations for FITs. Eager to see and experience
                                    places around the globe to connect with people and show them the beauty of the
                                    subcontinent is his project for life, one that he continued to excel at, even after all
                                    these years. Fitness is mantra for him, while food and heritage are favourite subjects.
                                    Nothing describes Vinay better than catching him running barefoot - he has run in the
                                    Himalayas, in the Parks for Delhi, around the Louvre in
                                    Paris, the silent lanes of London at night, in the cold mornings of Zurich. Awaiting
                                    more barefoot adventures, Vinay is now a man on a mission, unstoppable.


                                </p> --}}


                            {!! $pageData['section6content'] !!}

                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12">&nbsp;</div>
            </div> -->
        </div>
    </section>

    <section class="trips-bg" style="position:relative;">
        <div style="background:#FFF7F7; position:absolute;position: absolute; height:18vw; top:35px; width: 100%;">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main" style="z-index: 1;">
                            {{-- <div class="about-h about_left">
                                <h2 style="text-align:left;">Rahul Sareen</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p about_left">
                                <p>
                                    Rahul Sareen is a curator at heart and his greatest joy is being able to assist couples
                                    and families in crafting unforgettable and impeccable journeys. From the beginning of
                                    his career, Rahul’s operational excellence is his forte. He honed his skills and gained
                                    destination knowledge, an asset for Inbound operations for Voyageurs India dealing with
                                    French and UK markets.


                                </p>
                                <br>
                                <p style="font-size:16px">
                                    A gym enthusiast Rahul is committed to fitness, one reason for his energy and hardwork.
                                    In his own words he loves sharing information about destinations, stunning and unique
                                    places in the country. His best reward is to have a happy guest, after travelling on one
                                    of his curated itineraries to return with cherished memories that last a lifetime.
                                    Travel is truly his muse and operations his strength. A team player Rahul is looking
                                    forward to crafting experiences for guests from all over the world.



                                </p>
                            </div> --}}

                            {!! $pageData['section6content2'] !!}

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4 hard-responsive">
                        <img src="{{ $pageData['section6image2'] }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-bg" style="position:relative; padding-bottom:20px!important;display:none;">
        <div style="background:#FFF3EF; position:absolute;position: absolute; height:18vw; top:135px; width: 100%;">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="{{ $pageData['section6image3'] }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            {{-- <div class="about-h about_left">
                                <h2 style="text-align:left;">Name</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p about_left">
                                <p> <strong>Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature.
                                        erature. Spray paint drying time can vary
                                        based on several factors, including the type
                                        of paint, surface, humidity, and
                                        temperature</strong>
                                </p>
                                <br>
                                <p style="font-size:16px">
                                    Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature
                                </p>
                            </div> --}}
                            {!! $pageData['section6content3'] !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="trips-bg" style="position:relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section" style="margin-top: 50px">
                    <div class="about-img4">
                        <img src="{{ $pageData['section6image3'] }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            {{-- <div class="about-h  about_left">
                                <h2 style="text-align:left;">Vinay DHALL</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p  about_left">
                                <p>
                                    For someone who has run over 25,000 kms in over 25 cities around world, Travel being a
                                    passion is not surprising. What is surprising is the number of years he has spent in
                                    travel since his first stint with Travel Corporation of India. Clocking twenty years in
                                    the industry Vinay has been heading Luxury MICE and experiential FIT for a company
                                    counted among the top five Luxury Operators in the World.

                                </p>
                                <br>
                                <p style="font-size:16px">
                                    His other love is people and their cultures, fluent in French his insight into
                                    travellers profile has ensured many a successful luxury operations both for incentive
                                    travel, small groups and individual curations for FITs. Eager to see and experience
                                    places around the globe to connect with people and show them the beauty of the
                                    subcontinent is his project for life, one that he continued to excel at, even after all
                                    these years. Fitness is mantra for him, while food and heritage are favourite subjects.
                                    Nothing describes Vinay better than catching him running barefoot - he has run in the
                                    Himalayas, in the Parks for Delhi, around the Louvre in
                                    Paris, the silent lanes of London at night, in the cold mornings of Zurich. Awaiting
                                    more barefoot adventures, Vinay is now a man on a mission, unstoppable.


                                </p>

                            </div> --}}
                            {!! $pageData['section6content3'] !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">&nbsp;</div>
            </div>
        </div>
    </section>


    {{-- <section>
        <div class="container" style="padding-bottom:20px!important;">
            <div class="row">
                <div class="col-12">
                    <div class="our-t"><span class="h2">Our Experts To Help You</span></div>
                    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item active hard-responsive">

                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team1.jpg" alt="ankurgupta"
                                                    style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2">Mr Daniel</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active hard-responsive">
                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team.jpg" alt="ankurgupta"
                                                    style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2">Mr James</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active hard-responsive">
                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team1.jpg"
                                                    alt="farandbeyond team" style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2"> Mr Joseph</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- second section --}}
<!-- <section class="our_team" >
    <h2 style="margin-top:65px">What They Say</h2>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" >
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/3.html" alt="Image">
                </div>
                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                    Etiam faucibus
                    mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus,
                    volutpat vel
                    tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                <p class="overview">
                    <b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a>
                </p>
            </div>
            <div class="carousel-item">
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/1.html" alt="">
                </div>
                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                    varius quam
                    at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum
                    idac nisl
                    bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                <p class="overview">
                    <b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a>
                </p>
            </div>
            <div class="carousel-item">
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/2.html" alt="">
                </div>
                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                    mi suscipit
                    tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
                    potenti.
                    Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                <p class="overview">
                    <b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a>
                </p>
            </div>
        </div>
        <div class="carousel_button">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section> -->

<section class="our_team">
    <h2 style="margin-top:65px">What They Say</h2>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/3.html" alt="Image">
                </div>
                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                    Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus,
                    volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                <p class="overview">
                    <b>Michael Holz</b> Seo Analyst at <a href="#">OsCorp Tech.</a>
                </p>
            </div>
            <div class="carousel-item">
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/1.html" alt="">
                </div>
                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                    varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum
                    idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                <p class="overview">
                    <b>Paula Wilson</b> Media Analyst at <a href="#">SkyNet Inc.</a>
                </p>
            </div>
            <div class="carousel-item">
                <div class="img-box" style="display:none">
                    <img src="../examples/images/clients/2.html" alt="">
                </div>
                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                    mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
                    potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                <p class="overview">
                    <b>Antonio Moreno</b> Web Developer at <a href="#">Circle Ltd.</a>
                </p>
            </div>
        </div>
        <div class="carousel_button">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


@endsection
