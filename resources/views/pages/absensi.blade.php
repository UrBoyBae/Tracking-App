<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/icon-app.png')}}" rel="shortcut icon">
    <title>V-Attendance | {{ $title }}</title>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/absensiStyle.css')}}">
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
                <div class="my-wrapper-inner">
                    <!-- Top inner -->
                    <div class="my-wrap-addBtn">
                        <!-- Date Time -->
                        <div class="my-date-time">
                            <i class="uil uil-calendar-alt"></i>
                            <span>{{ $day }}, {{ $tanggal }}</span>
                        </div>
                        <!-- Button Filter -->
                        <div class="my-sortby">
                            <div class="my-sortBtn" id="my-trigger-sortBtn" data-sortby="my-dropdown-sortby">
                                <span>Sort By</span>
                                <i class="uil uil-angle-down"></i>
                            </div>
                            <!-- Dropdown Sort By -->
                            <div class="my-dropdown-sortby" id="my-dropdown-sortby">
                                <span class="my-title-sortby">Cari Data Berdasarkan :</span>
                                <!-- Form Sort By -->
                                <form action="/pages/absensi/filter" method="get">
                                    <div class="my-form-sortby">
                                        <div class="my-input-group-sortby">
                                            <div class="my-input-sortby">
                                                <label for="">Dari Tanggal</label>
                                                <input type="date" name="firstDate" id="firstDate" value="">
                                            </div>
                                            <span>-</span>
                                            <div class="my-input-sortby">
                                                <label for="">Sampai Tanggal</label>
                                                <input type="date" name="secondDate" id="secondDate" value="">
                                            </div>
                                        </div>
                                        <div class="my-input-sortby">
                                            <label for="">UID Karyawan</label>
                                            <input type="text" name="uidkaryawan" id="uidkaryawan" placeholder="Masukkan UID" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" name="search" class="my-search-sortby">
                                        <i class="uil uil-search-alt"></i>
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table id="tableAbsensi" class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Nama</th>
                                <th>Tanggal Absen</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $index=>$abs)
                            <tr>
                                <td>{{ $abs->id_karyawan}}</td>
                                <td>{{ $abs->nama}}</td>
                                <td>{{ $abs->jam_masuk}}</td>
                                <td>09:00</td>
                                <td>17:00</td>
                                <td>
                                    <div id="my-status-badge" class="my-status-badge">
                                        <span id="my-title-badge">{{ $abs->status }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="my-trigger-viewBtn" id="my-trigger-viewBtn" data-modal-view="my-bg-modal-view-{{ $abs->id_karyawan }}">
                                        <i class="uil uil-eye"></i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Akhir Inner Content -->
        </div>
        <!-- Akhir Main Content -->
    </div>
</body>

<!-- DataTable JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bulma.min.js"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/mainAbsensi.js')}}"></script>
<script src="{{asset('assets/js/modals.js')}}"></script>

</html>