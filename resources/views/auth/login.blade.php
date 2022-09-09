@include('auth.header')

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="d3252abf388bc039bfa3efdc-|49"></script>

<body class="hold-transition sidebar-collapse layout-top-nav" onload=document.getElementById("noti_popup").click()>
    <div class="wrapper">

        @include('auth.headerlogin')

        <main>
            <section class="content">
                <div class="container-fluid">
                    <center><img src="https://uploadstatic-sea.mihoyo.com/contentweb/20200319/2020031919242255224.png"
                            class="city__icon"></center>
                    <h1 class="guide__title" style="margin-bottom: 72px;">Đăng nhập </h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="box-shadow: unset">
                                    <div class="card-body">
                                    @include('alert')
                                        <br>
                                        <form method="POST" action="{{ route('login') }}">
                                            {{-- <input type="hidden" 
                                                value="NT78Mm7qRYdPPSvBDpD4b8huEHK4dAYAAO0P7Q58"> --}}
                                            <div class="form-group row">
                                                <label for="login_name"
                                                    class="col-md-4 col-form-label text-md-right">Email đăng nhập</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                        class="concave form-control" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                </div>
                                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                                            </div>
                                            {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                                            <div class="form-group row">
                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                        class="concave form-control" name="password" required
                                                        autocomplete="current-password">
                                                </div>
                                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                            </div>
                                            {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                                            <div class="col-md-6 offset-md-4 mb-3">

                                                <script src="https://www.google.com/recaptcha/api.js" async defer type="d3252abf388bc039bfa3efdc-text/javascript"></script>
                                                <div class="g-recaptcha" id="feedback-recaptcha"
                                                    data-sitekey="6Lc_aRwfAAAAAFS6duES-NuYh4j4pwREMJAAf-KB"></div>

                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Đăng nhập
                                                    </button>
                                                    <a href="{{ route('register') }}"
                                                        class="btn btn-light">Đăng ký</a>
                                                    <a class="btn btn-link"
                                                        href="{{route('password.request')}}">
                                                        Quên mật khẩu? Lấy lại
                                                    </a>
                                                </div>
                                            </div>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="mt-5 p-3"
                        style="background: rgb(27 25 60 / 58%);color: #fff; margin-right: -6px; margin-left: -8px">
                        <div class="container-lg">
                            <h2 class="guide__title mt-3">
                                <span style="font-size: xx-large;font-family: cursive;"
                                    class="link-active">shopgenshin.com</span>
                            </h2>
                            <div class="row">
                                <section class="col-12 col-lg-4">
                                    <div class="h h4 link-active">Về shopgenshin.com</div>
                                    <p>Shop mua bán acc Genshin Impact lớn nhất Việt Nam !</p>
                                    <p>Shop Genshin Impact rẻ nhất và uy tin nhất!<br></p>
                                    <p>Dịch vụ : Mua Bán - Nạp Game - Uy Tín</p>
                                    <p class="mt-3 small">© shopgenshin.com</p>
                                </section>
                                <section class="col-12 col-lg-4">
                                    <div class="h h4 link-active">Chúng tôi</div>
                                    <p class="m-0">
                                    <p>Làm việc tận tâm hỗ trợ khách hàng nhiệt tình nhất có thể !</p>
                                    </p>
                                </section>
                                <section class="col-12 col-lg-4">
                                    <i class="fab fa-facebook-square fa-2x mr-2"></i>
                                    <i class="fab fa-youtube fa-2x"></i>
                                    <p class="mt-3 fw-bold"><i class="fa fa-phone mr-2"></i>Hotline: 0777.599.666</p>
                                    <p class="fw-bold"><i class="fa fa-clock mr-2"></i>Work time: 8h Sáng - 24h Tối
                                    </p>
                                    <p class="m-0"></p>
                                </section>
                            </div>
                        </div>
                    </footer>
                </div>
            </section>
        </main>
    </div>


    @include('auth.footer')
