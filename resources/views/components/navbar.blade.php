<div class="my-navbar">
    <div class="my-left-navbar">
        <a href="{{route('dashboard')}}">
            <i class="uil uil-estate"></i>
        </a>
        <h4 class="my-arrow">></h4>
        <span class="my-link-name">{{ $title }}</span>
    </div>
    <div class="my-right-navbar">
        <!-- <div class="my-notif"></div>
                    <i class="uil uil-bell"></i> -->
        <span class="my-account">Admin</span>
        <img src="{{asset('assets/images/account.png')}}" alt="">
    </div>
</div>