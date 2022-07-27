
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
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

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

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
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <figure>
                        <blockquote class="blockquote">
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Belanja Operasional Pendidikan Daerah SMK Negeri 1 Cipeundeuy Kab. Bandung Barat Prov. Jawa Barat <cite title="Source Title">BOPD TA. 2022</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('header')
        <div class="content mt-3">

        @yield('content')

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
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

</body>
</html>
