<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">
    <title>Attendance | Adminx</title>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/absensiStyle.css')}}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- IconScout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="bg-color">
    </div>

    <div class="main-content">
        <!-- SideBar -->
        <nav class="sidebar">
            <!-- Title -->
            <div class="logo">
                <div class="logo-image">
                    <img src="{{asset('assets/images/v-tax.png')}}" alt="">
                </div>
            </div>

            <!-- Nav Links -->
            <div class="nav-menu">
                <ul class="nav-link">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('karyawan')}}">
                            <i class="uil uil-users-alt"></i>
                            <span class="link-name">Data Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('absensi')}}" class="selected-link">
                            <i class="uil uil-file-info-alt selected-link"></i>
                            <span class="link-name selected-link">Data Absensi</span>
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
            <!-- Dashboard Top -->
            <div class="content-top">
                <div class="left-content">
                    <a href="{{route('dashboard')}}">
                        <i class="uil uil-estate"></i>
                    </a>
                    <h2>></h2>
                    <span class="link-name">Data Absensi</span>
                </div>
                <div class="right-content">
                    <div class="notif"></div>
                    <i class="uil uil-bell"></i>
                    <img src="{{asset('assets/images/account.png')}}" alt="">
                </div>
            </div>
            <!-- Main Content -->
            <div class="content-center">
                <div class="addData">
                    <!-- Date Time -->
                    <div class="date-time">
                        <i class="uil uil-calendar-alt"></i>
                        <span>{{ $day }}, {{ $tanggal }}</span>
                    </div>
                    <!-- Button Filter -->
                    <div class="sort-by">
                        <div class="btn" id="toggle-filter">
                            <span>Sort By</span>
                            <i class="uil uil-sliders-v-alt"></i>
                        </div>
                        <!-- Dropdown Sort By -->
                        <div class="dropdown-sortby">
                            <span class="title-sortby">Cari Data Berdasarkan :</span>
                            <!-- Form Sort By -->
                            <form action="/pages/absensi/filter" method="get">
                                <div class="form-sortby">
                                    <div class="sort-input">
                                        <div class="input-group">
                                            <label for="">Dari Tanggal</label>
                                            <input type="date" name="firstDate" id="firstDate" value="">
                                        </div>
                                        <span>-</span>
                                        <div class="input-group">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" name="secondDate" id="secondDate" value="">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label for="">UID Karyawan</label>
                                        <input type="text" name="uidkaryawan" id="uidkaryawan" placeholder="Masukkan UID">
                                    </div>
                                </div>
                                <button type="submit" name="search" class="sortby-search">
                                    <i class="uil uil-search-alt"></i>
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-container">
                    <!-- Table -->
                    <table id="tableAbsensi" class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Absen</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($absen as $index=>$abs)
                            <tr>
                                <td>{{ $abs->id_karyawan}}</td>
                                <td>{{ $abs->nama}}</td>
                                <td>Jl. Sukasenang II No.3</td>
                                <td>{{ $abs->jam_masuk}}</td>
                                <td>
                                    <div id="status-badge">
                                        <span id="title-badge" class="title-badge">{{ $abs->status }}</span>
                                    </div>
                                </td>
                                <td>
                                    <a id="modal-view-trigger" onclick="modalViewUp()"><i class="uil uil-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- <span class="footer">Made With <i class="uil uil-heart" style="color: red;"></i> &copy; 2023</span> -->
            </div>

        </div>
        <!-- Content -->

        <!-- Modal View -->
        <div class="modal-bg" id="modal-view">
            <div class="modal-view">
                <div class="modal-title">
                    <span>Detail Karyawan</span>
                    <div class="modal-close" id="modal-add-close" onclick="closeModalView()">X</div>
                </div>
                <!-- Modal Form -->
                <div class="modal-form">
                    <form action="">
                        <img src="" alt="" srcset="">
                        <div class="input-form input-disable">
                            <input type="text" placeholder="ID Karyawan" value="20981BA009" disabled>
                        </div>
                        <div class="input-form">
                            <i class="uil uil-user"></i>
                            <input type="text" placeholder="Nama Karyawan">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Lokasi Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Lokasi Keluar">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Tanggal Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Jam Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Status">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-map-pin"></i>
                            <input type="text" placeholder="Gambar">
                        </div>
                        <img src="https://trackingimage.000webhostapp.com/images/16-02-2023-002-Gifari.jpeg" width="120px">
                        <button type="submit" class="btn-add">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- DataTable JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bulma.min.js"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/mainAbsensi.js')}}"></script>
<script src="{{asset('assets/js/modals.js')}}"></script>
<script src="{{asset('assets/js/dropdown.js')}}"></script>
<script src="{{asset('assets/js/statusBadge.js')}}"></script>

</html>