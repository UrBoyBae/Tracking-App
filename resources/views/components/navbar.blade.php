<div class="my-navbar">
    <div class="my-left-navbar">
        <a href="{{ route('dashboard') }}">
            <i class="uil uil-estate"></i>
        </a>
        <h4 class="my-arrow">></h4>
        <span class="my-link-name">{{ $title }}</span>
    </div>
    <div class="my-right-navbar">

        {{-- Permohonan Cuti Tidak Ada --}}
        {{-- <div class="my-wrap-notif">
            <div class="my-trigger-notif" id="my-trigger-notif" data-modal="my-notif-modal">
                <i class="uil uil-bell"></i>
            </div>
            <div class="my-modal-notif" id="my-notif-modal">
                <div class="my-title-notif">Notifikasi</div>
                <div class="my-inner-notif my-none-notif">
                    <span>Tidak Ada Permohonan Cuti</span>
                </div>
            </div>
        </div> --}}

        {{-- Permohonan Cuti Ada --}}
        <div class="my-notif"></div>
        <div class="my-wrap-notif">
            <div class="my-trigger-notif" id="my-trigger-notif" data-modal="my-notif-modal">
                <i class="material-symbols-rounded">
                    notifications
                </i>
            </div>
            <div class="my-modal-notif" id="my-notif-modal">
                <div class="my-title-notif">Notifikasi</div>
                <div class="my-inner-notif">
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Cuti</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Izin</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                    <div class="my-data-notif">
                        <img src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                            height="40px">
                        <div class="my-detail-data">
                            <span>Ali Akbar Abdillah - Sakit</span>
                            <span>01 Maret 2023 - 04 Maret 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img
            src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}">
        <span class="my-account">{{ $username }} </span>
    </div>
</div>
