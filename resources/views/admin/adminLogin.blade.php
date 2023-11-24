<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Log In</title>
        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{asset('assets/admin/vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{asset('assets/admin/css/app.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-material-icons.css')}}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

        <!-- Flatpickr -->
{{--         <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr.rtl.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr-airbnb.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr-airbnb.rtl.css')}}"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="{{asset('assets/admin/vendor/jqvmap/jqvmap.min.css')}}"
              rel="stylesheet"> --}}
    <style type="text/css">
        body{
            background: hsla(266, 63%, 26%, 1);

background: linear-gradient(115deg, hsla(266, 63%, 26%, 1) 0%, hsla(354, 55%, 63%, 1) 50%, hsla(31, 100%, 74%, 1) 100%);

background: -moz-linear-gradient(115deg, hsla(266, 63%, 26%, 1) 0%, hsla(354, 55%, 63%, 1) 50%, hsla(31, 100%, 74%, 1) 100%);

background: -webkit-linear-gradient(115deg, hsla(266, 63%, 26%, 1) 0%, hsla(354, 55%, 63%, 1) 50%, hsla(31, 100%, 74%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#3E196E", endColorstr="#D46C76", GradientType=1 );
        }
.layout-login-centered-boxed__form{
    margin-top: 150px !important;
}
    </style>          
    </head>

    <body class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card" style="margin-top: 80px !important;">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href=""
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">
                    <span class="text-primary mr-2">
                        <img src="{{asset('assets/img/logo-dark.png')}}" height="82">
                    </span>
                    <span>Career Cognitive</span>
                </a>
                <p class="m-0">Login to access Admin Account </p>
            </div>

            {{--<div class="alert alert-soft-success d-flex"
                 role="alert">
                 <i class="material-icons mr-3">check_circle</i> 
                <div class="text-body"></div>
            </div>--}}
            <div class="page-separator">
                <div class="page-separator__text"></div>
            </div>

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2"
                               type="email"
                               required=""
                               class="form-control form-control-prepended  @error('email') is-invalid @enderror"
                               placeholder="john@doe.com" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror       
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2"
                               type="password"
                               required=""
                               class="form-control form-control-prepended @error('password') is-invalid @enderror" name="password"
                               placeholder="Enter your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary"
                            type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                  {{--  <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                               class="custom-control-input"
                               checked=""
                               id="remember">
                        <label class="custom-control-label"
                               for="remember">Remember me for 30 days</label>
                    </div> --}}
                </div>
                <div class="form-group text-center mt-4">
                    <a href="{{ route('password.request') }}">Forgot password?</a> {{-- <a class="mt-2 text-body text-underline"
                       href="signup-centered-boxed.html">Sign up!</a> --}}
                </div>
            </form>
        </div>

        <!-- jQuery -->
        <script src="{{asset('assets/admin/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('assets/admin/vendor/popper.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{asset('assets/admin/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{asset('assets/admin/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{asset('assets/admin/vendor/material-design-kit.js')}}"></script>

        <!-- App -->
        <script src="{{asset('assets/admin/js/toggle-check-all.js')}}"></script>
        <script src="{{asset('assets/admin/js/check-selected-row.js')}}"></script>
        <script src="{{asset('assets/admin/js/dropdown.js')}}"></script>
        <script src="{{asset('assets/admin/js/sidebar-mini.js')}}"></script>
        <script src="{{asset('assets/admin/js/app.js')}}"></script>
    </body>

</html>