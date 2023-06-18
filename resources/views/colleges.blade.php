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
        <style>
             body {
            background-color: rgb(189, 185, 179);
        }

        * {
            background-color: rgb(189, 185, 179);
            margin: 0px;
            padding: 0px;
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
        .tecnia img{
            width: 434px;
            position: relative;
            top: 29px;
            left: 65px;
            border-radius: 40px;
            display: inline-flex;
            flex-direction: row;
        }
        .tecnia h3{
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 183px;
            left: -360px;
            color: #892c6c;
        }
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
                <li>Colleges</li>
                <a href="{{ url('findYourRoomie') }}">
                    <li>Find Your roomie</li>
                </a>
                <a href="{{url('contactUs')}}"><button class="btn btn-secondary" id="ContactUs">Contact Us</button></a>
            </ul>
        </nav>
    </div>
    {{-- <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div> --}}
    <div class="tecnia">
        <a href="{{url('tecniaPG')}}"><img src="images/tecnia.jpg" alt="">
        <h3>Tecnia Institute of Advanced Studies</h3></a>
    </div>
</body>
</html>
