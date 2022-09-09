@include('dashboard.admin.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
@include('dashboard.admin.header')
@include('dashboard.admin.sidebar')
 
@yield('content')

@include('dashboard.admin.footer')