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
            margin: 0px;
            padding: 0px;
            background-color: rgb(189, 185, 179);

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
            top: -80px;
            left: 305px;
            padding: 0px 28px 0px 23px;
            /* color: black; */
            font-size: 26px;
        }

        .middleNavbar ul a {
            text-decoration: none;
            color: black;
        }

        .middleNavbar ul li:hover {
            color: #892c6c;
        }

        .middleNavbar ul button {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: -84px;
            left: 360px;
            font-size: 23px;
            border-radius: 18px;
            background-color: black;
            color: white;
        }

        .midContent {
            display: inline-flex;
            flex-direction: row;
        }

        .midContent h2 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 0px;
            left: 130px;
        }

        .midContent h5 {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 75px;
            left: 20px;
            font-size: 32px;
            color: #892c6c;
        }

        .midContent img {
            width: 400px;
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 150px;
            left: 780px;
            border-radius: 40px;
            border: 4px solid #892c6c;
        }

        .mid2p {
            display: inline-flex;
            /* justify-content: space-between; */
            flex-direction: row;
        }

        .mid2p p {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 208px;
            left: 130px;
            font-size: 20px;
            color: #892c6c;
        }

        .findYourRoomie {
            display: inline-flex;
            flex-direction: row;
        }

        .findYourRoomie button {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 614px;
            left: 350px;
            background: grey;
            font-size: 24px;
            padding: 5px 30px 5px 30px;
            border-radius: 16px;
        }

        .midContent img {
            animation-name: vaibhav;
            animation-duration: 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes vaibhav {
            from {
                width: 420px;
            }

            to {
                width: 430px;
            }
        }

        .empty {
            width: 100%;
            height: 30px;
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 312px;
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
        <h2>Roomie</h2>
        <h5>Let us help you find your ideal dorm-mate!</h5>
        <img src="images/roommates.avif" alt="">
    </div>
    <div class="mid2p">
        <p>"ipuHomes - The ultimate roommate matchmaker! <br> With our state-of-the-art matching algorithm, finding your
            perfect roommate has <br> never been easier. Say goodbye to awkward interviews and <br>hello to compatible
            living with ipuHomes!"</p>
    </div>
    <div class="findYourRoomie">
        <a href="{{ url('makeYourRoomie') }}"><button>Find Your Roomie</button></a>
    </div>
    <div class="empty">

    </div>
</body>

</html>
