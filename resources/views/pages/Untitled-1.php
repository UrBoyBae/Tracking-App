<div class="main-content">
        <!-- SideBar -->
        <nav>
            <!-- Title -->
            <div class="logo">
                <div class="logo-name">
                    <span class="title">V-Attendance</span>
                </div>
            </div>

            <!-- Nav Links -->
            <div class="nav-menu">
                
            </div>
        </nav>
        <!-- SideBar -->

        <!-- Content -->
        <div class="content-view">
            <div class="content-top">
                <div class="left-content">
                    <a href="{{route('dashboard')}}">
                        <i class="uil uil-estate"></i>
                    </a>
                    <span class="link-name">Dashboard</span>
                </div>
                <div class="right-content">
                    <div class="notification"></div>
                    <i class="uil uil-bell"></i>
                    <img src="{{asset('assets/images/account.png')}}" alt="">
                </div>
            </div>
            <div class="content-center">
                <div class="card-view">
                    <div class="card-content">
                        <i class="uil uil-users-alt"></i>
                        <span class="count">{{$kar}}</span>
                        <span class="title-card">Jumlah Karyawan</span>
                    </div>
                    <div class="card-content">
                        <i class="uil uil-file-info-alt"></i>
                        <span class="count">{{$abs}}</span>
                        <span class="title-card">Absensi</span>
                    </div>
                    <div class="card-content">
                        <i class="uil uil-schedule"></i>
                        <span class="count">{{$cuti}}</span>
                        <span class="title-card">Permohonan Cuti</span>
                    </div>
                </div>
                <span class="footer">Made With <i class="uil uil-heart" style="color: red;"></i> &copy; 2023</span>
            </div>
        </div>
        <!-- Content -->
    </div>