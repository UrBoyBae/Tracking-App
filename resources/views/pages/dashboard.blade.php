<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">

    <title>Attendance Tracking | Admin</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboardStyle.css')}}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- IconScout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="bg-color"></div>
    <div class="main-content">
        <!-- SideBar -->
        <nav>
            <!-- Title -->
            <div class="logo">
                <div class="logo-image">
                    <img src="{{asset('assets/images/v-tax.png')}}" alt="">
                </div>
                <!-- <div class="logo-name">
                <span class="title">Attendance</span>
                <span class="title mt">Apps</span>
            </div> -->
            </div>

            <!-- Nav Links -->
            <div class="nav-menu">
                <ul class="nav-link">
                    <li>
                        <a href="{{route('dashboard')}}" class="selected-link">
                            <i class="uil uil-estate selected-link"></i>
                            <span class="link-name selected-link">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('karyawan')}}">
                            <i class="uil uil-users-alt"></i>
                            <span class="link-name">Data Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('absensi')}}">
                            <i class="uil uil-file-info-alt"></i>
                            <span class="link-name">Data Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-schedule"></i>
                            <span class="link-name">Permohonan Cuti</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- SideBar -->

        <!-- Content -->
        <div class="content-view">
            <div class="content-top">
                <div class="left-content">
                    <a href="{{route('dashboard')}}">
                        <i class="uil uil-estate"></i>
                    </a>
                    <span class="link-name">Dashboard</span>
                </div>
                <div class="right-content">
                    <div class="notification"></div>
                    <i class="uil uil-bell"></i>
                    <img src="{{asset('assets/images/account.png')}}" alt="">
                </div>
            </div>
            <div class="content-center">
                <div class="card-view">
                    <div class="card-content">
                        <i class="uil uil-users-alt"></i>
                        <span class="count">{{$kar}}</span>
                        <span class="title-card">Jumlah Karyawan</span>
                    </div>
                    <div class="card-content">
                        <i class="uil uil-file-info-alt"></i>
                        <span class="count">{{$abs}}</span>
                        <span class="title-card">Absensi</span>
                    </div>
                    <div class="card-content">
                        <i class="uil uil-schedule"></i>
                        <span class="count">{{$cuti}}</span>
                        <span class="title-card">Permohonan Cuti</span>
                    </div>
                </div>
                <span class="footer">Made With <i class="uil uil-heart" style="color: red;"></i> &copy; 2023</span>
            </div>
        </div>
        <!-- Content -->
    </div>
</body>

</html>