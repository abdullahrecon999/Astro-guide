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
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="assets/css/FormInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

    <link rel="stylesheet" href="assets3/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets3/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets3/css/Toggle-Switches.css">

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
        .addComment:hover{
            color: rgb(53, 53, 235);
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
                            <a class="nav-link" href="#" style="font-size: 15.6px;">
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
                                <span style="grid-area: 1 / 1; text-align:center" id="clock" class="text-danger">12:00:00</span>
                                <div style="background: red; grid-area: 1 / 1; opacity:0.4;"></div>
                            </div>
                            <ul class="navbar-nav flex-nowrap ms-auto">
                                <div class="d-none d-sm-block topbar-divider"></div>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <h3 class="text-dark mb-1">Satellites</h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow border-start-primary py-2" style="height: 181.781px;">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>options</span></div>
                                                <fieldset class="d-flex d-lg-flex flex-column justify-content-lg-center align-items-lg-start" style="color: var(--bs-gray-900);height: 121.578px;">
                                                    <legend>View Satellites</legend>
                                                    <div class="toggle">
                                                        <input type="radio" id="cond_new" name="options" value="track" checked="checked">
                                                        <label class="form-label" for="cond_new">Tracking</label>
                                                        <input type="radio" id="cond_used" name="options" value="all">
                                                        <label class="form-label" for="cond_used">All</label>
                                                        <input type="radio" id="cond_view" name="options" value="reviews">
                                                        <label class="form-label" for="cond_view">Reviews</label>
                                                    </div>
                                                </fieldset>
                                                <div class="text-dark fw-bold h5 mb-0"><span></span></div>
                                            </div>
                                            <div class="col-auto"><i class="icon ion-android-options fa-2x text-gray-300"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="margin-top: 27px;">
                                <div class="card shadow mb-4 all" style="max-height: 500px;">
                                    <div class="card-header py-3">
                                        <h6 class="text-primary m-0 fw-bold">All</h6>
                                    </div>
                                    <div class="w-full p-4" style="background-color: #F0F0F0; overflow-y: auto;">
                                        <ul class="SatelliteData">

                                            <li class="satdata flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                                                <div class="flex ml-2">
                                                    <img src="/img/satellite.svg" width="40" height="auto">
                                                    <div class="flex flex-col ml-2"> 
                                                        <span class="satname font-medium text-black">ISS (ZARAYA)</span> 
                                                        <span class="satid text-sm text-gray-400 truncate">NORAD Id: </span> 
                                                    </div>
                                                </div>
                                                <div class="flex flex-col items-center"> 
                                                    
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="card shadow mb-4 track" style="max-height: 500px;">
                                    <div class="card-header py-3">
                                        <h6 class="text-primary m-0 fw-bold">Track</h6>
                                    </div>
                                    <div class="w-full p-4" style="background-color: #F0F0F0; overflow-y: auto;">
                                        <ul class="sattrackerData">

                                            @foreach ($sats as $sat)
                                            <li class="trackdata flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                                                <div class="flex ml-2"> 
                                                    <img src="/img/satellite.svg" width="40" height="auto">
                                                    <div class="flex flex-col ml-2"> 
                                                        <span class="satname font-medium text-black">{{$sat->sat_name}}</span> 
                                                        <span class="satid text-sm text-gray-400 truncate">NORAD Id: {{$sat->sat_id}}</span> 
                                                    </div>
                                                </div>
                                                <div class="flex flex-col items-center">
                                                    <label>Your Rating</label>
                                                    <div class="rating" data-rate-value = {{$sat->rating}}></div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="card shadow mb-4 review" style="max-height: 500px;">
                                    <div class="card-header py-3">
                                        <h6 class="text-primary m-0 fw-bold">Reviews</h6>
                                    </div>
                                    <div class="w-full p-4" style="background-color: #F0F0F0; overflow-y: auto;">
                                        <ul class="SatelliteReviews">

                                            @foreach ($sats as $satr)
                                            <li class="satRev flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                                                <div class="flex ml-2">
                                                    <img src="/img/satellite.svg" width="40" height="auto">
                                                    <div class="flex flex-col ml-2">
                                                        <span class="satname font-medium text-black">{{$satr->sat_name}}</span> 
                                                        <span class="satid text-sm text-gray-400 truncate">NORAD Id: {{$satr->sat_id}}</span> 
                                                    </div>
                                                </div>
                                                <div class="flex flex-col items-center"> 
                                                    <i class="far fa-comment-dots addComment"></i>
                                                    <label>Average</label><div class="rating" data-rate-value = {{$satr->rating}}></div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
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
        <script src="assets3/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
        <script src="assets3/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
        <script src="assets2/js/bs-init.js"></script>
        <script src="assets2/js/theme.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="/js/rater.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            window.setInterval(function () {
                $('#clock').html(moment().format('HH : mm : ss'))
            }, 1000);
        </script>

        <script>

            $(document).ready(function () {
                // we need to get the Satellites in tracker table
                // calculate average rating of every satellite by matching their Sat_id
                // Return Satellites with their average ratings

                $(".addComment").click(function (){
                    Swal.fire({
                    title: 'Enter your review',
                    input: 'textarea'
                    }).then(function(result) {
                    if (result.value) {
                        Swal.fire(result.value)
                    }
                    })
                });

                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "get",
                    url: "/sat/review",
                    data: {
                        _token: CSRF_TOKEN,
                        type: 1
                    },
                    cache: false,
                    success: function (response) {
                        console.log(response);
                    }
                });
            });

        </script>

        <script>
            $(document).ready(function () {
       
                $.get('SatelliteTLE.txt', function(textData, status) {
                    var aLines = textData.split("\n")
                    $.each(aLines, function(n, sLine) {
                        //console.log(aLines[n].split(":"));
                        $(".SatelliteData").append('<li class="satdata flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition"><div class="flex ml-2"><img src="/img/satellite.svg" width="40" height="auto"><div class="flex flex-col ml-2"><span class="satname font-medium text-black">'+aLines[n].split(":")[0]+'</span><span class="satid text-sm text-gray-400 truncate">NORAD Id:'+aLines[n].split(":")[1]+'</span></div></div><div class="flex flex-col items-center"></div></li>');
                    });
                }, 'text');

                $(".all").hide();
                $(".review").hide();
                $('.toggle input').on('change', function() {

                    if($('input[name=options]:checked', '.toggle').val() === "all"){
                        console.log($('input[name=options]:checked', '.toggle').val());
                        $(".all").fadeIn();
                        $(".track").hide();
                        $(".review").hide();
                    }
                    else if($('input[name=options]:checked', '.toggle').val() === "track"){
                        console.log($('input[name=options]:checked', '.toggle').val());
                        $(".all").hide();
                        $(".track").fadeIn();
                        $(".review").hide();
                    }
                    else if($('input[name=options]:checked', '.toggle').val() === "reviews"){
                        console.log($('input[name=options]:checked', '.toggle').val());
                        $(".all").hide();
                        $(".track").hide();
                        $(".review").fadeIn();
                    }
                });

                $(document).on('click', '.satdata', function() {
                    let satname = $(this).find('.satname').text();
                    let satid = $(this).find('.satid').text().split(":")[1].trim();
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: "get",
                        url: "https://tle.ivanstanojevic.me/api/tle/"+satid+"/propagate",
                        success: function (response) {
                            console.log(response);
                            let alt = response.geodetic.altitude;
                            let long = response.geodetic.longitude;
                            let lat = response.geodetic.latitude;
                            let satdate = response.parameters.date;

                            let format = "<div style='display:flex; flex-direction:column; justify-items:left; align-items:left;'><p><b>Latitude: </b>"+lat+"</p><p><b>Longitude: </b>"+long+"</p><p><b>Altitude: </b>"+alt+"</p><p><b>Date:</b>"+satdate+"</p></div>"

                            Swal.fire({
                                title: '<strong>'+satname+'</strong>',
                                html:format,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText:'Track this Sat',
                                cancelButtonText:'Cancel',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        url: "/posts/add",
                                        type: "POST",
                                        data: {
                                            _token: CSRF_TOKEN,
                                            type: 1,
                                            sat_id:satid,
                                            sat_name:satname
                                        },
                                        cache: false,
                                        success: function(dataResult){
                                            console.log(dataResult);
                                        }
                                    });
                                    Swal.fire('Added to Tracking List!', '', 'success')
                                }
                            })

                        }
                    });
                });

            });
        </script>

        <script>

            $(document).ready(function () {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                //$(".sattrackerData").append('<li class="satdata flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition"><div class="flex ml-2"><img src="/img/satellite.svg" width="40" height="auto"><div class="flex flex-col ml-2"><span class="satname font-medium text-black">'+'</span><span class="satid text-sm text-gray-400 truncate">NORAD Id:'+'</span></div></div><div class="flex flex-col items-center"></div></li>');
                $.ajax({
                    type: "get",
                    url: "/sat",
                    data: {
                        _token: CSRF_TOKEN,
                        type: 1
                    },
                    cache: false,
                    success: function (response) {
                        console.log(response);
                    }
                });

                $(document).on('click', '.trackdata', function() {
                    //let satname = $(this).find('.satname').text();
                    let satname = $(this).find('.satname').text();
                    let satid = $(this).find('.satid').text().split(":")[1].trim();
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: "get",
                        url: "https://satellites.fly.dev/passes/"+satid+"?lat=33.665&lon=72.991&limit=1&days=2",
                        success: function (response) {
                            console.log(response);
                            let alt = response[0].culmination.alt;
                            let az =  response[0].culmination.az;
                            let az_octant = response[0].culmination.az_octant;
                            let satdate = response[0].culmination.utc_datetime;

                            let format = "<div style='display:flex; flex-direction:column; justify-items:left; align-items:left;'>\
                            <label>New Rating: <input id='new_rating' type='number' min='0' max='6' step='1' value='2'> </label>\
                            <p>Next Pass</p><p><b>Altitude: </b>"+alt+"</p><p><b>Azimuth Octant: </b>"+az_octant+"</p><p><b>Azimuth: </b>"+az+"</p><p><b>Date:</b>"+satdate+"</p></div>"

                            Swal.fire({
                                title: '<strong>'+satname+'</strong>',
                                html:format,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText:'Update',
                                cancelButtonText:'Cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    alert($("#new_rating").val());
                                    let new_rating = $("#new_rating").val();
                                    $.ajax({
                                        url: "/posts/update",
                                        type: "POST",
                                        data: {
                                            _token: CSRF_TOKEN,
                                            type: 1,
                                            sat_id:satid,
                                            sat_name:satname,
                                            rating:new_rating
                                        },
                                        cache: false,
                                        success: function(dataResult){
                                            console.log(dataResult);
                                            location.reload();
                                        }
                                    });

                                    Swal.fire('Ratings Updated!', '', 'success')
                                }
                            })

                        }
                    });
                });

            });

        </script>

    <script>
        $(document).ready(function () {

            var options = {
                max_value: 6,
                step_size: 0.5,
                readonly:true,
            }
            $(".rating").rate(options);
        });
    </script>
    </section>

</body>
