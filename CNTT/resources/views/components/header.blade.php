<header class="header-body">
    <div class="header-item-img">
        <a href="">

            <img src="https://www.fullstack.co.za/img/logobig2.png" alt="">
        </a>
        <h4 class="test">Học Lập Trình Từ Zero đến Hero </h4>
    </div>
    @if(session('name') != 'admin')
    <form class="header-item-search" action="{{ route('search.search') }}" method="get">
        @csrf
        <div class="div-input-search">
            <input placeholder="Tìm kiếm bài học" name="search" value="{{ old('search') }}" type="text">
        </div>
        <button class="btn-submit"> <i class="fa-sharp fa-solid fa-magnifying-glass"></i> </button>
    </form>
    @endif
    @if(session('name'))
    <div class="header-login-wrap">
        <div class="header-item-login">

            <span class="header-item-login-text"><i style="padding-right: 4px;" class="fa-sharp fa-solid fa-user-tie"></i> {{ session('name') }}</span>
        </div>
        <div onclick="return confirm('Bạn có muốn đăng xuất không?')" class="header-item-login">
            <a class="header-item-login-text" href="{{ route('logout')}}"><i style="padding-right: 4px;" class="fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a>
        </div>
    </div>
    @else
    <div class="header-item-login">
        <a class="header-item-login-text" href="{{ route('login')}}"><i style="padding-right: 4px;" class="fa-solid fa-user-plus"></i>Đăng nhập</a>
    </div>
    @endif
</header>