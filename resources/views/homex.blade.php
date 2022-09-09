@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <li class="nav-item">
        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="dropdown-toggle btn btn-block btn-outline-warning font-weight-bold"
            style="background: rgb(89 84 173 / 25%);">
            <span class="text-light">[142412] adminpro:</span> 0<sup>đ</sup>
        </span>
        <ul class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
            <li><span class="dropdown-item text-center text-sm text-muted">Level: member</span></li>
            <li class="dropdown-divider"></li>
            <li><a href="https://shopgenshin.com/user/history/money" class="dropdown-item "><i
                        class="fas fa-history mr-1"></i> Biến động số dư</a></li>
            <li class="dropdown-divider"></li>
            <li><a href="https://shopgenshin.com/user/history/user" class="dropdown-item "><i
                        class="fas fa-history mr-1"></i> Lịch sử khác</a></li>
            <li class="dropdown-divider"></li>
            <li><a href="https://shopgenshin.com/user/change-password" class="dropdown-item "><i
                        class="fas fa-key mr-1"></i> Đổi mật khẩu</a></li>
            <li class="dropdown-divider"></li>
            <li><a href="https://shopgenshin.com/logout" class="dropdown-item "><i class="fa fa-dungeon mr-1"></i> Đăng
                    xuất</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="https://shopgenshin.com/logout" class="nav-link menu-header mr-5" title="Đăng xuất"><i
                class="fa fa-dungeon"></i> </a>
    </li>

