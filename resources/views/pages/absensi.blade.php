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
    <link rel="stylesheet" href="{{ asset('assets/css/absensiStyle.css') }}">
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
                                <form action="{{route('search')}}" method="get">
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
                                            <input type="text" name="uidkaryawan" id="uidkaryawan"
                                                placeholder="Masukkan UID" autocomplete="off">
                                        </div>
                                        <div class="my-input-sortby">
                                            <label for="">Nama Karyawan</label>
                                            <input type="text" name="namakaryawan" id="namakaryawan"
                                                placeholder="Masukkan Nama" autocomplete="off">
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
                            @foreach ($absen as $index => $abs)
                                <tr>
                                    <td>{{ $abs->id_karyawan }}</td>
                                    <td>{{ $abs->nama }}</td>
                                    <td>{{ $abs->jam_masuk }}</td>
                                    <td>{{ $abs->jam }}</td>
                                    <td>{{ $abs->jam_keluar }}</td>
                                    <td>
                                        <div id="my-status-badge" class="my-status-badge">
                                            <span id="my-title-badge">{{ $abs->status }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="my-trigger-viewBtn" id="my-trigger-viewBtn"
                                            data-modal-view="my-bg-modal-view-{{ $abs->id }}">
                                            <i class="uil uil-eye"></i>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal View -->
                                <div class="my-bg-modal" id="my-bg-modal-view-{{ $abs->id }}">
                                    <div class="my-content-modal">
                                        <div class="my-title-modal">
                                            <span>Data Absen {{ $abs->nama }}</span>
                                            <div class="my-close-modal" id="my-close-modal">X</div>
                                        </div>
                                        <!-- Modal Form -->
                                        <form action="{{ route('edit', $abs->id_karyawan) }}" method="POST">
                                            <div class="my-form-modal">
                                                @csrf
                                                <div class="my-left-content-modal">
                                                    <label class="my-label-input">ID Karyawan</label>
                                                    <div class="my-input-modal my-input-disable">
                                                        <input type="text" name="UID" id="UID"
                                                            placeholder="ID Karyawan" value="{{ $abs->id_karyawan }}"
                                                            autocomplete="off" readonly>
                                                    </div>
                                                    <label class="my-label-input">Nama Karyawan</label>
                                                    <div class="my-input-modal my-input-disable">
                                                        <input type="text" name="nama" autocomplete="off"
                                                            value="{{ $abs->nama }}" readonly>
                                                    </div>
                                                    <label class="my-label-input">Tanggal Absen</label>
                                                    <div class="my-input-modal my-input-disable">
                                                        <i class="uil uil-map-pin"></i>
                                                        <input type="date" name="alamat" autocomplete="off"
                                                            value="{{ $abs->jam_masuk }}" readonly>
                                                    </div>
                                                    <label class="my-label-input">Jam Masuk</label>
                                                    <div class="my-input-modal my-input-disable">
                                                        <i class="uil uil-clock-eight"></i>
                                                        <input type="text" name="alamat" autocomplete="off"
                                                            value="{{ $abs->jam }}" readonly>
                                                    </div>
                                                    <label class="my-label-input">Jam Keluar</label>
                                                    <div class="my-input-modal my-input-disable">
                                                        <i class="uil uil-clock-five"></i>
                                                        <input type="text" name="jk" autocomplete="off"
                                                            value="{{ $abs->jam_keluar }}" readonly>
                                                    </div>
                                                    <label class="my-label-input">Status</label>
                                                    <div class="my-status-modal my-input-disable">
                                                        <i class="uil uil-stopwatch"></i>
                                                        <div id="my-status-badge" class="my-status-badge">
                                                            <span id="my-title-badge">{{ $abs->status }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-right-content-modal">
                                                    <label class="my-label-input">Lokasi Masuk <i class="uil uil-map-marker"></i></label>
                                                    <div class="my-textarea-modal my-input-disable">
                                                        <textarea name="lokasimasuk" id="lokasimasuk" autocomplete="off" readonly>{{ $abs->alamat }}</textarea>
                                                    </div>
                                                    <label class="my-label-input">Lokasi Keluar <i class="uil uil-map-marker"></i></label>
                                                    <div class="my-textarea-modal my-input-disable">
                                                        <textarea name="lokasikeluar" id="lokasikeluar" autocomplete="off" readonly>{{ $abs->lokasi_keluar }}</textarea>
                                                    </div>
                                                    <div class="my-photo-modal">
                                                        <div>
                                                            <label class="my-label-input">Absen Masuk</label>
                                                            <div class="my-images-modal">
                                                                <img src="https://trackingimage.000webhostapp.com/images/{{ $abs->gambar }}"
                                                                    width="140px">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="my-label-input">Absen Keluar</label>
                                                            <div class="my-images-modal">
                                                                <img src="https://trackingimage.000webhostapp.com/images_out/{{ $abs->keluar }}"
                                                                    width="140px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-maps-content-modal">
                                                    <label class="my-label-input">Detail Lokasi <i
                                                            class="uil uil-map"></i></label>
                                                    <div class="my-maps-modal">
                                                        <div class="gmap_canvas">
                                                            <iframe width="282" height="282" id="gmap_canvas"
                                                                src="https://maps.google.com/maps?q={{$abs->latitude}},{{$abs->longitude}}&output=embed"
                                                                frameborder="0" scrolling="no" marginheight="0"
                                                                marginwidth="0"></iframe>
                                                            <a href="https://123movies-i.net">reddit 123movies</a><br>
                                                            <a href="https://www.embedgooglemap.net"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Akhir Modal Edit -->
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
<script src="{{ asset('assets/js/mainAbsensi.js') }}"></script>
<script src="{{ asset('assets/js/modals.js') }}"></script>

</html>
