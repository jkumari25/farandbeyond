@extends('web-layouts.app')

@section('page-content')
    <link href="css/li.min.css" type="text/css" rel="stylesheet">

    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{ $pageData['section1Image'] ?? '' }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{{ $pageData['section1heading'] ?? '' }}</h2>
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
                        {!! $pageData['section1content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 hard-responsive" style="padding-right:0px!important; padding-left:40px;">
                    <div class="experiences-box">
                        <div class="exper-cont" style="padding-top:99px;">
                            <div class="content">
                                <div class="alpo-hedading">
                                    <h3>Alphonso Experiences</h3>
                                </div>
                                <br />
                                <br />
                                <p>
                                    Choose from our exclusive selection of handpicked experiences and fall in love with the
                                    city, one story at a time.
                                </p>
                                <button style=""><a
                                        href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                        style="text-decoration:none;color:white;">View All Experiences</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @media only screen and (max-width: 600px) {
                        .hard-responsive {
                            width: 100% !important;
                        }

                        .col-3 {
                            padding-left: 0px !important;
                        }
                    }
                </style>

                <div class="col-9 hard-responsive" style="padding-left:0px!important">
                    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">


                                <?php foreach ($tourData as $key => $value) {
                            ?>

                                <div class="owl-item active hard-responsive">
                                    <div class="item ">
                                        <div class="inspired_box">
                                            <img src="{{ $value->file_path ?? '' }}" style="color:white;">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>{{ $value->title }}</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>


    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="litt-videos">
                    {!! $pageData['section2content'] ?? '' !!}
                </div>
                <div class="col-12" style="padding: 30px 50px;">
                    <div class="res-trav">
                        <div
                            onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                            <div class="play-button-wrapper">
                                <div title="Play video" class="play-gif" id="circle-play-b">
                                    <!-- SVG Play Button -->
                                    <img src="images/icons/play-icon.png" alt="" srcset=""
                                        style="width: 100px; position:absolute; top:200px;">
                                </div>
                            </div>
                            <img class="thumb" style="cursor: pointer;"
                                src="{{ $videoData1->placeholder_image_path ?? '' }}">
                        </div>
                        <div id="thevideo" style="display: none;">
                            <video controls width="100%" height="470px" class="elVideo" loop="loop" autoplay=""
                                playsinline="" muted="" src="{{ $videoData1->file_path ?? '' }}" {{-- src="video/little-inspirat/CHITWAN.mp4"  --}}
                                id="video-slider-1 big-video"></video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px; margin-bottom: 60px;">
                @foreach ($videoData as $key => $video)
                    <?php
                    $count = $key + 1;
                    $id = "thevideo$count";
                    $elemtnId = "'thevideo$count'";
                    ?>
                    <div class="col-lg-4">
                        <div class="litt-trav">
                            <div
                                onclick="thevid=document.getElementById({{ $elemtnId }}); thevid.style.display='block'; this.style.display='none'">
                                <div class="play-button-wrapper">
                                    <div title="Play video" class="play-gif" id="circle-play-b">
                                        <!-- SVG Play Button -->
                                        <img src="images/icons/play-icon.png" alt="" srcset=""
                                            style="width: 20%;position:absolute;height: 90px;top: 50px;">
                                    </div>
                                </div>
                                <!-- <img class="thumb" style="cursor: pointer;" src="video/little-inspirat/jodhpur.webp"> -->
                                <img class="thumb" style="cursor: pointer;" src="{{ $video->placeholder_image_path }}">
                            </div>
                            <div id="{{ $id }}" style="display: none;">
                                <!-- <video controls width="100%" class="elVideo" loop="loop" autoplay="" playsinline="" muted="" src="video/little-inspirat/JODHPUR.mp4" id="video-slider-1 big-video"></video> -->
                                <video controls width="100%" class="elVideo" loop="loop" autoplay=""
                                    playsinline="" muted="" src="{{ $video->file_path }}"
                                    id="video-slider-1 big-video" style="max-height:400px;"></video>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="dest-btn">
                <button class="expo"><a href="#">View all videos</a></button>
            </div>
        </div>
    </section>
    <script></script>
    <section>
        <div class="PopShwMnVriBkle" style="display: none;">
            <div class="SurciseSecSwn">
                <div class="clseShw"> <img src="../../www.distinctdestinations.in/asset/icon/closenv.png"> </div>
                <div>
                    <h5>Disclaimar</h5>
                    <p>To Explore our collection, please contact us on <a
                            href="mailto:littleinspirations@distinctdestinations.in">
                            littleinspirations@distinctdestinations.in </a> for the Login and password.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-rsp" style="display:none;">
        <div class="container-fluid">
            <div class="row">
                <div class="about-h">
                    <h2 style="margin-bottom:31px;text-align:center;">Blogs</h2>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 10px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video">
                        <img src="images/home/destinations/india.jpg" alt="about" style="height:400px!important">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="trav-video">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video2">
                        <img src="images/home/destinations/india.jpg" alt="about" style="height:300px!important">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="trav-video2">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
