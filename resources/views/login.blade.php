<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">
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
            <!-- Title Login -->
            <div class="top">
                <h1 class="title">Log In</h1>
                <p id="text">remember to enter your username and password right</p>
            </div>
            <!-- Form Login -->
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-input">
                    <div class="input-group">
                        <i class="uil uil-user"></i>
                        <input type="text" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="input-group">
                        <i class="uil uil-padlock"></i>
                        <input type="password" name="password" placeholder="Password" id="password">
                    </div>
                    @if(session()->has('loginError'))
                        <small style="color:red;">
                            {{ session('loginError')}}
                        </small>
                    @endif
                </div>
                <a href="/pages/dashboard"><button class="btn-login" name="login">Log In</button></a>
            </form>
            <img src="{{asset('assets/images/v-tax.png')}}" width="70px">
        </div>
    </div>
    </div>
</body>

</html>