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
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cuti as $index => $ct)
                            <tr>
                                <td>{{ $ct->id_karyawan }}</td>
                                <td>{{ $ct->nama }}</td>
                                <td>{{ $ct->mulai }}</td>
                                <td>{{ $ct->akhir }}</td>
                                <td>{{ $ct->masuk_kerja }}</td>
                                <td>{{ $ct->jml_cuti}} hari</td>
                                <td>{{ $ct->kategori }}</td>
                                <td>
                                    <div id="my-status-badge" class="my-status-badge">
                                        
                                        @if($ct->status == 'Terkirim')
                                        <span id="my-title-badge">Diterima</span>
                                        @endif
                                        @if($ct->status == 'Diterima')
                                        <span id="my-title-badge">Disetujui</span>
                                        @endif
                                        @if($ct->status == 'Ditolak')
                                        <span id="my-title-badge">Ditolak</span>
                                        @endif

                                    </div>
                                </td>
                                <td>
                                    <div class="my-wrap-toggle">
                                        <div class="my-trigger-viewBtn" id="my-trigger-viewBtn"
                                            data-modal-view="my-bg-modal-view-{{$ct->id_cuti}}">
                                            <i class="uil uil-eye"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal View -->
                            <div class="my-bg-modal" id="my-bg-modal-view-{{$ct->id_cuti}}">
                                <div class="my-content-modal">
                                    <div class="my-title-modal">
                                        <span>View Data {{ $ct->nama }}</span>
                                        <div class="my-close-modal" id="my-close-modal">X</div>
                                    </div>
                                    <!-- Modal Form -->
                                    <form action="/edit/cuti/{{$ct->id_cuti}}" method="post">
                                        <div class="my-form-modal">
                                            @csrf
                                            <div class="my-left-content-modal">
                                                <label class="my-label-input">ID Karyawan</label>
                                                <div class="my-input-modal my-input-disable">
                                                    <input type="text" name="UID" id="UID"
                                                        placeholder="ID Karyawan" value="{{ $ct->id_karyawan }}" autocomplete="off"
                                                        readonly>
                                                </div>
                                                <label class="my-label-input">Nama Karyawan</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-user"></i>
                                                    <input type="text" name="nama" autocomplete="off"
                                                        value="{{ $ct->nama }}" readonly>
                                                </div>
                                                <label class="my-label-input">Mulai Cuti</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="mulaicuti" autocomplete="off"
                                                    value="{{ $ct->mulai }}" readonly>
                                                </div>
                                                <label class="my-label-input">Selesai Cuti</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="selesaicuti" autocomplete="off"
                                                    value="{{ $ct->akhir }}" readonly>
                                                </div>
                                                <label class="my-label-input">Masuk Kerja</label>
                                                <div class="my-input-modal">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <input type="text" name="masukkerja" autocomplete="off"
                                                        value="{{ $ct->masuk_kerja }}" readonly>
                                                </div>
                                                <label class="my-label-input">Cuti</label>
                                                <div class="my-input-modal">
                                                    <input type="text" name="cuti" autocomplete="off"
                                                        value="{{ $ct->jml_cuti }} Hari" readonly>
                                                </div>
                                            </div>
                                            <div class="my-right-content-modal">
                                                <label class="my-label-input">Keterangan</label>
                                                <div class="my-textarea-modal">
                                                    <textarea type="text" name="keterangan" autocomplete="off" readonly>{{ $ct -> kategori }} - {{ $ct->ket }}</textarea>
                                                </div>
                                                <label class="my-label-input">Status</label>
                                                <div class="my-input-modal">
                                                    <select id="status" name="status">
                                                        @if ($ct->status == 'Terkirim')
                                                        <option value="{{$ct->status}}" selected disabled>Diterima</option>
                                                        <option value="Diterima">Disetujui</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        @endif
                                                        @if ($ct->status == 'Ditolak')
                                                        <option value="{{$ct->status}}" selected disabled>{{$ct->status}}</option>
                                                        <option value="Diterima">Disetujui</option>
                                                        @endif
                                                        @if ($ct->status == 'Diterima')
                                                        <option value="{{$ct->status}}" selected disabled>Disetujui</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        @endif                                                  
                                                    </select>
                                                </div>
                                                <label class="my-label-input">Alasan</label>
                                                <div class="my-textarea-modal">
                                                    <textarea type="text" id="alasan" style="cursor: auto" name="alasan" autocomplete="off" placeholder="Jika Diperlukan*">{{{$ct->alasan}}}</textarea>
                                                </div>
                                                <button type="submit" class="my-editBtn-modal-edit">Update
                                                    Data</button>
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

            <!-- Toast -->
            @include('components/toast')
            <!-- Akhir Toast -->
            
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
<!-- Toast -->
<script>
    var successConf = "{{ session('successConf') }}";
    if (successConf) {
        // Berhasil Konfirmasi Ajuan Cuti
        var toast = document.getElementById("my-toast");
        var toastMessage = document.getElementById("toast-message");

        toastMessage.innerHTML = "Berhasil Mengkonfirmasi <b>Pengajuan Cuti</b>";
        toast.classList.add("my-toast-active");
        setTimeout(() => {
            toast.classList.remove("my-toast-active");
        }, 3000);
    }
</script>

</html>
