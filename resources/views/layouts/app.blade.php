<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="#">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/scss/style.css')}}">
    <link rel="stylesheet" href="{{ asset('tamp/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    {{-- <link rel="stylesheet" href="{{ asset('tamp/assets/css/footer.css')}}"> --}}

</head>
<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="col-sm-1">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">BOPD 2022</a>
                    <a class="navbar-brand hidden" href="/"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <li class="active">
                            <a href="/pegawai"> <i class="menu-icon fa fa-dashboard"></i>Tambah Pegawai </a>
                        </li>
                        <h3 class="menu-title">Rincian Kode Rekening</h3><!-- /.menu-title -->
                        <li>
                            <a href="/daftar_belanja"> <i class="menu-icon ti-menu"></i>Tambah Kode Rekening </a>
                        </li>

                        <h3 class="menu-title">Penatausahaan</h3><!-- /.menu-title -->
                        <li>
                            <a href="#"> <i class="menu-icon fa fa-sign-in"></i>Tambah Nilai Bulanan </a>
                            <a href="#"> <i class="menu-icon fa fa-sign-in"></i>Tambah Transaksi Bank </a>
                        </li>

                        <h3 class="menu-title">Download Rekapan</h3><!-- /.menu-title -->
                        <li>
                            <a href="#"> <i class="menu-icon fa fa-sign-in"></i>Buku Kas Umum </a>
                            <a href="#"> <i class="menu-icon fa fa-sign-in"></i>K7b </a>
                            <a href="#"> <i class="menu-icon fa fa-sign-in"></i>K7c </a>
                        </li>

                        <h3 class="menu-title">Keluar</h3><!-- /.menu-title -->
                        <li>
                            <a class="btn btn-primary" role="button" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Keluar') }}
                         </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class="text-center">
                            <a href="#" class="light">Versi 0.1</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            <!-- Header-->
            <header>
                <div  class="card text-center">
                    <div class="card-header">
                        <span id="date_time"></span>
                    </div>
                </div>
            </header>

            <!-- /header -->
            @yield('header')
                <div class="content mt-3">
                    @yield('content')
                </div> <!-- .content -->

        </div><!-- /#right-panel -->




        <!-- Right Panel -->
        <script src="{{ asset('tamp/assets/js/datetime.js')}}"></script>
        <script type="text/javascript">window.onload = date_time('date_time');</script>
        <script src="{{ asset('tamp/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="{{ asset('tamp/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/main.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/dashboard.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/widgets.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
        <script src="{{ asset('tamp/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
        {{-- <link rel="stylesheet" href="{{ asset('tamp/assets/css/bg.css')}}"> --}}

</body>
</html>

