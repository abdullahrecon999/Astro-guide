<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <style>
        body {
            margin: 0;
            font: normal 75% Arial, Helvetica, sans-serif;
        }
        canvas {
            display: block;
            vertical-align: bottom;
        } /* ---- particles.js container ---- */
        #particles-js {
            /* position: relative; */
            position: relative;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
            width: 100%;
            height: 100%;
            background-color: #232741;
            background-repeat: no-repeat;
            background-size: 20%;
            background-position: 50% 50%;
        }

        .Bannercontainer{
            position: absolute;
            z-index: 1;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
            margin-top: 10%;
        }

        .start{
            box-shadow: -4px 5px var(--bs-gray-700);
            transition: 300ms ease-in-out;
        }

        .start:hover{
            transition: 300ms ease-in-out;
            background-color:#F8480B;
        }

        .hidden{
            display: none;
        }

        .with-bg-size {
            width: 250px;
            height: auto;
            background-size: cover;
        }

        .carousel {
            background: #222;
        }

        .carousel-cell{
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <img class="with-bg-size" src="/img/My_logo.png" alt="">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/assignment') }}">Assignment 3</a></li>
                    @if (Route::has('login'))
                        @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">

        <div id="particles-js">
            <section class="Bannercontainer hidden">
                <div class="text banner">
                    <h1 class="display-1" style="color:white;rotate(0deg) skew(0deg);transform-style: preserve-3d;text-shadow: -4px 2px var(--bs-gray-700);padding: 12px;margin-bottom: 10px;"><strong>Astro Guide</strong></h1>
                    <button id="get_started" class="btn btn-light btn-primary btn-lg start" type="button">Get Started</button>
                </div>
            </section>
        </div>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Astronomy for Everyone</h2>
                    <p><strong>Astro Guide</strong>&nbsp;provides a central control panel or dashboard for providing Astronomy Data and information in a more presentable way.&nbsp;</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg"></div>
                    <div class="col-md-6">
                        <h3>Central Control Panel</h3>
                        <div class="getting-started-info">
                            <p>The Dashboard provides the control panel layout where you can track satellites, watch moon phases, display current weather and much more.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Join Now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>Some of the incorporated set of features</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Bootstrap 5</h4>
                        <p>Design in Bootstrap 5 making the Web App mobile first.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fas fa-space-shuttle icon"></i>
                        <h4>Astronomy</h4>
                        <p>Various Astronomy APIs are used to fetch the latest and accurate Data.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsive</h4>
                        <p>Bootstrap 5's Responsive ability is utilized to the fullest degree.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p>Compatible in All latest popular browsers.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Recent Launches</h2>
                    <p>Some of the Most Recent rocket Launches showcased Below</p>
                </div>
                <div class="carousel slide">
                    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "adaptiveHeight": true}'>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="/img/Me.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Abdullah Mohammad Shafique</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2022 Copyright Text</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <!-- particles.js container -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="js/LoadImages.js"></script>
    <script src="js/particlebck.js"></script>

    <script>
        $(document).ready(function () {
            $('.Bannercontainer').fadeIn(1000);

            $('#get_started').click(function(){
                window.location.href='/login';
            })
        });
    </script>
</body>

</html>