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
        .pg{
            display: inline-flex;
            flex-direction: row;
            justify-content: center;
        }
        .pg img{
            width: 464px;
            position: relative;
            display: inline-flex;
            flex-direction: row;
            left: 90px;
            top: 29px;
            border-radius: 20px;
            border: 3px solid #892c6c;
        }
        .pg h3{
            height: 41px;
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 180px;
            left: -320px;
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
    <div class="pg">
        <a href="{{route('pg')}}"><img src="images/pgroom3.jpg" alt="">
        <h3>Bedi paying Guest</h3></a>
    </div>
</body>

</html>
