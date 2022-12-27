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

        /* CSS */
        .button-54 {
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
            color: #858796;
            cursor: pointer;
            border: 3px solid;
            padding: 0.25em 0.5em;
            box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-54:active {
            box-shadow: 0px 0px 0px 0px;
            top: 5px;
            left: 5px;
        }

        @media (min-width: 768px) {
            .button-54 {
                padding: 0.25em 0.75em;
            }
        }

        .view:hover{
            color: rgb(53, 53, 235);
        }

        .delete:hover{
            color: rgb(226, 52, 52)
        }

        .displayNone{
            font-size: 0px;
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
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0">API Keys Store</h3>
                        </div>

                        <div class="row d-flex d-lg-flex flex-column justify-content-lg-center align-items-lg-center" style="margin: 0px;margin-top: 17px;gap: 20px;">
                            <div class="col">
                                <div class="container d-flex flex-column justify-content-lg-center align-items-lg-center" style="gap: 40px;">
                                    <div class="row">
                                        <div class="col-xl-12 offset-xl-0 d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 100%;">
                                            <div class="d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" style="height: 100%;background: var(--bs-green);padding: 12px;gap: 10px;width: 100%;padding-right: 30px;padding-left: 30px;text-shadow: 0px 0px;box-shadow: 6px 6px;">
                                                <div class="d-lg-flex justify-content-lg-center align-items-lg-center" style="gap: 20px;">
                                                    <div class="form-group mb-3" style="width: 100%;"><small style="color: var(--bs-body-bg);font-size: 20px;">Key Name</small>
                                                        <div class="input-group" style="width: 100%;">
                                                            <span class="bg-white input-group-text InputBorder">
                                                                <i class="fas fa-database"></i>
                                                            </span>
                                                            <input id="key_name" class="form-control InputBorder" type="text" placeholder="Key Name" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/"></div>
                                                    </div>
                                                    <div class="form-group mb-3" style="width: 100%;"><small style="color: var(--bs-light);font-size: 20px;font-style: italic;text-align: left;">Key</small>
                                                        <div class="input-group">
                                                            <span class="bg-white input-group-text InputBorder">
                                                                <i class="fas fa-key"></i>
                                                            </span>
                                                            <input id="key_value" class="form-control InputBorder" type="text" placeholder="Key" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/"></div>
                                                    </div>
                                                </div>
                                                <button id="submitPost" class="button-54" role="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-center align-items-center" style="margin: 0px;">
                                            <div class="table-responsive" style="width: 700px;height: 50vh;">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 174.906px;">Key Name</th>
                                                            <th>Key Value</th>
                                                            <th style="width: 160.375px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($posts as $post)
                                                        <tr>
                                                            <td class="kname">{{$post->Key_name}}</td>
                                                            <td class="kval">{{$post->Key}}</td>
                                                            <td>
                                                                <div class="d-sm-flex d-lg-flex justify-content-sm-center justify-content-lg-center align-items-lg-center" style="height: auto;width: 100%;gap: 25px;">
                                                                    <i class="fas fa-eye view"></i>
                                                                    <i class="fas fa-trash delete"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
                $(".kval").toggleClass('displayNone displayBlock');
                $("#submitPost").click(function (){ 
                    console.log($("#key_name").val());
                    console.log($("#key_value").val());

                    let key_name = $("#key_name").val();
                    let key_value = $("#key_value").val();
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    if(key_value!="" && key_name!=""){
                        $.ajax({
                            url: "/posts",
                            type: "POST",
                            data: {
                                _token: CSRF_TOKEN,
                                type: 1,
                                Key_name: key_name,
                                Key_value: key_value 
                            },
                            cache: false,
                            success: function(dataResult){
                                console.log(dataResult);
                                $("body").html(dataResult);
                            }
                        });
                    }
                    else{
                        alert('Please fill all the field !');
                    }

                });

                $(".delete").click(function (){
                    let kname = $(this).closest('td').prev().prev().text()
                    let kval = $(this).closest('td').prev().text();
                    // console.log($(this).closest('td').prev().text());
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: "/posts/del",
                        type: "POST",
                        data: {
                            _token: CSRF_TOKEN,
                            type: 1,
                            Key_name: kname,
                            Key_value: kval 
                        },
                        cache: false,
                        success: function(dataResult){
                            console.log(dataResult);
                            $("body").html(dataResult);
                        }
                    });
                });

                $(".view").click(function (){
                    $(this).closest('td').prev().toggleClass('displayNone displayBlock');
                });

            });


        </script>

    </section>
</body>
