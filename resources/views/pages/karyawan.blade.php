<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">
    <title>V-Attendance | {{ $title }}</title>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/karyawanStyle.css')}}">
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
                    <!-- Add Button -->
                    <div class="my-wrap-addBtn">
                        <div class="my-addBtn" id="my-trigger-addBtn">
                            <i class="uil uil-user-plus"></i>
                            <span>Tambah Karyawan</span>
                        </div>
                    </div>
                    <!-- Table -->
                    <table id="tableKaryawan" class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Alamat</th>
                                <th>Gender</th>
                                <th>No.Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $index=>$kyw)
                            <tr>
                                <td>{{ $kyw->id_karyawan }}</td>
                                <td>{{ $kyw->nama}}</td>
                                <td>{{ $kyw->nama}}</td>
                                <td>{{ $kyw->password}}</td>
                                <td>{{ Str::limit($kyw->alamat, 30) }}</td>
                                <td>{{ $kyw->jk}}</td>
                                <td>{{ $kyw->hp}}</td>
                                <td>
                                    <div class="my-wrap-toggle">
                                        <div class="my-trigger-editBtn" id="my-trigger-editBtn" data-modal-edit="my-bg-modal-edit-{{ $kyw->id_karyawan }}">
                                            <i class="uil uil-edit"></i>
                                        </div>
                                        <div class="my-trigger-deleteBtn" id="my-trigger-deleteBtn" data-modal-delete="my-bg-modal-delete-{{ $kyw->id_karyawan }}">
                                            <i class="uil uil-trash-alt"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="my-bg-modal" id="my-bg-modal-edit-{{ $kyw->id_karyawan }}">
                                <div class="my-content-modal">
                                    <div class="my-title-modal">
                                        <span>Edit Data {{ $kyw->nama }}</span>
                                        <div class="my-close-modal" id="my-close-modal">X</div>
                                    </div>
                                    <!-- Modal Form -->
                                    <form action="{{route('edit', $kyw->id_karyawan)}}" method="POST">
                                        <div class="my-form-modal">
                                            @csrf
                                            <div class="my-left-content-modal">
                                                <label class="my-label-input">ID Karyawan</label>
                                                <div class="my-input-modal my-input-disable">
                                                    <input type="text" name="UID" id="UID" placeholder="ID Karyawan" value="{{ $kyw->id_karyawan }}" autocomplete="off" readonly>
                                                </div>
                                                <label class="my-label-input">Nama Karyawan</label>
                                                <div class="my-input-modal">
                                                    <input type="text" name="nama" autocomplete="off" value="{{ $kyw->nama }}">
                                                </div>
                                                <label class="my-label-input">Username</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-user"></i>
                                                    <input type="text" name="username" autocomplete="off" value="{{ $kyw->nama }}">
                                                </div>
                                                <label class="my-label-input">Password</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-lock"></i>
                                                    <input type="text" name="password" autocomplete="off" value="{{ $kyw->password }}">
                                                </div>
                                            </div>
                                            <div class="my-right-content-modal">
                                                <label class="my-label-input">Alamat</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-map-pin"></i>
                                                    <input type="text" name="alamat" autocomplete="off" value="{{ $kyw->alamat }}">
                                                </div>
                                                <label class="my-label-input">Jenis Kelamin</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-mars"></i>
                                                    <input type="text" name="jk" autocomplete="off" value="{{ $kyw->jk }}">
                                                </div>
                                                <label class="my-label-input">No.HP</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-phone"></i>
                                                    <input type="text" name="hp" autocomplete="off" value="{{ $kyw->hp }}">
                                                </div>
                                                <button type="submit" class="my-editBtn-modal-edit">Update Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Akhir Modal Edit -->

                            <!-- Modal Delete -->
                            <div class="my-bg-modal" id="my-bg-modal-delete-{{ $kyw->id_karyawan }}">
                                <div class="my-content-modal my-content-modal-delete">
                                    <div class="my-title-modal">
                                        <span>Delete Data Karyawan</span>
                                        <div class="my-close-modal" id="my-close-modal">X</div>
                                    </div>
                                    <!-- Modal Form -->
                                    <form action="{{route('deleteRoute',$kyw->id_karyawan)}}" method="POST">
                                        <div class="my-inner-modal-delete">
                                            <span>Anda yakin ingin menghapus data {{ $kyw -> nama }}?</span>
                                            <div class="my-validation-modal-delete">
                                                <img src="{{asset('assets/images/account.png')}}" width="50px">
                                                <div class="my-detail-validation">
                                                    <span>{{ $kyw -> nama }}</span>
                                                    <span>{{ $kyw -> alamat }}</span>
                                                </div>
                                            </div>
                                            @csrf
                                            <button type="submit" class="my-deleteBtn-modal-delete">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Akhir Modal Delete -->
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Modal Add -->
                <div class="my-bg-modal" id="my-bg-modal-add">
                    <div class="my-content-modal">
                        <div class="my-title-modal">
                            <span>Tambah Karyawan</span>
                            <div class="my-close-modal" id="my-close-modal">X</div>
                        </div>
                        <!-- Modal Form -->
                        <form action="{{route('tambah')}}" method="POST">
                            <div class="my-form-modal">
                                @csrf
                                <div class="my-left-content-modal">
                                    <label class="my-label-input">ID Karyawan</label>
                                    <div class="my-input-modal my-input-disable">
                                        <input type="text" name="UID" id="UID" placeholder="ID Karyawan" value="{{ $new_id }}" autocomplete="off" readonly>
                                    </div>
                                    <label class="my-label-input">Nama Karyawan</label>
                                    <div class="my-input-modal">
                                        <input type="text" name="nama" autocomplete="off" required>
                                    </div>
                                    <label class="my-label-input">Username</label>
                                    <div class="my-input-modal">
                                        <i class="uil uil-user"></i>
                                        <input type="text" name="username" autocomplete="off" required>
                                    </div>
                                    <label class="my-label-input">Password</label>
                                    <div class="my-input-modal">
                                        <i class="uil uil-lock"></i>
                                        <input type="text" name="password" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="my-right-content-modal">
                                    <label class="my-label-input">Alamat</label>
                                    <div class="my-input-modal">
                                        <i class="uil uil-map-pin"></i>
                                        <input type="text" name="alamat" autocomplete="off" required>
                                    </div>
                                    <label class="my-label-input">Jenis Kelamin</label>
                                    <div class="my-input-modal">
                                        <i class="uil uil-mars"></i>
                                        <input type="text" name="jk" autocomplete="off" required>
                                    </div>
                                    <label class="my-label-input">No.HP</label>
                                    <div class="my-input-modal">
                                        <i class="uil uil-phone"></i>
                                        <input type="text" name="hp" autocomplete="off" required>
                                    </div>
                                    <button type="submit" class="my-addBtn-modal-add">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
<script src="{{asset('assets/js/mainKaryawan.js')}}"></script>

</html>