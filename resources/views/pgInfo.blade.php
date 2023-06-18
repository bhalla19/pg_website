<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Add pre compiled library files -->
    <!--Automatics css and js adder-->
    <!--auto compiled css & Js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(189, 185, 179);
        }

        * {
            background-color: rgb(189, 185, 179);
            margin: 0px;
            padding: 0px;
        }

        .carousel {
            width: 745px;
            height: 204px;
            position: absolute;
            left: 350px;
            top: 222px;
            border-radius: 34px;
        }


        .leftLogo img {
            display: inline-flex;
            flex-direction: row;
            width: 190px;
            position: relative;
            top: 10px;
            left: 90px;
            border-radius: 38px;
        }

        .middleNavbar ul li {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: -70px;
            left: 328px;
            padding: 0px 60px 0px 0px;
            font-size: 21px;
        }

        .middleNavbar ul a {
            text-decoration: none;
            color: black;
        }

        .middleNavbar ul li:hover {
            color: #892c6c;

        }

        .middleNavbar button {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 55px;
            left: 970px;
            font-size: 17px;
            padding: 7px 16px 7px 16px;
            color: white;
            background-color: black;
            border-radius: 12px;
        }

        .pg {
            display: inline-flex;
            flex-direction: row;
            justify-content: center;
        }

        .pg img {
            width: 387px;
            position: relative;
            display: inline-flex;
            flex-direction: row;
            left: 90px;
            top: 29px;
            border-radius: 20px;
            border: 4px solid #892c6c;
        }

        .pg h3 {
            height: 41px;
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 166px;
            left: -275px;
            color: #892c6c;
        }

        /* #carousel-demo{
            display: inline-flex;
            flex-direction: row;
            width: 340px;
            height: 340px;
        } */
        .facilities {
            position: absolute;
            top: 273px;
            left: 48px;
            border: 2px solid #892c6c;
            width: 232px;
            height: 322px;
            border-radius: 26px;
        }

        .facilities h5 {
            display: inline-flex;
            flex-direction: row;
            font-size: 18px;
            position: relative;
            top: -53px;
            left: 33px;
            color: #892c6c;
        }

        .facilities h1 {
            color: rgb(138, 31, 31);
            position: relative;
            top: -74px;
            left: 25px;
        }

        /* .facilities img {
            width: 34px;
        } */
    </style>
</head>

<body>
    <div class="leftLogo">
        <img src="images/logo-main.png" alt="">
    </div>
    <div class="middleNavbar">
        <nav>
            <ul>
                <a href="{{ '/' }}">
                    <li>Home</li>
                </a>
                <a href="{{ url('about') }}">
                    <li>About</li>
                </a>
                <a href="{{ url('colleges') }}">
                    <li>Colleges</li>
                </a>
                <a href="{{ url('findYourRoomie') }}">
                    <li>Find Your roomie</li>
                </a>
                <a href="{{ url('contactUs') }}"><button class="btn btn-secondary" id="ContactUs">Contact
                        Us</button></a>
            </ul>
        </nav>
    </div>
    <div class="slider">
        <div class="container">
            <!--Bootstrap card with slider class-->
            <div id="carousel-demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item">
                        <img src="images/pg_room.jpg">
                    </div>
                    <div class="item">
                        <img src="images/pgroom2.jpg">
                    </div>
                    <div class="item active">
                        <img src="images/pgroom3.jpg">
                    </div>
                </div>
                <!--slider control for card-->
                <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left">
                    </span>
                </a>
                <a class="right carousel-control" href="#carousel-demo" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right">
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="facilities">
        {{-- <img src="images/star.jpg" alt=""> --}}
        <b>
            <h1>Facilities</h1>
            <h5>Free Wifi 24 x 7</h5> <br>
            <h5>No Electricity cutouts</h5> <br>
            <h5>3 time meal</h5> <br>
            <h5>Fridge</h5> <br>
            <h5>Geyser</h5> <br>
            <h5>Almirah</h5> <br>
            <h5>Cleaning staff</h5> <br>
        </b>
    </div>

</body>

</html>
