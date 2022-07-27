
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
<body><br><br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
