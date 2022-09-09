<body class="hold-transition sidebar-collapse layout-top-nav" onload=document.getElementById("noti_popup").click()>
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md nav-header mb-4">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"
                            style="text-shadow: 2px 2px 2px #000000;color: #fff;"></i></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link menu-header shine-active"
                                style="font-size: x-large;text-shadow: 0 0 10px #008885, 0 0 20px #69e0ff, 0 0 40px #69e0ff;">shopgenshin.com</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link menu-header shine-active"><i
                                    class="ficon fa-lg fa fa-home"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle menu-header ">Nạp tiền</a>
                            <ul class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                                <li><a href="https://shopgenshin.com/user/money/phone-card/send-card"
                                        class="dropdown-item "><i class="fas fa-money-check-alt mr-1"></i> Nạp bằng thẻ
                                        cào</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="https://shopgenshin.com/user/money/auto-bank/info" class="dropdown-item"><i
                                            class="fas fa-university mr-1"></i> Nạp bằng bank, ví</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#recharge_service" class="nav-link menu-header">Nạp Game</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://shopgenshin.com/genshin/acc/my-acc" class="nav-link menu-header ">Lịch Sử
                                Mua</a>
                        </li>
                    </ul>
                    
                    
                    <div class=" navbar-nav" style="position: absolute;right: 35px;">
                        {{-- <li class="nav-item">
                            <a href="https://shopgenshin.com/auth/register" class="nav-link"><button
                                    class="btn-pretty">Đăng ký</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="login" class="nav-link" style="padding-left: unset"><button
                                    class="btn-pretty">Đăng nhập</button></a>
                        </li> --}}
                    @guest
                        @if (Route::has('login'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link"><button
                                        class="btn-pretty">Đăng Nhập</button></a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link"><button
                                        class="btn-pretty">Đăng ký</button></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a> --}}

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="nav-item">
                            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="dropdown-toggle btn btn-block btn-outline-warning font-weight-bold"
                                style="background: rgb(89 84 173 / 25%);">
                                <span class="text-light">{{ Auth::user()->name }}</span> 0<sup>đ</sup>
                            </span>
                            <ul class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                                <li><span class="dropdown-item text-center text-sm text-muted">Level: member</span></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="" class="dropdown-item "><i
                                            class="fas fa-history mr-1"></i> Biến động số dư</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="" class="dropdown-item "><i
                                            class="fas fa-history mr-1"></i> Lịch sử khác</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="" class="dropdown-item "><i
                                            class="fas fa-key mr-1"></i> Đổi mật khẩu</a></li>
                                <li class="dropdown-divider"></li>
                                {{-- <li><a href="{{ route('logout') }}" class="dropdown-item "><i class="fa fa-dungeon mr-1"></i> Đăng
                                        xuất</a></li> --}}
                            </ul>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link menu-header mr-5" title="Đăng xuất"><i
                                        class="fa fa-dungeon" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"></i> </a>
                            </li>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    </div>


                    
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"
                    style="position: absolute;right: 35px;">
                </ul>
            </div>
        </nav>