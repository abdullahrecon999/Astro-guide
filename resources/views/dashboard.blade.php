<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto:wght@900&display=swap" rel="stylesheet">
    
    <style>

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            #clock{
                font-size: 10px;
                font-family: 'Orbitron', sans-serif;
                border-style: inset;
                filter: hue-rotate(0deg) sepia(0%);
                position: relative;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            #clock{
                font-size: 20px;
                font-family: 'Orbitron', sans-serif;
                border-style: inset;
                filter: hue-rotate(0deg) sepia(0%);
                position: relative;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            #clock{
                font-size: 30px;
                font-family: 'Orbitron', sans-serif;
                border-style: inset;
                filter: hue-rotate(0deg) sepia(0%);
                position: relative;
            }
        }

    </style>

</head>

<body>
    <section id="page-top">
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                        <div class="sidebar-brand-icon">
                            <i class="fas fa-satellite"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">
                            <span style="color: #FF7F6A;">Astro Guide</span>
                        </div>
                    </a>
                    <hr class="sidebar-divider my-1">
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/dashboard') }}" style="font-size: 15.6px;">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.show') }}" style="font-size: 15.6px;">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                            <a class="nav-link" href="{{ url('/sat') }}" style="font-size: 15.6px;">
                                <i class="fas fa-satellite" style="font-size: 13.6px;"></i>
                                <span>Satellites</span>
                            </a>
                            <a class="nav-link" href="/home" style="font-size: 15.6px;">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                            <a class="nav-link" href="/posts" style="font-size: 15.6px;">
                                <i class="fas fa-key"></i>
                                <span>API Keys</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" style="font-size: 15.6px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 13.6px;">
                                        <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
                                        <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
                                    </svg>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                        <li class="nav-item"></li>
                    </ul>
                    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                            <div style="display: grid; width:220px;">
                                <span style="grid-area: 1 / 1;" id="clock" class="text-danger">12:00:00</span>
                                <div style="background: red; grid-area: 1 / 1; opacity:0.4;"></div>
                            </div>
                            
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0">Dashboard</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3 mb-4" style="width: 312.75px;">
                                <div class="card shadow border-start-primary py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span style="font-size: 20.2px;">Location</span></div>
                                                <div class="text-dark fw-bold h5 mb-0"><span id="location">00 : 00</span></div>
                                                <div class="text-dark fw-bold h5 mb-0"><span id="city" style="font-size: 14px;">Islamabad</span></div>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-search-location fa-2x text-gray-300"></i></div>
                                        </div>
                                        <div class="col" style="padding: 0px;padding-top: 10px;">
                                            <label class="form-label" style="padding: 5px;">City</label>
                                            <input type="text" name="city" id="citysearch">
                                            <input type="button" id="search" value="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto col-md-6 col-xl-3 col-xxl-8 offset-xxl-1 flex-grow-1 flex-shrink-1 mb-4" style="width: 644.25px;margin: 4px;">
                                <div class="card shadow border-start-info py-2" style="width: 100%;">
                                    <div class="card-body" style="padding-top: 3px;">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-uppercase text-info fw-bold text-xs mb-1"><span style="font-size: 20.2px;">Weather</span><i class="fas fa-cloud-sun fa-2x text-gray-300" style="font-size: 32px;"></i></div>
                                                <div class="row g-0 align-items-center">
                                                    <div class="col">
                                                        <picture>
                                                            <img id="weather" src="" width="100%">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-5 col-xl-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center justify-content-xxl-start"><i class="fa fa-moon-o" style="font-size: 32px;"></i>
                                        <h3 class="text-start text-primary fw-bold m-0">Moon Phase</h3>
                                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"></button>
                                            <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                <picture class="flex-grow-1">
                                                    <img id="moonphase" src="" style="width:auto;">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <script src="assets2/js/bs-init.js"></script>
        <script src="assets2/js/theme.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        
        <script>
            window.setInterval(function () {
                $('#clock').html(moment().format('HH : mm : ss'))
            }, 1000);
        </script>

        <script>

            $(document).ready(function () {
                
                getLocation();
                $("#search").click(function(){
                    if(!isNumber($("#citysearch").val()) && $("#citysearch").val() != ""){
                        // Api Call to get Coordinates
                        $.ajax({
                        url: "https://geocoding-api.open-meteo.com/v1/search?name="+$("#citysearch").val()+"&count=1",
                        type: "GET",
                        success: function(response) {
                            console.log(response)
                            $("#city").text(response.results[0].country+", "+response.results[0].name)
                            
                            position = {
                                lat: response.results[0].latitude,
                                long: response.results[0].longitude,
                                zone: response.results[0].timezone
                            }

                            LoadAPI(position)
                        },
                        error: function(e) {
                            alert(e);
                        }
                        });
                    }
                });
            });

            function isNumber(n) { return !isNaN(parseFloat(n)) && !isNaN(n - 0) }

            var x = document.getElementById("location");
            var city = document.getElementById("city");
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition,showError);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
            
            function showPosition(position) {
                x.innerHTML = position.coords.latitude +" : "+ position.coords.longitude;
                LoadAPI({lat:position.coords.latitude, long:position.coords.longitude})
            }

            function LoadAPI(position){
                // Load the weather and Moon phase api
                console.log(position);
                x.innerHTML = position.lat+" : "+position.long;

                let weatherurl = "http://www.7timer.info/bin/astro.php?lon="+position.long+"&lat="+position.lat+"&ac=0&lang=en&unit=metric&output=internal&tzshift=0"
                $("#weather").attr("src",weatherurl);
                $("#weather").css({'width' : '100%'});
                $("#moonphase").css({'width' : '100%'});

                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type:'POST',
                    url:'/getmoon',
                    data:{_token: CSRF_TOKEN, message:$(".getinfo").val(),lat:position.lat, long:position.long},
                    success:function(data) {
                        console.log(data.msg.data.imageUrl);
                        $("#moonphase").attr("src", data.msg.data.imageUrl);
                    }
                });
            }

            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "Permission Denied, Select Manually"
                        city.innerHTML = "..."
                        $("#moonphase").attr("src","img/NoData.jpg");
                        $("#moonphase").css({'width' : '200px'});
                        $("#weather").attr("src","img/NoData.jpg");
                        $("#weather").css({'width' : '200px'});
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information unavailable"
                        city.innerHTML = "..."
                        $("#moonphase").attr("src","img/NoData.jpg");
                        $("#moonphase").css({'width' : '200px'});
                        $("#weather").attr("src","img/NoData.jpg");
                        $("#weather").css({'width' : '200px'});
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "Request Timeout"
                        city.innerHTML = "..."
                        $("#moonphase").attr("src","img/NoData.jpg");
                        $("#moonphase").css({'width' : '200px'});
                        $("#weather").attr("src","img/NoData.jpg");
                        $("#weather").css({'width' : '200px'});
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "Unknown error occurred"
                        city.innerHTML = "..."
                        $("#moonphase").attr("src","img/NoData.jpg");
                        $("#moonphase").css({'width' : '200px'});
                        $("#weather").attr("src","img/NoData.jpg");
                        $("#weather").css({'width' : '200px'});
                        break;
                }
            }
        </script>

    </section>
</body>
