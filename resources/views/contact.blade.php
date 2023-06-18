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
            padding: 0px;
            margin: 0px;

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

        .box {
            display: inline-flex;
            flex-direction: row;
            justify-content: center;
            position: relative;
            background-color: #892c6c;
            width: 56%;
            /* border: 2px solid red; */
            height: 455px;
            left: 0px;
            border-radius: 0px 100px 100px 0px;
            border: 4px solid black;
        }
        .name{
            display: inline-flex;
            flex-direction: row;
            font-size: 30px;
            color: white;
            position: relative;
            top: 75px;
        }
        #name{
            position: relative;
            top: 70px;
            padding: 0px 40px 0px 57px;
            display: inline-flex;
            flex-direction: row;
        }
        .phoneNo{
            position: relative;
            top: 70px;
            font-size: 26px;
            color: white;
            display: inline-flex;
            flex-direction: row;
        }
        #phoneNo{
            position: relative;
            top: 65px;
            padding: 0px 59px 0px;
            display: inline-flex;
            flex-direction: row;
        }
        #email{
            position: relative;
            top: 57px;
            padding: 0px 0px 0px 62px;
            display: inline-flex;
            flex-direction: row;
        }
        .email{
            font-size: 25px;
            color: white;
            position: relative;
            top: 62px;
            display: inline-flex;
            flex-direction: row;
        }
        .img img{
            display: inline-flex;
            flex-direction: row;
            position: absolute;
            width: 429px;
            left: 834px;
            top: 240px;
            border-radius: 59px 0px 0px 59px;
            border:4px solid #892c6c;
        }
        .submit{
            display: inline-flex;
            flex-direction: row;
            position: relative;
            top: 57px;
            left: 37px;
            /* font-size: 27px; */
            padding: 6px 34px 9px 34px;
            border-radius: 20px;
            background: yellow;
            color: mediumvioletred;
        }
        .img img{
            animation-name: vaibhav;
            animation-duration: 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes vaibhav {
            from {
                width: 429px;
                left: 834px;
            }

            to {
                width: 450px;
                left: 800px
            }
        }
        input:hover{
            border: 3px solid black;
        }
        button:hover{
            border: 3px solid black;
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
                {{-- <button class="btn btn-secondary" id="ContactUs">Contact Us</button> --}}
            </ul>
        </nav>
    </div>
    <div class="box">
        <form action="{{route('formCreate')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    placeholder="Enter your Full Name" aria-describedby="helpId" />
                    <span>
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="form-group">
                <label for="phoneNo" class="phoneNo">Phone no</label>
                <input type="text" name="phoneNo" id="phoneNo" class="form-control"
                    placeholder="Enter your Phone no" aria-describedby="helpId" />
                    <span>
                        @error('phoneNo')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="form-group">
                <label for="email" class="email">Email</label>
                <input type="text" name="email" id="email" class="form-control"
                    placeholder="Enter your Email" aria-describedby="helpId" />
                    <span>
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
    <div class="img">
        <img src="images/contactus.jpg" alt="">
    </div>

</body>

</html>
