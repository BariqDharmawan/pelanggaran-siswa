<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/bootstrap/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/bootstrap/css/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/summernote/summernote-lite.css') }}">
	<link rel="stylesheet" href="{{ asset('modules/flag-icon-css/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @if (Route::currentRouteName() != 'login')
            <div class="navbar-bg"></div>
            @endif
            @auth
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                                <i class="ion ion-navicon-round"></i>
                            </a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Halo, {{ auth()->user()->role }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ion ion-log-out"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">SIPS</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="{{ asset('img/avatar/avatar.png') }}">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ auth()->user()->nama }}</div>
                            <div class="user-role">
                                {{ auth()->user()->role }}
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>

                        @if (auth()->user()->role == 'siswa')
                        <li class="@if(Route::currentRouteName() == 'siswa.index') active @endif" data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Halaman Utama">
                            <a href="{{ route('siswa.index') }}">
                                <i class="ion ion-speedometer"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="@if(Route::currentRouteName() == 'siswa.show') active @endif" data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Halaman Utama">
                            <a href="{{ route('siswa.show', $profile->NIS) }}">
                                <i class="ion ion-speedometer"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="@if(Route::currentRouteName() == 'siswa.pelanggaran') active @endif" data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Halaman Utama">
                            <a href="{{ route('siswa.pelanggaran') }}">
                                <i class="ion ion-speedometer"></i>
                                <span>Detail pelanggaran</span>
                            </a>
                        </li>
                        @else
                            <li class="@if(Str::contains(request()->url(), route('sekolah.dashboard'))) active @endif" data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Halaman Utama">
                                <a href="{{ route('sekolah.dashboard') }}">
                                    <i class="ion ion-speedometer"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Siswa"
                            class="@if(Str::contains(request()->url(), route('siswa.data'))) active @endif">
                                <a href="{{ route('siswa.data') }}"><i class="ion ion-ios-people"></i> Data Siswa</a>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Jurusan"
                            class="@if(Str::contains(request()->url(), route('sekolah.jurusan.index'))) active @endif">
                                <a href="{{ route('sekolah.jurusan.index') }}">
                                    <i class="ion ion-university"></i> Data Jurusan
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Kelas"
                            class="@if(Str::contains(request()->url(), route('sekolah.kelas.index'))) active @endif">
                                <a href="{{ route('sekolah.kelas.index') }}"><i class="ion ion-ios-book"></i> Data Kelas</a>
                            </li>
                            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Jenis Pelanggaran"
                            class="@if(Str::contains(request()->url(), route('sekolah.jenis-pelanggaran.index'))) active @endif">
                                <a href="{{ route('sekolah.jenis-pelanggaran.index') }}"><i class="ion ion-document-text"></i> Jenis Pelanggaran</a>
                            </li>

                            @if (auth()->user()->role == 'admin')
                                <li data-toggle='tooltip' data-placement='right' data-original-title='Data Akun Pengguna'
                                class="@if(Str::contains(request()->url(), route('sekolah.akun.index'))) active @endif">
                                    <a href='{{ route('sekolah.akun.index') }}'><i class='ion ion-key'></i> Manajemen Akun</a>
                                </li>
                            @endif

                            @if (auth()->user()->role == 'pegawai')
                            <li data-toggle="tooltip" data-placement="right" data-original-title="Pelanggaran Siswa"
                                class="@if(Str::contains(request()->url(), route('sekolah.pelanggaran-siswa.index')))active @endif">
                                <a href="{{ route('sekolah.pelanggaran-siswa.index') }}">
                                    <i class="ion ion-ios-book"></i> Pelanggaran Siswa
                                </a>
                            </li>
                            @endif
                        @endif
                    </ul>
                </aside>
            </div>
            @endauth

            <div class="main-content @guest pl-0 @endguest">
                <section class="section">
                    @hasSection('title-page')
                        <h1 class="section-header">
                            <div>@yield('title-page')</div>
                        </h1>
                    @endif
                    @yield('content')
                </section>
            </div>
            @auth
            <footer class="main-footer">
                <div class="footer-left">Kelompok RPL SIPS</div>
            </footer>
            @endauth
        </div>
    </div>

    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/tooltip.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/select2.full.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('js/sa-functions.js') }}"></script>
    <script src="{{ asset('modules/chart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('modules/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
