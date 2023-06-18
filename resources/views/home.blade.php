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

        .midContent h2 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 28px;
            left: 110px;
            font-size: 50px;
        }

        .mid h2 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 38px;
            color: #892c6c;
        }

        .midContent p {
            display: inline-flex;
            flex-direction: row;
            width: 394px;
            height: -7px;
            position: relative;
            top: 78px;
            font-size: 24px;
            left: 110px;
        }

        .midContent img {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 190px;
            width: 650px;
            left: 568px;
            border-radius: 90px;

        }

        .midContent img {
            border: 4px solid #892c6c;
            animation-name: vaibhav2;
            animation-duration: 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes vaibhav2 {
            from {
                width: 650px;
            }

            to {
                width: 670px;
            }
        }

        .midContent button {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 325px;
            left: -200px;
            background-color: black;
            color: white;
            border-radius: 8px;
            padding: 10px 22px 10px 22px;
            font-size: 17px;
        }

        .logos {
            display: inline-flex;
            flex-direction: row;
            width: 37%;
            /* border: 2px solid red; */
            position: absolute;
            top: 730px;
            left: 110px;
            height: 69px;
        }

        .roofs img {
            display: inline-flex;
            flex-direction: row;
            width: 45px;
            position: relative;
            top: 17px;
            border-radius: 16px;
        }

        .roofs h6 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 25px;
            left: 8px;
            transition-property: color;
            transition-duration: 1s;
        }

        .roofs h6:hover {
            color: #892c6c;
            font-size: 20px;
        }

        .roomies img {
            display: inline-flex;
            flex-direction: row;
            width: 45px;
            position: relative;
            top: 22px;
            left: 60px;
            border-radius: 7px;
        }

        .roomies h6 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 28px;
            left: 65px;
            transition-property: color;
            transition-duration: 1s;
        }

        .roomies h6:hover {
            color: #892c6c;
            font-size: 20px;
        }

        .community img {
            display: inline-flex;
            flex-direction: row;
            width: 40px;
            position: relative;
            top: 16px;
            left: 104px;
            border-radius: 10px;
        }

        .community h6 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 24px;
            left: 116px;
            transition-property: color;
            transition-duration: 1s;
        }

        .community h6:hover {
            color: #892c6c;
            font-size: 20px;
        }

        footer {
            display: inline-flex;
            position: absolute;
            flex-direction: row;
            top: 834px;
            left: 117px;
            color: #892c6c;
        }

        .box2 h1 {
            color: black;
            font-size: 30px;
        }

        .mail {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 21px;
            left: 90px;
        }

        .mail h2 {
            color: black;
            display: inline-flex;
            flex-direction: row;
            position: relative;
            left: -36px;
            font-size: 27px;
        }

        .mail h3 {
            font-size: 25px;
        }

        .call {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 62px;
            left: -289px;
        }

        .call h2 {
            color: black;
            display: inline-flex;
            flex-direction: row;
            position: relative;
            left: -36px;
            font-size: 27px;
        }

        .call h3 {
            font-size: 25px;
        }

        .emptyBox {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 477px;
            width: 100%;
            height: 44px;
            /* border: 2px solid black; */
            left: -626px;
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
                <a href="{{url('colleges')}}"><li>Colleges</li></a>
                <a href="{{ url('findYourRoomie') }}">
                    <li>Find Your roomie</li>
                </a>
                <a href="{{ url('contactUs') }}"><button class="btn btn-secondary" id="ContactUs">Contact
                        Us</button></a>
            </ul>
        </nav>
    </div>
    <div class="midContent">
        <h2>Cool Crib. Squad</h2> <br>
        <div class="mid">
            <h2>sorted. ipuHomes</h2>
        </div>
        <p>ipuHomes - Your ultimate wingman for finding the coolest crib and your ideal squad at IP University!
            Because life's too short for bad roommates and long commutes.
        </p>
        <img src="images/image.jpg" alt="">

        <button>Get Started</button>
    </div>

    <div class="logos">
        <div class="roofs">
            <img src="images/roof.jpg" alt="">
            <h6>Roofs</h6>
        </div>
        <div class="roomies">
            <img src="images/rooms1.png" alt="">
            <h6>Roomies</h6>
        </div>
        <div class="community">
            <img src="images/community.jpg" alt="">
            <h6>Community</h6>
        </div>
    </div>
    <footer>
        <div class="box2">
            <h1>Contact Info</h1>
            <div class="mail">
                <h2>Mail:</h2>
                <h3>ipuHomesSupport@gmail.com</h3>
            </div>
            <div class="call">
                <h2>Call:</h2>
                <h3>9315175990</h3>
            </div>
        </div>

    </footer>
    <div class="emptyBox">

    </div>
</body>

</html>
