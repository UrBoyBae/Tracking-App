<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/icon-app.png')}}" rel="shortcut icon">
    <title>Attendance Tracking | Log In</title>
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('assets/css/loginStyle.css')}}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- IconScout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="container" id="container">
        <!-- Card Login -->
        <div class="card-login">
            <div class="image-content" id="wrapBackdrop">
                <img id="backdrop">
                <!-- images light mode from https://unsplash.com/photos/PGdW_bHDbpI -->
                <!-- images dark from https://unsplash.com/photos/u8Jn2rzYIps -->

                <div class="blur-effect"></div>
            </div>
            <div class="login-form">
                <!-- App Name -->
                <div class="app-name">
                    <span>V-Attendance</span>
                </div>
                <div class="main-form">
                    <!-- Title Login -->
                    <div class="top">
                        <span class="title">Log In</span>
                        <p class="text">Don't forget to enter the appropriate username and password</p>
                    </div>
                    <!-- Form Login -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-input">
                            <div class="input-group" id="wrap-username">
                                <i class="uil uil-user" id="user-icon"></i>
                                <input type="text" id="username" placeholder="Username" name="username" autocomplete="off" required>
                            </div>
                            <div class="input-group" id="wrap-password">
                                <i class="uil uil-padlock" id="pass-icon"></i>
                                <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" required>
                            </div>
                            @if(session()->has('loginError'))
                            <small class="error-message">
                                *{{ session('loginError')}}
                            </small>
                            @endif
                        </div>
                        <button class="btn-login" name="login">Log In</button>
                    </form>
                </div>
                <span class="footer">&copy; 2023 V-Attendance. All Rights Reserved</span>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets/js/mainLogin.js')}}"></script>

</html>