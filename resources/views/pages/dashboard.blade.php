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
    <div class="my-container">
        <!-- SideBar -->
        <div class="my-sidebar">
            <!-- Brand -->
            <div class="my-brand">
                <img src="{{asset('assets/images/icon-app.png')}}" width="40px">
                <span class="my-title">V-Attendance</span>
            </div>
            <!-- Menu -->
            <div class="my-sidebar-menu">
                <ul class="my-sidebar-link">
                    <li>
                        <a href="{{route('dashboard')}}" class="my-selected-link">
                            <i class="uil uil-estate my-selected-link"></i>
                            <span class="my-link-name my-selected-link">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('karyawan')}}">
                            <i class="uil uil-users-alt"></i>
                            <span class="my-link-name">Data Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('absensi')}}">
                            <i class="uil uil-file-info-alt"></i>
                            <span class="my-link-name">Data Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-schedule"></i>
                            <span class="my-link-name">Permohonan Cuti</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="uil uil-signout"></i>
                            <span class="my-link-name">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Akhir Sidebar -->

        <!-- Main Content -->
        <div class="my-main-content">
            <!-- Navbar -->
            <div class="my-navbar">

            </div>
            <!-- Inner Content -->
            <div class="my-inner-content">

            </div>
        </div>
    </div>
</body>

</html>