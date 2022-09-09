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
                    <a href="/" class="nav-link menu-header "
                        style="font-size: x-large;text-shadow: 0 0 10px #008885, 0 0 20px #69e0ff, 0 0 40px #69e0ff;">shopgenshin.com</a>
                </li>
                
            </ul>
            <div class=" navbar-nav" style="position: absolute;right: 35px;">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link"><button
                            class="btn-pretty">Đăng ký</button></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link" style="padding-left: unset"><button
                            class="btn-pretty">Đăng nhập</button></a>
                </li>
            </div>
        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"
            style="position: absolute;right: 35px;">
        </ul>
    </div>
</nav>