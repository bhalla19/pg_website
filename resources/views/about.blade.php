<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            background-color: rgb(189, 185, 179);
            margin: 0px;
            padding: 0px;
            /* color: #892c6c; */
            /* color: red; */
        }

        .leftLogo {
            display: inline-flex;
            flex-direction: row;
            /* width: 172px;
            height: 105px;
            border: 2px solid red;
            margin: 14px 0px 0px 20px; */
        }

        .middleNavbar {
            display: inline-flex;
            flex-direction: row;
        }

        .middleNavbar ul li {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            left: 52px;
            top: -43px;
            padding: 0px 0px 0px 71px;
            font-size: 21px;
            border: 0px solid rgb(189, 185, 179);
            transition-property: background-color;
            transition-duration: 2s;
        }

        .middleNavbar ul li:hover {
            color: #892c6c;
            font-size: 25px;
        }

        .middleNavbar button {
            position: absolute;
            display: inline-flex;
            flex-direction: row;
            top: 43px;
            left: 959px;
            padding: 16px 28px 17px 22px;
            font-size: 18px;
            border-radius: 15px;
            transition-property: background-color;
            transition-duration: 1s;
            background-color: black;
            color: white;
        }

        .middleNavbar button:hover {
            background-color: white;
            color: black;
        }

        .middleNavbar ul a {
            text-decoration: none;
            color: black;
        }

        .content {
            position: absolute;
            top: 232px;
            left: 100px;
        }

        .content h1 {
            /* position: absolute;
            top: 254px;
            left: 115px; */
            font-size: 50px;
            color: #892c6c;
        }

        .content img {
            width: 390px;
            position: relative;
            display: inline-flex;
            flex-direction: row;
            left: 688px;
            top: -365px;
            border-radius: 0px 100px 0px 49px;
            border: 4px solid #892c6c;

        }

        .content img:hover {
            animation-name: vaibhav;
            animation-duration: 1s;
            animation-iteration-count: 1s;
            animation-fill-mode: forwards;
        }

        @keyframes vaibhav {
            from {
                width: 390px;
            }

            to {
                width: 410px;
            }
        }

        .midContent {
            position: absolute;
            top: 615px;
            left: 106px;
        }

        .midContent h2 {
            font-size: 45px;
            position: relative;
            top: 120px;
            left: -34px;
        }

        .second {
            position: relative;
            top: -15px;
            color: #892c6c;
        }

        .midContent img {
            position: absolute;
            display: inline-flex;
            flex-direction: row;
            top: 74px;
            width: 0px;
            left: 510px;
            height: 0px;
            min-width: 120%;
            max-width: 100%;
            min-height: 152%;
            max-height: 100%;
            border-radius: 24px;
        }
        .midContent img:hover{
            border: 4px solid #892c6c;
        }

        .midContent p {
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 150px;
            left: -35px;
            font-size: 20px;
        }

        marquee {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 575px;
            left: 0px;
            font-size: 25px;
            color: black;
            background-color: yellow;
            border-radius: 45px;
        }

        .box {
            background-color: #892c6c;
            width: 728px;
            height: 500px;
            position: relative;
            top: 990px;
            left: 502px;
            display: inline-flex;
            flex-direction: row;
            border-radius: 0px 27px 27px 0px;
        }

        .box p {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 53px;
            background-color: #892c6c;
            left: 183px;
            color: white;
            font-size: 21px;

        }

        .box img {
            width: 555px;
            height: 500px;
            position: absolute;
            display: inline-flex;
            flex-direction: row;
            top: 0px;
            left: -484px;
            border-radius: 27px 0px 0px 27px;
        }
        .box img:hover{
            border: 4px solid #892c6c;
        }

        .box h4 {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 243px;
            left: 180px;
            font-size: 18px;
            background-color: #892c6c;
            color: white;
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

        .aboutUs h1 {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 1705px;
            left: 412px;
            font-size: 50px;
            color: #892c6c;
        }

        .box1 {
            display: inline-flex;
            position: relative;
            width: 419px;
            height: 567px;
            border: 3px solid #892c6c;
            top: 1190px;
            left: 150px;
            border-radius: 28px;
        }

        .box1 h2 {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 30px;
            left: 150px;
            font-size: 45px;
            color: #892c6c;

        }

        .box1 p {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            top: 128px;
            left: 56px;
            font-size: 26px;
            right: 35px;
        }

        .box2 {
            width: 415px;
            display: inline-flex;
            flex-direction: row;
            height: 564px;
            border: 3px solid #892c6c;
            position: relative;
            top: 1187px;
            left: 239px;
            border-radius: 28px;
        }

        .box2 h2 {
            position: absolute;
            top: 30px;
            left: 120px;
            font-size: 45px;
            color: #892c6c;
        }

        .box2 p {
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            font-size: 27px;
            top: 125px;
            left: 40px;
            right: 34px;
        }

        .box3 {
            width: 710px;
            display: inline-flex;
            flex-direction: row;
            height: 232px;
            border: 3px solid #892c6c;
            position: absolute;
            top: 2468px;
            left: 270px;
            border-radius: 28px;
        }

        .box3 h2 {
            display: inline-flex;
            position: absolute;
            top: 22px;
            left: 245px;
            font-size: 34px;
            color: #892c6c;
        }

        .box3 p {
            display: inline-flex;
            position: absolute;
            top: 85px;
            font-size: 22px;
            left: 45px;
            right: 21px;
        }
        .empty{
            width: 100%;
            height: 30px;
            position: relative;
            display: inline-flex;
            flex-direction: row;
            top: 1513px;
        }
        .content img {
            animation-name: vaibhav;
            animation-duration: 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes vaibhav {
            from {
                width: 0%;
            }

            to {
                width: 70%;
            }
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
                <a href="{{url('findYourRoomie')}}"><li>Find Your roomie</li></a>
                <a href="{{url('contactUs')}}"><button class="btn btn-secondary" id="ContactUs">Contact Us</button></a>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h1>
            ipuHomes - where finding your <br> perfect roommate and dream <br> accommodation is easier than <br> finding
            a parking spot on <br> campus!</h1>
        <img src="images/logo1.png" alt="">
    </div>
    <div class="midContent">
        <h2>We didn't find it for us,</h2><br>
        <div class="second">
            <h2>so we created it for you</h2>
        </div>
        <img src="images/pg1.jpg" alt="">
        <p>That's essentially our story in one sentence. <br>
            Crammed up hostels or cooped up PGs - not much of a choice, <br> is it? Thats why we created ipuHomes -
            a place designed by <br> people who've been in your shoes. Understand you. And are <br> inspired by you.</p>
    </div>
    <marquee behavior="" direction="Right">Book Your Bed Now</marquee>
    <div class="box">
        <img src="images/image2.jpg" alt="">
        <p>Welcome to ipuHomes - the ultimate student <br> community for finding your dream accommodation <br> near
            Ip University Colleges! We're not just another <br> housing platform - we're the Tinder of roommates, <br> the
            Yelp of apartments, and the Facebook of student <br> life.</p>

        <h4>Our team of student ambassadors has scoured <br> every nook and cranny of Delhi to bring you the <br>
            best and most affordable accommodation options <br> around campus. From luxurious private apartments <br> to
            quirky PGs, we've got it all. But we're not just <br> about finding you a roof over your head - we're about
            <br> building a community that will be your home away <br> from home.
        </h4>
    </div>
    <div class="aboutUs">
        <h1>What we are About</h1>
        <div class="box1">
            <h2>Roof</h2>
            <p>Our team of student ambassadors has scoured every nook and cranny of Delhi to bring you the best and
                most affordable accommodation options around campus. From luxurious private apartments to quirky PGs,
                we've got it all. But we're not just about finding you a roof over your head - we're about building a
                community that will be your home away from home.
            </p>
        </div>
        <div class="box2">
            <h2>Roomie</h2>
            <p>We're here to help you navigate the tricky waters of roommate dynamics, lease agreements, and pesky
                landlords. Our platform allows you to create a profile that highlights your interests, personality
                traits, and pet peeves - so you can find a roomie who complements you like PB&J, or someone who
                challenges you like a spicy biryani.
            </p>
        </div>
        <div class="box3">
            <h2>Community</h2>
            <p>But that's not all - we' coming up with new and exciting ways to bring our community together. From
                weekend trips to nearby hill stations to potluck dinners to speed dating events (for both roomies and
                potential partners - because we're all about multitasking), we've got something for everyone.
            </p>
        </div>
    </div>
    <div class="empty">

    </div>
</body>

</html>
