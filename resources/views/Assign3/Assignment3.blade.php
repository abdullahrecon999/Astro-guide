<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Assignment 3</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
            .page{
                margin-top: 20px;
                height: 50vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
            }
            .input_box{
                padding: 10px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
                gap:20px;
                background-color: #5555FF;
                height: auto;
                width: 30%;
                box-shadow: 14px 14px 1px -4px rgba(94,94,94,0.7);
                -webkit-box-shadow: 14px 14px 1px -4px rgba(94,94,94,0.7);
                -moz-box-shadow: 14px 14px 1px -4px rgba(94,94,94,0.7);
            }
            .output{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap:20px;
                padding-left: 10px;
                padding-right: 10px; 
                justify-content: center;
                align-content: center;
            }
            .gifbox{
                max-width:250px;
                min-width: 100px;
                height:auto;
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
  
        <main class="page">
            <div class="input_box">
                <h2 style="color:#FFFF55;">Giphy Search Box</h2>
                <form style="display: flex; flex-direction:column; gap:10px; align-items:center;">
                    <div>
                      <input type="text" id="search" class="form-control" placeholder="Search Query">
                    </div>
                    <div>
                        <button id="query" type="button" class="btn btn-warning">Search</button>
                        <button id="remove" type="button" class="btn btn-warning">Remove</button>
                    </div>
                  </form>
            </div>
        </main>

        <div class="output">
            <div class="gifbox"><img style="width: 100%;" src="https://media3.giphy.com/media/3osxYoufeOGOA7xiX6/giphy.gif?cid=b259a6aak109k9z4r2ljdg1yginfzfj8x3izckbqvwhmga2l&rid=giphy.gif&ct=g"></div>
            
        </div>

        <link rel="stylesheet" href="assets/css/styles.min.css">
        <script src="assets/js/script.min.js"></script>
        <script src="js/Assignment.js"></script>
    </body>
</html>