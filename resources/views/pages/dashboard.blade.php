<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">
    <title>Attendance Tracking | {{ $title }}</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboardStyle.css')}}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- IconScout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="my-container">
        <!-- SideBar -->
        @include('components/sidebar')
        <!-- Akhir SideBar -->

        <!-- Main Content -->
        <div class="my-main-content">
            <!-- Navbar -->
            @include('components/navbar')
            <!-- Akhir Navbar -->
            
            <!-- Inner Content -->
            <div class="my-inner-content">
                <div class="my-card-view">
                    <div class="my-card-content">
                        <div class="my-icon-card">
                            <i class="uil uil-users-alt"></i>
                        </div>
                        <div class="my-card-data">
                            <span class="my-title-card">Jumlah Karyawan</span>
                            <span class="my-count">{{$kar}}</span>
                        </div>
                    </div>
                    <div class="my-card-content">
                        <div class="my-icon-card">
                            <i class="uil uil-file-info-alt"></i>
                        </div>
                        <div class="my-card-data">
                            <span class="my-title-card">Absensi Hari Ini</span>
                            <span class="my-count">{{$abs}}</span>
                        </div>
                    </div>
                    <div class="my-card-content">
                        <div class="my-icon-card">
                            <i class="uil uil-schedule"></i>
                        </div>
                        <div class="my-card-data">
                            <span class="my-title-card">Permohonan Cuti</span>
                            <span class="my-count">{{$cuti}}</span>
                        </div>
                    </div>
                </div>
                <div class="my-footer">&copy; 2023 V-Attendance. All Rights Reserved</div>
            </div>
            <!-- Akhir Inner Content -->
        </div>
        <!-- Akhir Main Content -->
    </div>
</body>

</html>