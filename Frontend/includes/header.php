<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description" content="">
    <title>VanGuard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/multi-select.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container">
        <a class="navbar-brand px-5" href="index">
            <img src="assets/images/logo2.png" style="max-width: 70px; height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-custom mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="welcome">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="next-steps">Next Steps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="overview">Overview</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                    <a class="nav-link dropbtn" href="trainers-page">Tranier Page</a>
                            <div class="dropdown-content">
                                <a href="#">Mission Statement</a>
                                <a href="#">Contests</a>
                                <a href="#">Chase Down Your Density</a>
                                <a href="#">Financial Independence</a>
                                <a href="#">The Vanguard Wealth Overview</a>
                            </div>
                        </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                    <a class="nav-link dropbtn" href="#">Education</a>
                        <div class="dropdown-content">
                            <a href="#">TNT Audio Training</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Store</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


