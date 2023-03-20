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
                            <span class="link-name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('karyawan')}}">
                            <i class="uil uil-users-alt"></i>
                            <span class="link-name">Data Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('absensi')}}" class="selected-link">
                            <i class="uil uil-file-info-alt selected-link"></i>
                            <span class="link-name selected-link">Data Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-schedule"></i>
                            <span class="link-name">Permohonan Cuti</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
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
                    <span class="link-name">Data Absensi</span>
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
                    <!-- Date Time -->
                    <div class="date-time">
                        <i class="uil uil-calendar-alt"></i>
                        <span>{{ $day }}, {{ $tanggal }}</span>
                    </div>
                    <!-- Button Filter -->
                    <div class="sort-by">
                        <div class="btn" id="toggle-filter">
                            <span>Sort By</span>
                            <i class="uil uil-sliders-v-alt"></i>
                        </div>
                        <!-- Dropdown Sort By -->
                        <div class="dropdown-sortby">
                            <span class="title-sortby">Cari Data Berdasarkan :</span>
                            <!-- Form Sort By -->
                            <form action="/pages/absensi/filter" method="get">
                                <div class="form-sortby">
                                    <div class="sort-input">
                                        <div class="input-group">
                                            <label for="">Dari Tanggal</label>
                                            <input type="date" name="firstDate" id="firstDate" value="">
                                        </div>
                                        <span>-</span>
                                        <div class="input-group">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" name="secondDate" id="secondDate" value="">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label for="">UID Karyawan</label>
                                        <input type="text" name="uidkaryawan" id="uidkaryawan" placeholder="Masukkan UID">
                                    </div>
                                </div>
                                <button type="submit" name="search" class="sortby-search">
                                    <i class="uil uil-search-alt"></i>
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-container">
                    
                </div>

                <!-- <span class="footer">Made With <i class="uil uil-heart" style="color: red;"></i> &copy; 2023</span> -->
            </div>

        </div>
        <!-- Content -->

        <!-- Modal View -->
        <div class="modal-bg" id="modal-view">
            <div class="modal-view">
                <div class="modal-title">
                    <span>Detail Karyawan</span>
                    <div class="modal-close" id="modal-add-close" onclick="closeModalView()">X</div>
                </div>
                <!-- Modal Form -->
                <div class="modal-form">
                    <form action="">
                        <img src="" alt="" srcset="">
                        <div class="input-form input-disable">
                            <input type="text" placeholder="ID Karyawan" value="20981BA009" disabled>
                        </div>
                        <div class="input-form">
                            <i class="uil uil-user"></i>
                            <input type="text" placeholder="Nama Karyawan">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Lokasi Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Lokasi Keluar">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Tanggal Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Jam Masuk">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-lock"></i>
                            <input type="text" placeholder="Status">
                        </div>
                        <div class="input-form">
                            <i class="uil uil-map-pin"></i>
                            <input type="text" placeholder="Gambar">
                        </div>
                        <img src="https://trackingimage.000webhostapp.com/images/16-02-2023-002-Gifari.jpeg" width="120px">
                        <button type="submit" class="btn-add">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

