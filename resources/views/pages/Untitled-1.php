<!-- Karyawan -->
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
    @foreach ($karyawan as $index=>$kyw)
    <div class="table-body">
        <div class="tbody-row">
            <span class="td-column">{{ $kyw->id_karyawan }}</span>
            <span class="td-column">{{ $kyw->nama}}</span>
            <span class="td-column">{{ $kyw->password}}</span>
            <span class="td-column">{{ Str::limit($kyw->alamat, 30) }}</span>
            <span class="td-column">{{ $kyw->jk}}</span>
            <span class="td-column">{{ $kyw->hp}}</span>
            <div class="td-column">
                <!-- <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a> -->
                <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" href="{{route ('deleteRoute', $kyw->id_karyawan)}}"><i class="uil uil-trash-alt" style="color: red;"></i></a>
                <!-- <a id="modal-update-trigger" data-toggle="modal" data-target="#modal-update" data-id="{{ $kyw->id_karyawan }}" onclick="modalUpdateUp()"><i class="uil uil-edit" style="margin-right: 7px; color: green;"></i></a><a value="{{$kyw->id_karyawan}}" id="modal-delete-trigger" onclick="modalDeleteUp()"><i class="uil uil-trash-alt" style="color: red;"></i></a> -->
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
                <form action="{{route('edit', $kyw->id_karyawan)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-form input-disable">
                        <input type="text" name="UID" placeholder="ID Karyawan" value="{{ $kyw->id_karyawan }}" readonly>
                    </div>
                    <div class="input-form">
                        <i class="uil uil-user"></i>
                        <input type="text" name="nama" placeholder="Nama Karyawan" value="{{ $kyw->nama}}">
                    </div>
                    <div class="input-form">
                        <i class="uil uil-lock"></i>
                        <input type="text" name="password" placeholder="Password" value="{{ $kyw->password}}">
                    </div>
                    <div class="input-form">
                        <i class="uil uil-map-pin"></i>
                        <input type="text" name="alamat" placeholder="Alamat" value="{{ $kyw->alamat}}">
                    </div>
                    <div class="input-form">
                        <i class="uil uil-mars"></i>
                        <input type="text" name="jk" placeholder="Jenis Kelamin" value="{{ $kyw->jk}}">
                    </div>
                    <div class="input-form">
                        <i class="uil uil-phone"></i>
                        <input type="text" name="hp" placeholder="No.Hp" value="{{ $kyw->hp}}">
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
                <form action="{{route ('deleteRoute', ['id_karyawan' => $kyw->id_karyawan])}}" method="post">
                    @csrf
                    <div class="delete-confirm">
                        <input type="hidden" value="{{$kyw->id_karyawan}}" name="value">
                        <span>Apakah Anda Yakin Ingin Menghapus Data <b>"{{$kyw->nama}}"</b> Ini ?</span>
                    </div>
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="pagination">
    {{ $karyawan->links() }}
</div>

<!-- Absensi -->
<div class="data-view">
    <!-- Table -->
    <div class="table">
        <div class="table-head">
            <span class="th-column">UID</span>
            <span class="th-column">Nama</span>
            <!-- <span class="th-column">Alamat</span> -->
            <span class="th-column">Tanggal Absen</span>
            <span class="th-column">Status</span>
            <span class="th-column">Action</span>
        </div>
        @foreach ($absen as $index=>$abs)
        <div class="table-body">
            <div class="tbody-row">
                <span class="td-column">{{ $abs->id_karyawan}}</span>
                <span class="td-column">{{ $abs->nama}}</span>
                <!-- <span class="td-column">Jl. Sukasenang II No.3</span> -->
                <span class="td-column">{{ $abs->jam_masuk}}</span>
                <span class="td-column">
                    <div id="status-badge">
                        <span id="title-badge" class="title-badge">{{ $abs->status }}</span>
                    </div>
                </span>
                <div class="td-column">
                    <a id="modal-view-trigger" onclick="modalViewUp()"><i class="uil uil-eye"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $absen->links()}}
    </div>
</div>