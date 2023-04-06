<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/images/icon-app.png') }}" rel="shortcut icon">
    <title>V-Attendance | {{ $title }}</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboardStyle.css') }}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Google Icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                            <span class="my-count">{{ $kar }}</span>
                        </div>
                    </div>
                    <div class="my-card-content">
                        <div class="my-icon-card">
                            <i class="uil uil-file-info-alt"></i>
                        </div>
                        <div class="my-card-data">
                            <span class="my-title-card">Absensi Hari Ini</span>
                            <span class="my-count">{{ $abs }}</span>
                        </div>
                    </div>
                    <div class="my-card-content">
                        <div class="my-icon-card">
                            <i class="uil uil-schedule"></i>
                        </div>
                        <div class="my-card-data">
                            <span class="my-title-card">Permohonan Cuti</span>
                            <span class="my-count">{{ $cuti }}</span>
                        </div>
                    </div>
                </div>
                <div class="my-mid-content">
                    <div class="my-chart">
                        <canvas id="myChart"></canvas>
                    </div>
                    @foreach($profile as $index => $prf)
                    <div class="my-profile-account">
                        {{-- <span>Profile Account</span> --}}
                        <div class="my-data-profile">
                            <img src="{{ $prf->jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}" width="100px">                            
                            <div class="my-profile-name">
                                <span>{{$prf->nama_lengkap}}</span>
                            </div>
                            <div class="my-profile-role">
                                <span>{{$prf->level}}</span>
                            </div>
                            <div class="my-profile-address">
                                <div class="my-icon-profile">
                                    <i class="uil uil-map-marker"></i>
                                </div>
                                <span>{{Str::limit($prf->alamat, 40)}}</span>
                            </div>
                            <div class="my-profile-no">
                                <div class="my-icon-profile">
                                    <i class="uil uil-phone-alt"></i>
                                </div>
                                <span>{{$prf->no_hp}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="my-footer">&copy; 2023 V-Attendance. All Rights Reserved</div> --}}
            </div>
            <!-- Akhir Inner Content -->
        </div>
        <!-- Akhir Main Content -->
    </div>
    @php
        $data = [$januari];
        $data = [$february];
    @endphp
</body>
<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart JS
    var myChart = document.getElementById("myChart");
    Chart.defaults.color = '#8c89b4';
    Chart.defaults.borderColor = '#26264f';
    new Chart(myChart, {
        data: {
            labels: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
            ],
            datasets: [{
                    type: "bar",
                    label: "Rekap Absensi Tepat Waktu",
                    data: [<?=$januari?>, <?=$february?>, <?=$maret?>, <?=$april?>, <?=$mei?>, <?=$juni?>, <?=$juli?>, <?=$agustus?>, <?=$september?>, <?=$oktober?>, <?=$november?>, <?=$desember?>],
                    borderRadius: 25,
                    barThickness: 9,
                    backgroundColor: "rgb(100, 207, 246)",
                    hoverBackgroundColor: "rgb(100, 207, 246)",
                    pointHoverBackgroundColor: "rgb(100, 207, 246)",
                    pointHoverBorderColor: "rgb(100, 207, 246)",
                },
                {
                    type: "bar",
                    label: "Rekap Absensi Terlambat",
                    data: [<?=$jan_telat?>, <?=$feb_telat?>, <?=$mar_telat?>, <?=$apr_telat?>, <?=$mei_telat?>, <?=$jun_telat?>, <?=$jul_telat?>, <?=$aug_telat?>, <?=$sept_telat?>, <?=$oct_telat?>, <?=$nov_telat?>, <?=$des_telat?>],
                    borderRadius: 25,
                    barThickness: 9,
                    padding: 0.8,
                    backgroundColor: "rgb(99, 89, 233)",
                    hoverBackgroundColor: "rgb(99, 89, 233)",
                    pointHoverBackgroundColor: "rgb(99, 89, 233)",
                    pointHoverBorderColor: "rgb(99, 89, 233)",
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>
<script src="{{asset('assets/js/mainDashboard.js')}}"></script>
</html>
