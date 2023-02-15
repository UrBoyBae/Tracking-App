<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/v-tax-logo.png')}}" rel="shortcut icon">

    <title>Attendance | Admin</title>
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
        <nav>
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
                        <a href="/pages/dashboard">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/karyawan" class="selected-link">
                            <i class="uil uil-users-alt selected-link"></i>
                            <span class="link-name selected-link">Data Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/absensi">
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
                        <a href="/">
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
                    <a href="/pages/dashboard">
                        <i class="uil uil-estate"></i>
                    </a>
                    <h2>></h2>
                    <span class="link-name">Data Karyawan</span>
                </div>
                <div class="right-content">
                    <div class="notification"></div>
                    <i class="uil uil-bell"></i>
                    <img src="{{asset('assets/images/account.png')}}" alt="">
                </div>
            </div>
            <!-- Main Content -->
            <div class="content-center">
                <div class="addData">
                    <!-- Search Form -->
                    <form action="">
                        <div class="search-form">
                            <select name="filter" id="filter">
                                <option value="" selected disabled>Search By</option>
                                <option value="uid">UID</option>
                                <option value="nama">Nama</option>
                            </select>
                            <div class="search">
                                <input type="search" name="value" id="value" placeholder="Search...">
                                <button type="submit" name="search">
                                    <i class="uil uil-search-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Button Tambah -->
                    <div class="btn" id="modal-create-trigger" onclick="modalCreateUp()">
                        <i class="uil uil-user-plus"></i>
                        <span>Tambah Karyawan</span>
                    </div>
                </div>
                <div class="data-view">
                    <!-- Table -->
                    <div class="table">
                        <div class="table-head">
                            <span class="th-column">UID</span>
                            <span class="th-column">Nama</span>
                            <span class="th-column">Password</span>
                            <span class="th-column">Alamat</span>
                            <span class="th-column">Jenis Kelamin</span>
                            <span class="th-column">No.Hp</span>
                            <span class="th-column">Action</span>
                        </div>
                        <div class="table-body">
                            <div class="tbody-row">
                                <span class="td-column">20981BA001</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA002</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA003</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA004</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA005</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA006</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA007</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                            <div class="tbody-row">
                                <span class="td-column">20981BA008</span>
                                <span class="td-column">Ali Akbar Abdillah</span>
                                <span class="td-column">09876527</span>
                                <span class="td-column">GBR 3</span>
                                <span class="td-column">Laki Laki</span>
                                <span class="td-column">0987652121</span>
                                <div class="td-column">
                                    <a id="modal-update-trigger" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                    </div>
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
                    <form action="">
                        <div class="input-form input-disable">
                            <input type="text" placeholder="ID Karyawan" value="20981BA009" disabled>
                        </div>
                        <div class="input-form">
                            <i class="uil uil-user"></i>
                            <input type="text" placeholder="Nama Karyawan">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-map-pin"></i>
                            <input type="text" placeholder="Alamat">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-mars"></i>
                            <input type="text" placeholder="Jenis Kelamin">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-phone"></i>
                            <input type="text" placeholder="No.Hp">
                        </div>
                        <button type="submit" class="btn-add">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal update -->
        <div class="modal-bg" id="modal-update">
            <div class="modal">
                <div class="modal-title">
                    <span>Update Karyawan</span>
                    <div class="modal-close" id="modal-update-close" onclick="closeModalUpdate()">X</div>
                </div>
                <!-- Modal Form -->
                <div class="modal-form">
                    <form action="">
                        <div class="input-form input-disable">
                            <input type="text" placeholder="ID Karyawan" value="20981BA009" disabled>
                        </div>
                        <div class="input-form">
                            <i class="uil uil-user"></i>
                            <input type="text" placeholder="Nama Karyawan">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-map-pin"></i>
                            <input type="text" placeholder="Alamat">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-mars"></i>
                            <input type="text" placeholder="Jenis Kelamin">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-phone"></i>
                            <input type="text" placeholder="No.Hp">
                        </div>
                        <button type="submit" class="btn-update">Update Data</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal-bg" id="modal-delete">
            <div class="modal modal-delete">
                <div class="modal-title">
                    <span>Delete Karyawan ?</span>
                    <div class="modal-close" id="modal-delete-close" onclick="closeModalDelete()">X</div>
                </div>
                <!-- Modal Form -->
                <div class="modal-form">
                    <form action="">
                        <div class="delete-confirm">
                            <span>Apakah Anda Yakin Ingin Menghapus Data <b>"Ali Akbar Abdillah"</b> Ini ?</span>
                        </div>
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets/js/modals.js')}}"></script>

</html>