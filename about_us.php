<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Kriyata</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />


    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="assets/images/f_logo_temp_mob.png">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {

            color: white;
        }

        html {
            scroll-behavior: smooth;
        }

        @font-face {
            font-family: grind;
            src: url(../fonts/grind_demolished-webfont.woff2);
            font-display: swap;
        }



        /*Aboutus*/

        #content {
            margin-top: 150px;
            padding: 0px;
            text-align: center;
        }

        .overlay h1 {
            font-size: 56px;
            font-family: grind;
            /* margin-top: 30%;
            margin-bottom: 30%; */
        }

        .overlay h1 span {
            font-size: 54px;
            font-family: grind;
            color: rgb(241, 78, 26);

        }

        .bigimage {
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)), url("assets/images/balls.jpg");
            background-position: relative;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .overlay {
            display: flex;
            /* align-items: center; */
            justify-content: center;
            /* height: vh; */
            width: 45%;
            color: white;
            text-transform: uppercase;

        }





        /*squad*/

        .squad {
            height: 100vh;
            background-color: rgb(25, 29, 38);
            color: #ffffff;
            padding-top: 120px;

        }

        .main {
            width: 100%;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /*flex-direction: column;*/

        }

        .profile-card {
            position: relative;
            width: 220px;
            height: 260px;
            padding: 30px;
            /*box-shadow: 0 0 22px #3336;*/
            transition: .6s;
            margin: 0 25px;
        }

        .profile-card:hover {
            border-radius: 10px;
            height: 260px;
        }

        .profile-card .img {
            position: relative;
            width: 100%;
            height: 100%;
            transition: .6s;
            z-index: 99;
        }

        .profile-card:hover .img {
            transform: translateY(-60px);
        }

        .img img {
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 22px #3336;
            transition: .6s;
        }

        .profile-card:hover img {
            border-radius: 10px;
        }

        .caption {
            text-align: center;
            transform: translateY(-80px);
            transition: .6s;
            opacity: 0;
        }

        .profile-card:hover .caption {
            opacity: 1;
        }

        .caption h3 {
            font-size: 21px;

        }

        .caption p {
            font-size: 16px;
            margin: 2px 0 9px 0;
        }

        .caption .fw-social a {
            color: rgb(148, 173, 169);
            margin-right: 8px;
            font-size: 21px;
            transition: .6s;
        }

        .fw-social a:hover {
            color: blue;
        }

        #features {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8),
                    rgba(0, 0, 0, 0.8)), url("assets/images/image-asset.jpeg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .third-contact-form .btn {
            background-color: rgb(247, 106, 51);
            color: white;
            /* float: left; */
        }



        /*pagescroll*/
        .page-scroll-nav {
            position: fixed;
            top: 50%;
            right: 60px;
            margin-top: -30px;
            z-index: 20;
            width: 120px;
        }

        ul {
            list-style: none;

        }

        .page-scroll-nav li {
            float: left;
            width: 100%;
            margin-bottom: 10px;
            text-align: Center;
        }

        .page-scroll-nav li a {
            color: white;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 600;
            position: relative;
            opacity: 0;
            float: left;
            width: 100%;
            transform: translateY(10px);
            text-decoration: none;
        }

        .page-scroll-nav li a.actscr-link:before {
            width: 15px;
        }

        .page-scroll-nav li a:before {
            content: '';
            position: absolute;
            right: -30px;
            height: 1px;
            top: 50%;
            width: 0;
            background: rgba(255, 255, 255, 0.5);
            transition: all .2s ease-in-out;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            max-width: 80rem;
        }

        .cols {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        #features .col {
            width: calc(50%, -2rem);
            margin: 1rem;
            cursor: pointer;
        }

        .front,
        .back {
            background-size: cover;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            background-position: center;
            -webkit-transition: -webkit-transform .7s cubic-bezier(.4, .2, .2, 1);
            transition: -webkit-transform .7s cubic-bezier(.4, .2, .2, 1);
            -o-transition: transform .7s cubic-bezier(.4, .2, .2, 1);
            transition: transform .7s cubic-bezier(.4, .2, .2, 1);
            transition: transform .7s cubic-bezier(.4, .2, .2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            text-align: center;
            min-height: 280px;
            height: auto;
            border-radius: 10px;
            color: #ffffff;
            font-size: 1.2rem;
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: #cedce7;
            background: -webkit-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: -o-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: linear-gradient(45deg, #1bc485 0%, #596a72 100%);
        }

        .front::after {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: "";
            display: block;
            opacity: .6;
            background-color: #000;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        .cols .col .container:hover .front,
        .cols .col .container:hover .back {
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transition .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
        }

        .inner {
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            top: 50%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;
        }

        .cols .col .container .back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .cols .col .container .front {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .cols .col .container:hover .back {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .cols .col .container:hover .front {
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .front .inner p {
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative
        }

        .front .inner p::after {
            content: '';
            width: 4rem;
            height: 2px;
            position: absolute;
            background: #C6D4DF;
            display: block;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: -.75rem;
        }

        .cols .col .container {
            -webkit-transform-style: preserve-3d !important;
            transform-style: preserve-3d;
            -webkit-perspective: 1000px !important;
            perspective: 1000px;
        }

        @media screen and (max-width: 64rem) {
            .section-2 .col-12 {
                width: calc(33.333333% - 2rem);
            }
        }

        @media screen and (max-width: 48rem) {
            .section-2 .col-12 {
                width: calc(50% - 2rem);
            }
        }

        @media screen and (max-width: 32rem) {
            .section-2 .col-12 {
                width: 100%;
                margin: 0 0 2rem 0;
            }
        }

        @media only screen and (max-width: 992px) {
            .container-fluid {
                padding: 0 !important;
            }

            .bigimage {
                background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                        rgba(0, 0, 0, 0.7)), url("assets/images/balls.jpg");
                background-repeat: no-repeat;
            }

            .vc_row {
                margin-left: -15px;
                margin-right: -15px;
            }

            .wpb_column {
                margin-bottom: 20px;
                width: 100%;
                float: left;
                padding-left: 0;
                padding-right: 0;
            }

            .vc_column-inner {
                box-sizing: border-box;
                padding-left: 15px;
                padding-right: 15px;
                width: 100%;
            }

            .wpb_content_element {
                margin-bottom: 20px;
                font-size: 21px;
            }

            .section-2 {
                background-color: #191D26;
                padding: 0px;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #ffffff;
            }

            .section_2_icons {
                border: 2px solid #ff4800;
            }

            .card {
                background: transparent !important;
                height: 350px;
                margin: 0 25px;
                align-items: center;
            }

            .card img {
                border-radius: 50%;
                width: 220px;
            }

            .card .fw-social a {
                color: rgb(148, 173, 169);
                font-size: 25px;
                margin-right: 12px;
            }

            .col-12 {
                margin-bottom: 70px;
            }

            .cols .col-12 .container:hover .front,
            .cols .col-12 .container:hover .back {
                -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
                transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
                -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
                transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
                transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transition .7s cubic-bezier(0.4, 0.2, 0.2, 1) !important;
            }

            .cols .col-12 .container .back {
                -webkit-transform: rotateY(180deg);
                transform: rotateY(180deg);
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .cols .col-12 .container .front {
                -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .cols .col-12 .container:hover .back {
                -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .cols .col-12 .container:hover .front {
                -webkit-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .cols .col-12 .container {
                -webkit-transform-style: preserve-3d !important;
                transform-style: preserve-3d;
                -webkit-perspective: 1000px !important;
                perspective: 1000px;
            }
        }
    </style>
</head>

<body>



    <div class="d-none d-lg-block">
        <div class="header fixed-top"></div>
        <div id="content" class="container-fluid">
            <div id="About_us">
                <!-- heading -->
                <div id="heading" class="bigimage">
                    <div class="overlay">
                        <h1>About <span>us</span></h1>
                    </div>


                </div>
            </div>


            <!--  Squad  -->
            <div id="Squad" class="squad container-fluid">
                <div>
                    <div style="margin-bottom:20px; padding-bottom: 10px;">
                        <h3>Our Expert Squad</h3>
                    </div>
                </div>

                <div id="Team" class="main">
                    <div class="profile-card">
                        <div class="img">
                            <img src="assets/images/aumkar.jpg">
                        </div>
                        <div class="caption">
                            <h3 class="pt-">Aumkar Ringe</h3>
                            <p>Full Stack Developer</p>
                            <div class="fw-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="img">
                            <img src="assets/images/hrushi.jpg">
                        </div>
                        <div class="caption">
                            <h3 class="pt-4">Hrushikesh Tawde</h3>
                            <p>Full Stack Developer</p>
                            <div class="fw-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="img">
                            <img src="assets/images/siddhi.jpg">
                        </div>
                        <div class="caption">
                            <h3 class="pt-3">Siddhikesh Sakharkar</h3>
                            <p>Full Stack Developer</p>
                            <div class="fw-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Features -->
            <div id="features" class="container-fluid section-2">
                <h3 style="margin-bottom: 40px;">Why Choose Us</h3>
                <div class="container-fluid pt-5 pb-5">
                    <div class="wrapper">
                        <div class="cols">
                            <div class="col" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/cric.jpeg); background-size: cover;">
                                        <div class="inner">

                                            <p>LIGHTNING FAST PROCESS</p>
                                            <span>


                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Create account instantly, get authenticated and you are good to go!

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/foot.jpg);background-size: cover;">
                                        <div class=" inner">
                                            <p>MULTIPLE SPORT REG</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Register with multiple sports on a single click</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/bad.jpg);">
                                        <div class="inner">

                                            <p>EASY STATISTICS</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Manage the data of all the players in the most hassle-free way</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/carrom.jpg);">
                                        <div class="inner">

                                            <p>AUTOMATIC FIXTURES</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Randomize fixtures for the tournaments automatically.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Contact -->
            <div class="container-fluid section-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="third-contact-wrap">
                                <div class="third-title-style">
                                    <h2>CONTACT<span &nbsp> US</span></h2>
                                    <div class="inner">
                                        <h2>MEET OUR <span style="color: #ff4800;;">TEAM</span></h2>

                                        <p class="pt-4 mb-3"><span>Our Location :</span> Trishul Apartments Ganesh Galli
                                            Lower parel Mumbai - 4000013
                                        </p>
                                        <p><span>Phone :</span> +91 8104460774</p>

                                        <!-- <ul style="padding-left: 10px;font-size:18px;" class="pt-4">
                                            <span>Our Location :</span> Central Park Roselle W78 New Jersey</li>
                                            <li><span>Phone :</span> + 97 325 6254 324</li>
                                        </ul> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="third-contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Phone">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                <button class="btn rotated-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Scroll -->
            <div class="page-scroll-nav">
                <nav class="scrol-init">
                    <ul>
                        <li>
                            <a class="scroll-link actscr-link" href="#About_us" style="opacity: 1; transform:translate3d(0px, 0px, 0px);"><span>About</span></a>
                        </li>
                        <li>
                            <a class="scroll-link actscr-link" href="#Squad" style="opacity: 1; transform:translate3d(0px, 0px, 0px);"><span>Squad</span></a>
                        </li>
                        <li>
                            <a class="scroll-link actscr-link" href="#features" style="opacity: 1; transform:translate3d(0px, 0px, 0px);"><span>Features</span></a>
                        </li>
                        <li>
                            <a class="scroll-link actscr-link" href="#Contact" style="opacity: 1; transform:translate3d(0px, 0px, 0px);"><span>Contact</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-top"></div>
    </div>



    <!-- mobile view -->
    <div class="d-lg-none position-relative">

        <div class="mobile-header"></div>



        <div id class="container-fluid">
            <!-- About -->
            <div class="bigimage">

                <h2 style="font-size:55px; line-height: normal; text-align: center; font-family: grind; font-weight: 100; font-style: normal;">
                    <span class="text-white"> ABOUT </span><span style="color:rgb(255,88,23)">Us</span>
                </h2>


            </div>

            <!-- Squad -->
            <div class="container-fluid section-2">
                <div class="container-fluid pt-5 pb-5">
                    <div>
                        <div style="margin-bottom:40px; padding-bottom: 10px; text-align: center; font-size: 50px;">
                            <h1>Our Expert Squad</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 justify-content-center">
                            <div class="card">
                                <img src="assets/images/aumkar.jpg">
                                <h3 class="text-center pt-3">Aumkar Ringe</h3>
                                <p class="text-center pt-2">FULL STACK DEVLOPER</p>
                                <div class="fw-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 justify-content-center">
                            <div class="card pt-5">
                                <img src="assets/images/hrushi.jpg">
                                <h3 class="text-center pt-3">Hrushikesh Tawde</h3>
                                <p class="text-center pt-2">FULL STACK DEVLOPER</p>
                                <div class="fw-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 justify-content-center pt-5 pb-5">
                            <div class="card pt-5">
                                <img src="assets/images/siddhi.jpg">
                                <h3 class="text-center pt-3">Siddhikesh Skharkar</h3>
                                <p class="text-center pt-2">FULL STACK DEVLOPER</p>
                                <div class="fw-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- features -->
            <div id="features" class="container-fluid section-2">
                <h1 style="text-align: center; padding-top: 2rem;">Why Choose Us</h1>
                <div class="container-fluid pt-5 pb-5">
                    <div class="wrapper">
                        <div class="cols">
                            <div class="col-12" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/cric.jpeg);">
                                        <div class="inner">

                                            <p>LIGHTNING FAST PROCESS</p>
                                            <span>


                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Create account instantly, get authenticated and you are good to go!

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/foot.jpg);">
                                        <div class="inner">
                                            <p>MULTIPLE SPORT REG</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Register with multiple sports on a single click</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/bad.jpg);">
                                        <div class="inner">

                                            <p>EASY STATISTICS</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Manage the data of all the players in the most hassle-free way</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" ontouchstart="this.classList.toggle('hover');">
                                <div class="container">
                                    <div class="front" style="background: url(assets/images/carrom.jpg);">
                                        <div class="inner">

                                            <p>AUTOMATIC FIXTURES</p>
                                            <span>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="inner">
                                            <p>Randomize fixtures for the tournaments automatically.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- contact -->
            <div id="Contact" class="container-fluid section-5">
                <div class="container">
                    <div class="row">
                        <div style="margin-bottom: 20px; padding-top: 5rem;" class="col-lg-6">
                            <div class="third-contact-wrap">
                                <div class="third-title-style">
                                    <h2>CONTACT <span &nbsp>US</span></h2>
                                </div>
                                <div class="inners">
                                    <h2>MEET OUR <span style="color:#ff4800">TEAM</span></h2>
                                    <p class="pt-4 mb-3"><span>Our LOCATION:</span>Central
                                        Park Roselle W78 New Jersey.</p>
                                    <p><span>Phone:</span>+97 325 6254 322</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="third-contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Phone">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                <button class="btn d-flex justify-content-center">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top"></div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".header").load('template/header.php');
            $(".footer-top").load('template/footer.html');
            $(".mobile-header").load('template/mobile-header.html');


            $(window).on('scroll', function() {
                var scroll = $(window).scrollTop();
                if (scroll < 245) {


                    $(".social-parent").fadeIn(1000)
                    $(".header").fadeIn(500);

                } else {

                    $(".social-parent").fadeOut(500)



                }
            });
        });
    </script>


</body>

</html>