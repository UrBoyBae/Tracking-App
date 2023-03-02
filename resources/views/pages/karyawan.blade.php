<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">
    <title>Attendance | Admin</title>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/karyawanStyle.css')}}">
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
                            <span class="link-name">dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('karyawan')}}" class="selected-link">
                            <i class="uil uil-users-alt selected-link"></i>
                            <span class="link-name selected-link">Data Karyawan</span>
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
                        <a href="{{ route('logout') }}">
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
                    <span class="link-name">Data Karyawan</span>
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
                    <div class="btn" id="modal-create-trigger" onclick="modalCreateUp()">
                        <i class="uil uil-user-plus"></i>
                        <span>Tambah Karyawan</span>
                    </div>
                </div>

                <div class="table-container">
                    <!-- Table -->
                    <table id="tableKaryawan" class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Nama</th>
                                <th>Password</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No.Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $index=>$kyw)
                            <tr>
                                <td>{{ $kyw->id_karyawan }}</td>
                                <td>{{ $kyw->nama}}</td>
                                <td>{{ $kyw->password}}</td>
                                <td>{{ Str::limit($kyw->alamat, 30) }}</td>
                                <td>{{ $kyw->jk}}</td>
                                <td>{{ $kyw->hp}}</td>
                                <td>
                                    <!-- <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a> -->
                                    <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" href="{{route ('deleteRoute', $kyw->id_karyawan)}}"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                    <!-- <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a> -->
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
        <!-- Modal Add -->
        <div class="modal-bg" id="modal-create">
            <div class="modal">
                <div class="modal-title">
                    <span>Tambah Karyawan</span>
                    <div class="modal-close" id="modal-add-close" onclick="closeModalCreate()">X</div>
                </div>
                <!-- Modal Form -->
                <div class="modal-form">
                    <form action="{{route('tambah')}}" method="POST">
                        @csrf
                        <div class="input-form input-disable">
                            <input type="text" name="UID" placeholder="ID Karyawan" value="{{ $new_id }}" readonly>
                        </div>
                        <div class="input-form">
                            <i class="uil uil-user"></i>
                            <input type="text" name="nama" placeholder="Nama Karyawan">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" name="password" placeholder="Password">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-map-pin"></i>
                            <input type="text" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-mars"></i>
                            <input type="text" name="jk" placeholder="Jenis Kelamin">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-phone"></i>
                            <input type="text" name="hp" placeholder="No.Hp">
                        </div>
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
<script src="{{asset('assets/js/mainKaryawan.js')}}"></script>
<script src="{{asset('assets/js/modals.js')}}"></script>

</html>