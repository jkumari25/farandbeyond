@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <img src="images/home/destination.jpg" class="d-block w-100" alt="Luxury Travels Bali">
        <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#000;">blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .blog-d {
            padding: 10px;
        }

        .container {
            max-width: 1300px;
            padding: 0 15px;
            width: 100%;
            margin: 0 auto;
        }

        .blog-d .content {
            padding: 20px;
            box-sizing: border-box;
        }

        .blog-d .content h2 {
            margin: 20px 0px;
        }

        .blog-uc {
            border-top: 1px solid rgba(0, 0, 0, .2117647059);
            border-right: 1px solid rgba(0, 0, 0, .2117647059);
            border-bottom: 1px solid rgba(0, 0, 0, .2117647059);
        }

        .blog-img img {
            width: 100%;
        }

        .blog-img {
            padding-right: 0px;
        }

        .blog-d a {
            text-decoration: none;
            color: red;
        }

        .inner-grid img {
            width: 100%;
        }

        .inner-grid .conte {
            padding: 24px;
            border-left: 1px solid rgba(0, 0, 0, .2117647059);
            border-right: 1px solid rgba(0, 0, 0, .2117647059);
            border-bottom: 1px solid rgba(0, 0, 0, .2117647059);
        }

        .inner-grid a {
            color: red;
            text-decoration: none;
        }

        .blog-grid {
            padding-bottom: 25px;
        }

        .inner-grid img {
            display: block;
            transition: transform 2s;

        }

        .inner-grid .img {
            overflow: hidden;
            cursor: pointer;
        }

        .inner-grid:hover img {
            transform: scale(1.3);
            transform-origin: 50% 50%;
        }
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 blog-img">
                    <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                        alt="india">
                </div>
                <div class="col-6 blog-uc" style="padding-left:0px">
                    <div class="blog-d">
                        <p>India</p>
                        <div class="content">
                            <h2>An Artist's Freewheeling Travels in India</h2>
                            <p>We are Distinct Destinations, a Destination Management Company (DMC) and since our inception,
                                we have been passionately working towards providing immersive and meaningful travel
                                experiences for our international</p>
                        </div>
                        <a href="/">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <span style="font-size: 20px;padding-top: 20px;display: inline-block;padding-left: 40px;">Follow This Link For Blog
            Page Design <a href="https://www.scottdunn.com/blog" target="_blank">https://www.scottdunn.com/blog</a></span>
    </section>
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-4 inner-grid">
                    <div class="img">
                        <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/BlogImage/Travels-in-Bhutan-sm-cov.jpg"
                            alt="">
                    </div>
                    <div class="conte">
                        <h3>An Artist's Freewheeling Travels in India</h3>
                        <p>
                            We are Distinct Destinations, a Destination Management Company (DMC) and since our inception, we
                            have been passionately working towards providing immersive and meaningful travel experiences for
                            our international
                        </p>
                        <a href="#">Read More</a>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="news-latter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <div class="news-cont">Subscribe to our travel notebook</div>
                    <div class="news-desc news-cont">Be the first to discover the latest news in travel trends</div>
                </div>
                <div class="col-7">
                    <form class="form-inline" action="#">
                        <div class="form-group">
                            <input type="email" id="name" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Enter email" name="email">
                        </div>
                        <a class="btn-2"> SUBSCRIBE </a>
                        <div class="checkbox">
                            <label class="check">
                                <input type="checkbox">
                                <p>I have read and accept the <a style="text-decoration: underline;">Privacy and Data
                                        Protection Policy*</a> and I know that I can unsubscribe at any time. </p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cheack input {
            margin-left: -20px;
        }

        .check input {
            margin-top: -35px;
        }

        .check {
            width: 70%;
            font-size: 14px;
            color: white;
            margin-top: 20px;
        }

        .btn-2:hover a {
            color: black;
            background: white;
        }

        .btn-2 {
            padding: 12px 25px !important;
            border: 1px solid rgb(255 255 255 / 50%);
            color: white !important;
            font-size: 13px !important;
            line-height: 14px;
            letter-spacing: 1px;
            position: relative;
            color: white;
            z-index: 0;
        }

        .form-inline .form-group {
            width: 33%;
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center;
            justify-content: space-between;
        }

        .form-inline input[type=email] {
            background: transparent;
            border: 0;
            border-bottom: 1px solid rgb(255 255 255 / 50%);
            border-radius: 0;
            padding: 13px 13px 13px 0 !important;
            color: #FFFFFF;
            outline: #000000;
            font-size: 15px !important;
            line-height: 16px;
            letter-spacing: .5px;
            width: 100%;
        }

        .news-cont {
            color: white;
            font-family: "Portrait", Sans-serif;
            font-size: 21px;
            font-weight: 400;
            line-height: 35px;
        }

        .news-latter {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 64px 30px 62px 30px;
            background: #000000;
        }
    </style>
    <!--End news latter-->

    <style>
        .wedding {
            margin-left: 60px;
        }
    </style>
    <style>
        .footers {
            border-top: 1px #dedede solid;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 90px 30px 100px 30px;
        }

        .f-list-item .list-item {
            list-style: none;
        }

        .f-list-item {
            padding-left: 0px;
        }

        .f-list-item .list-item a {
            text-decoration: none;
            font-family: "Inter", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: none;
            line-height: 16px;
            letter-spacing: .5px;
            color: black;
        }

        .f-heading {
            font-size: 1rem;
        }
    </style>
    <div class="client-logo-bg">
        <div class="client-text" style="display:none;">
            <h3 class="border_line1">
                <span>Our Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Preferred hotels">
                </div>
            </div>
        </div>
    </div>
@endsection
