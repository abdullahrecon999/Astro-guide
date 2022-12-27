<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Gallery</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');
        </style>

        <style>
            @import url("https://fonts.googleapis.com/css?family=Roboto+Mono:400,700");
            body {
                margin: 0;
                font: normal 75% Arial, Helvetica, sans-serif;
            }
            .with-bg-size {
                width: 250px;
                height: auto;
                background-size: cover;
            }
            /* body {
                margin: 0;
                font-family: "Roboto Mono";
                overflow: hidden;
                background-color: #373737;
                font-size: 40px;
                font-weight: bold;
            }
            pre {
                background-color: #3a3a3a;
                padding: 20px;
                border-radius: 5px;
            } */

            header {
                position: relative;
                background-color: black;
                height: 75vh;
                min-height: 25rem;
                width: 100%;
                overflow: hidden;
            }

            header video {
                position: absolute;
                top: 50%;
                left: 50%;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: 0;
                -ms-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
            }

            header .container {
                position: relative;
                z-index: 2;
            }

            header .overlay {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: black;
                opacity: 0.5;
                z-index: 1;
            }

            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                #app{
                    font-family: 'Roboto', sans-serif; 
                    font-size:20px;
                }
            }

            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (min-width: 600px) {
                #app{
                    font-family: 'Roboto', sans-serif; 
                    font-size:30px;
                }
            }

            /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (min-width: 768px) {
                #app{
                    font-family: 'Roboto', sans-serif; 
                    font-size:50px;
                }
            }

            /* Large devices (laptops/desktops, 992px and up) */
            @media only screen and (min-width: 992px) {
                #app{
                    font-family: 'Roboto', sans-serif; 
                    font-size:60px;
                }
            }

            /* Extra large devices (large laptops and desktops, 1200px and up) */
            @media only screen and (min-width: 1200px) {
                #app{
                    font-family: 'Roboto', sans-serif; 
                    font-size:70px;
                }
            }

            .grid-item {
                min-width: 320px;
                max-width: 30%;
                height: auto;
                background-color: green;
            }

            /* @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            } */
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
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
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

        <header>

            <div class="overlay"></div>
          
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="/img/Shuttle.mp4" type="video/mp4">
            </video>
          
            <!-- The header content -->
            <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                  <div id="app"></div>
                </div>
              </div>
            </div>
          </header>
          
          <section class="my-5" style="display: flex; flex-direction:column; align-items:center;">
            <div class="container" style="padding: 0;">
                <div class="grid">
                    
                </div>
            </div>
          </section>


        <link rel="stylesheet" href="assets/css/styles.min.css">
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="https://unpkg.com/packery@2/dist/packery.pkgd.min.js"></script>
        <script src="assets/js/script.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
        <script src="js/LoadGallery.js"></script>

        <script>
            
            var app = document.getElementById('app');
            var typewriter = new Typewriter(app, {
                loop: true,
                delay: 10,
            });

            typewriter.typeString('Gallery showcases some <br> of the Rocket Launches')
                .pauseFor(2500)
                .deleteAll()
                .typeString('Keep Sliding Below<br> to see All pictures<br>')
                .pauseFor(1000)
                .typeString('<strong>✨Astro Guide!</strong>✨')
                .pauseFor(2500)
                .start();

        </script>
    </body>
</html>