<div class="my-sidebar">
    <!-- Brand -->
    <div class="my-brand">
        <img src="{{asset('assets/images/icon-app.png')}}" width="30px">
        <span class="my-title">V-Attendance</span>
    </div>
    <!-- Menu -->
    <div class="my-sidebar-menu">
        <ul class="my-sidebar-link">
            <li>
                <a href="{{route('dashboard')}}" class="{{ ($title == 'Dashboard' ? 'my-selected-link' : '') }}">
                    <i class="material-symbols-rounded">grid_view</i>
                    <span class="my-link-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('karyawan')}}" class="{{ ($title == 'Data Karyawan' ? 'my-selected-link' : '') }}">
                    <i class="uil uil-users-alt"></i>
                    <span class="my-link-name">Data Karyawan</span>
                </a>
            </li>
            <li>
                <a href="{{route('absensi')}}" class="{{ ($title == 'Data Absensi' ? 'my-selected-link' : '') }}">
                    <i class="uil uil-file-info-alt"></i>
                    <span class="my-link-name">Data Absensi</span>
                </a>
            </li>
            <li>
                <a href="#" class="{{ ($title == 'Permohonan Cuti' ? 'my-selected-link' : '') }}">
                    <i class="uil uil-schedule"></i>
                    <span class="my-link-name">Permohonan Cuti</span>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{route('logout')}}">
                    <i class="uil uil-signout"></i>
                    <span class="my-link-name">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>