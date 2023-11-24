{{--
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Login</title>
        <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('assets/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('assets/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('/css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('/css/custom.css')}}"  rel="stylesheet">
    <!-- specific css -->

</head>

<body id="login_bg" class="login-page-bg">
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->
    
    <div id="login">
        <aside class="login-aside mx-auto">
            <figure>
                <a href="{{url('/')}}"><img src="{{asset('assets/img/ardaylogo.png')}}" height="100" alt=""></a>
            </figure>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="divider"><span>Welcome Back!</span></div>
                <div class="form-group">
                    <span class="input">
                    <input class="input_field @error('email') is-invalid @enderror" type="email" autocomplete="off" name="email"value="{{ old('email') }}">
                        <label class="input_label">
                        <span class="input__label-content">Your email</span>
                    </label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input">
                    <input class="input_field @error('password') is-invalid @enderror" type="password" autocomplete="new-password" name="password">
                        <label class="input_label">
                        <span class="input__label-content">Your password</span>
                    </label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                    <small><a href="{{ route('password.request') }}">Forgot password?</a></small>
                </div>
                <button class="btn_1 rounded full-width add_top_60" type="submit">Login</button>
                <div class="text-center add_top_10">New to Our Portal? <strong><a href="{{url('register')}}">Sign up!</a></strong></div>
            </form>
            <div class="copy" style="position:unset !important;">© {{date('Y')}} Horsan Technology</div>
        </aside>
    </div>
    <!-- /login -->
        
    <!-- COMMON SCRIPTS -->
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/js/common_scripts.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/assets/validate.js')}}"></script>
    <script src="{{asset('/js/customjs.js')}}"></script> 
  
</body>
</html>
