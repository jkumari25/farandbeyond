@extends('web-layouts.app')

@section('page-content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/contact/Contact-us.webp" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#fff;">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner {
            width: 100%;
            height: 40vw;
        }

        .hero-title .bottom-head {
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 1.6px;
            line-height: 1.4;
            color: #379c8a;
        }

        .about-cont {
            padding: 60px 0 0px 0;
        }

        .about-cont .container {
            padding-top: 40px;
        }

        .about-text p {
            padding-top: 0px;
            font-family: 'arial', serif;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
        }

        .about-text {
            width: 80%;
            margin: auto;
        }

        .about-img img {
            width: 100%;
        }

        .trips-bg .inner-section {
            padding: 0px;
        }

        .about-h h2 {
            font-size: 3rem;
            font-weight: bold;
        }

        .about-h {
            text-align: left;
        }

        .innner-content {
            overflow: hidden;
        }

        .about-img .inner-img {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .about_main {
            min-height: 39.4vw;
            height: auto;
            width: 90%;
            margin: auto;
            padding-top: 40px;
            padding-left: 14px;
            padding-right: 14px;
        }

        .about_main .about_p {
            text-align: center;
        }

        .about_main .about_p p {
            font-size: 19px;
        }

        .about-img1 {
            /*max-width: 562px;*/
            width: 100%;
            margin: auto;
            background: red;
            overflow: hidden;
        }

        .about-img1 img {
            width: 100%;
            height: 43vw;
        }

        .about-img2 {
            min-height: 37vw;
            /*min-width:506px;*/
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .about-img2 img {
            width: 100%;
            height: 37vw;
        }

        .about_main2 {
            min-height: 37vw;
            /*min-width:506px;*/
            height: 100%;
            width: 100%;
            /*background:green;*/
            display: flex;
            text-align: center;
            align-items: center;
        }

        .about_main3 {
            width: 70%;
            /* background: red; */
            /* margin: auto; */
            text-align: center;
            margin-top: 5%;
            margin-left: 25%;
            padding: 20px;
            box-sizing: border-box;

        }

        .meet_team {
            max-height: 20vw;
            height: 20vw;
            display: flex;
            justify-content: left;
            text-align: center;
            align-items: center;
        }

        .about-img4 {
            max-width: 540px;
            width: 80%;
            margin: auto;
            background: red;
            overflow: hidden;
            position: absolute;
            bottom: 20%;
            left: 10%;
        }

        .about-img4 img {
            width: 100%;
            height: 37vw;
        }

        .about_left,
        p {
            text-align: left;
        }

        .about_main4 {
            min-height: 37vw;
            height: 100%;
            width: 80%;
            margin: auto;
            display: flex;
            text-align: center;
            align-items: center;
        }

        .cont-p p {
            font-size: 16px;
            font-weight: 500;
            color: #495057;
        }

        .expo {
            padding: 0px !important;
            border: none !important;
            min-width: 133px !important;
        }

        .expo a:hover {
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 17px;
            text-decoration: none;
            color: #ffffff;
            background: #000000;
            font-weight: 500;
            border: 1px solid black;
            min-width: 133px;
        }

        .expo a {
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 17px;
            text-decoration: none;
            color: #000;
            background: #fff;
            font-weight: 500;
            border: 1px solid black;
            min-width: 133px;
        }

        @media only screen and (max-width: 600px) {
            .hard-responsive {
                width: 100% !important;
            }
        }
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="col-12">
                <div class="thanku">
                    <div class="thanku-h">Thank You</div>
                    <div class="thanku-cont">
                        <p>Thank you for contacting us. We'll contact you within 24 working hours. Meantime, please keep
                            exploring exciting products
                        </p>
                        <p>
                            Call Us :+91 9599-360-800
                        </p>
                        <p>
                            Email : info@farandbeyond.in
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .trips-bg {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            background-color: #f5f5f5;
            /* Optional: Add a background color */
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .thanku {
            text-align: center;
            background-color: #ffffff;
            /* Optional: Add a background color */
            padding: 20px;
            border-radius: 8px;
            /* Optional: Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow for depth */
        }

        .thanku-h {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .thanku-cont p {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
    <!--footer start-->
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

        .group-aff {
            text-align: center;
            padding-bottom: 20px;
            color: white;
        }
    </style>
    <!--End news latter-->
    <div class="client-logo-bg">
        <div class="group-aff">
            <h3 style="font-weight:600;">
                <span>Group Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="images/footerlogo/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="images/footerlogo/keralatravelmart.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Tourcert.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Toft.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="images/footerlogo/RTSOI-LOGO.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="images/footerlogo/One-Tree-Planted.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="images/footerlogo/IATO.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/sanderson-phillips.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/USTOA.png" alt="Preferred hotels">
                </div>
            </div>
        </div>
    </div>
    <style>
        .footers {
            border-top: 1px #dedede solid;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 30px 50px 30px;
        }

        .f-list-item .list-item {
            list-style: none;
            padding: 10px 0px;
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
            color: #000;
            font-weight: 600;
        }

        .footer-logo {
            /*height:250px;*/
            /*width:250px;*/
        }

        .footer-logo img {
            width: 45%;
            object-fit: cover;
        }
    </style>
    <section class="news-latter" style="border-top:1px solid rgb(255 255 255 / 50%);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <div class="news-cont">Join our travel notebook!</div>
                    <div class="news-desc news-cont">Stay ahead with the latest updates in travel trends.</div>
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
                                <p style="color:white; font-size:1rem!important;">I have read and accept the <a
                                        style="text-decoration: underline;">Privacy and Data Protection Policy*</a> and I
                                    know that I can unsubscribe at any time. </p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
