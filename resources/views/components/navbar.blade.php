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
        @if(count($datacuti) < 1)
            <div class="my-wrap-notif">
                <div class="my-trigger-notif" id="my-trigger-notif" data-modal="my-notif-modal">
                    <i class="material-symbols-rounded">
                        notifications
                    </i>
                </div>
                <div class="my-modal-notif" id="my-notif-modal">
                    <div class="my-title-notif">Notifikasi</div>
                    <div class="my-inner-notif my-none-notif">
                        <span>Tidak Ada Permohonan Cuti</span>
                    </div>
                </div>
            </div>
        @else
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
                        @foreach($datacuti as $index => $ct)
                            <div class="my-data-notif">
                                <img src="{{ $ct->jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}"
                                    height="40px">
                                <div class="my-detail-data">
                                    <span>{{$ct->nama}} - {{$ct->kategori}}</span>
                                    <span>{{$ct->mulai}} - {{$ct->akhir}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
        <img
            src="{{ $jk == 'L' ? asset('assets/images/genderProfile-L.png') : asset('assets/images/genderProfile-P.png') }}">
        <span class="my-account">Hai, <b>{{ $username }}</b> </span>
    </div>
</div>
