@include('auth.header')
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="8f1b8cf0b3613fb15c2e501c-|49"></script>

<body class="hold-transition sidebar-collapse layout-top-nav" onload=document.getElementById("noti_popup").click()>
    <div class="wrapper">

        @include('auth.headerlogin')

        <main>
            <section class="content">
                <div class="container-fluid">
                    <center><img src="https://uploadstatic-sea.mihoyo.com/contentweb/20200319/2020031919242255224.png"
                            class="city__icon"></center>
                    <h1 class="guide__title" style="margin-bottom: 72px;"></h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Register shopgenshin.com</div>
                                    <div class="card-body">
                                        {{-- @include('alert') --}}
                                        <form method="POST" action="{{ route('register') }}">
                                            {{-- <input type="hidden" 
                                                value="NT78Mm7qRYdPPSvBDpD4b8huEHK4dAYAAO0P7Q58"> --}}
                                            <div class="form-group row">
                                                <label for="full_name"
                                                    class="col-md-4 col-form-label text-md-right ">Họ và tên</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        placeholder="Tên này công khai, người khác có thể thấy"
                                                        autocomplete="name" autofocus>
                                                </div>
                                            </div>
                                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                            {{-- <div class="form-group row">
                                                <label for="login_name"
                                                    class="col-md-4 col-form-label text-md-right">Tên đăng nhập</label>
                                                <div class="col-md-6">
                                                    <input id="login_name" type="text" class="form-control "
                                                        name="login_name" value="{{old('login_name') }}" required autocomplete="name"
                                                        autofocus placeholder="Giữ bí mật, không điền giống bên trên">
                                                </div>
                                            </div> --}}
                                            
                                            <div class="form-group row">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">Địa chỉ email</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        placeholder="Chính xác để lấy lại mật khẩu nếu quên"
                                                        autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label text-md-right">Số
                                                    điện thoại</label>
                                                <div class="col-md-6">
                                                    <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror"
                                                        name="phone" value="{{ old('phone') }}" required
                                                        placeholder="Chính xác để lấy lại mật khẩu nếu quên">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required placeholder="Điền tối thiểu 8 ký tự"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                            {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                             name="password" required autocomplete="new-password"> --}}
                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                    class="col-md-4 col-form-label text-md-right">Xác nhận mật
                                                    khẩu</label>
                                                <div class="col-md-6">
                                                    <input id="password_confirm" type="password" class="form-control"
                                                        name="password_confirmation" required
                                                        placeholder="Nhập lại mật khẩu giống bên trên"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                            {{-- <input id="password-confirm" type="password" class="form-control"
                                             name="password_confirmation" required autocomplete="new-password"> --}}
                                            {{-- <div class="col-md-6 offset-md-4 mb-3">

                                                <script src="https://www.google.com/recaptcha/api.js" async defer type="8f1b8cf0b3613fb15c2e501c-text/javascript"></script>
                                                <div class="g-recaptcha" id="feedback-recaptcha"
                                                    data-sitekey="6LfJo3whAAAAAMU3IEn9u0S08lWg3zZjdx0rvAnU"></div>

                                            </div> --}}
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Đăng ký
                                                    </button>
                                                    <a href="login" class="btn btn-light">Đăng nhập</a>
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