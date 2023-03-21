<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/images/icon-app.png') }}" rel="shortcut icon">
    <title>V-Attendance | {{ $title }}</title>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/CutiStyle.css') }}">
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
                <div class="my-wrapper-inner">
                    <!-- Table -->
                    <table id="tableCuti" class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Nama</th>
                                <th>Mulai Cuti</th>
                                <th>Selesai Cuti</th>
                                <th>Masuk Kerja</th>
                                <th>Cuti</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Shanaz</td>
                                <td>2023/03/20</td>
                                <td>2023/03/22</td>
                                <td>2023-03-23</td>
                                <td>2 hari</td>
                                <td>
                                    <div id="my-status-badge" class="my-status-badge">
                                        <span id="my-title-badge">Terkirim</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="my-wrap-toggle">
                                        <div class="my-trigger-viewBtn" id="my-trigger-viewBtn"
                                            data-modal-view="my-bg-modal-view-001">
                                            <i class="uil uil-eye"></i>
                                        </div>
                                        <div class="my-trigger-deleteBtn" id="my-trigger-deleteBtn"
                                            data-modal-delete="my-bg-modal-delete-001">
                                            <i class="uil uil-trash-alt"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal View -->
                            <div class="my-bg-modal" id="my-bg-modal-view-001">
                                <div class="my-content-modal">
                                    <div class="my-title-modal">
                                        <span>View Data Shanaz</span>
                                        <div class="my-close-modal" id="my-close-modal">X</div>
                                    </div>
                                    <!-- Modal Form -->
                                    <form action="" method="">
                                        <div class="my-form-modal">
                                            @csrf
                                            <div class="my-left-content-modal">
                                                <label class="my-label-input">ID Karyawan</label>
                                                <div class="my-input-modal my-input-disable">
                                                    <input type="text" name="UID" id="UID"
                                                        placeholder="ID Karyawan" value="001" autocomplete="off"
                                                        readonly>
                                                </div>
                                                <label class="my-label-input">Nama Karyawan</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-user"></i>
                                                    <input type="text" name="nama" autocomplete="off"
                                                        value="Shanaz" readonly>
                                                </div>
                                                <label class="my-label-input">Mulai Cuti</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="mulaicuti" autocomplete="off"
                                                    value="2023/03/20" readonly>
                                                </div>
                                                <label class="my-label-input">Selesai Cuti</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="selesaicuti" autocomplete="off"
                                                    value="2023/03/27" readonly>
                                                </div>
                                                <label class="my-label-input">Masuk Kerja</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="masukkerja" autocomplete="off"
                                                        value="2023-03-28" readonly>
                                                </div>
                                            </div>
                                            <div class="my-right-content-modal">
                                                <label class="my-label-input">Cuti</label>
                                                <div class="my-input-modal">
                                                    <input type="text" name="cuti" autocomplete="off"
                                                        value="7 Hari" readonly>
                                                </div>
                                                <label class="my-label-input">Keterangan</label>
                                                <div class="my-textarea-modal">
                                                    <textarea type="text" name="keterangan" autocomplete="off" readonly>Naik Haji</textarea>
                                                </div>
                                                <label class="my-label-input">Status</label>
                                                <div class="my-input-modal">
                                                    <select id="status" name="status">
                                                        <option value="" selected>Terkirim</option>
                                                        <option value="">Diterima</option>
                                                        <option value="">Ditolak</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="my-editBtn-modal-edit">Update
                                                    Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Akhir Modal Edit -->

                            <!-- Modal Delete -->
                            <div class="my-bg-modal" id="my-bg-modal-delete-001">
                                <div class="my-content-modal my-content-modal-delete">
                                    <div class="my-title-modal">
                                        <span>Delete Permohonan Cuti</span>
                                        <div class="my-close-modal" id="my-close-modal">X</div>
                                    </div>
                                    <!-- Modal Form -->
                                    <form action="" method="POST">
                                        <div class="my-inner-modal-delete">
                                            <span>Anda yakin ingin menghapus permohonan cuti Shanaz dari tanggal 2023/03/20 - 2023/03/27?</span>
                                            <div class="my-validation-modal-delete">
                                                {{-- <img src="{{ ($kyw->jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png')) }}" width="50px"> --}}
                                                <img src="{{ asset('assets/images/genderProfile-L.png') }}"
                                                    width="50px">
                                                <div class="my-detail-validation">
                                                    <span>Shanaz</span>
                                                    <span>Naik Haji - Terkirim</span>
                                                </div>
                                            </div>
                                            @csrf
                                            <button type="submit" class="my-deleteBtn-modal-delete">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Akhir Modal Delete -->
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
<script src="{{ asset('assets/js/mainCuti.js') }}"></script>

</html>
