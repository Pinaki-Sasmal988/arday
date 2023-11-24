{{--
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
@php
use App\Models\State;
use App\Models\Category;
$states=State::all();
$courses=Category::all();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Register</title>
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

<body id="register_bg" class="login-page-bg">
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->
    
    <div id="login">
        <aside class="login-aside mx-auto register-aside" style="overflow-y:;">
            <figure>
                <a href="{{url('/')}}"><img src="{{asset('assets/img/ardaylogo.png')}}" width="150" height="110" alt=""></a>
            </figure>
            <form method="POST" action="{{ route('register') }}">
                <div class="form-group mt-2 mb-0">
                    @csrf
                    <span class="input">
                    <input class="input_field register_input_field @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" name="name">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit ">Name</span>
                    </label>
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input col ml-1">
                    <input class="input_field register_input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Email</span>
                    </label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                    </span>

                    <span class="input">
                    <input class="input_field register_input_field @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" type="text">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Mobile</span>
                    </label>
                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                    
                    
                    <span class="input">
                    <select class="input_field @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" >
                        <option value="0">Select Course</option>
                         @foreach($courses as $course)
                         <option value="{{$course->category}}">{{$course->category}}</option>
                        @endforeach
                    </select> 
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Preferred Course</span>
                    </label>
                    @error('course')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input">
                    <select class="input_field @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" >
                        <option value="0">Select State</option>
                         @foreach($states as $state)
                         <option value="{{$state->state}}">{{$state->state}}</option>
                        @endforeach
                    </select> 
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">State</span>
                    </label>
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                    
                    
                    
                    
                    <span class="input">
                    <input class="input_field register_input_field  @error('password') is-invalid @enderror" name="password" type="password" id="password1">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Your password</span>
                    </label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input">
                        <input class="input_field register_input_field" type="password" id="password2" name="password_confirmation" required>
                        <label class="input_label">
                            <span class="input__label-content input__label-content-edit">Confirm password</span>
                        </label>
                    </span>

                    <div id="pass-info" class="clearfix mb-0"></div>
                </div>
                <button type="submit" class="btn_1 rounded full-width">Register</button>
                <a href="/googleLogin"><img src="{{asset('assets/img/sign-up.png')}}" height="67" /><a>
                <a href="/facebookLogin"><img src="{{asset('assets/img/facebook-signup1.jpg')}}" height="53" /><a>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('login')}}">Sign In</a></strong></div>
            </form>
            <div class="copy" style="position:unset !important;">© {{date('Y')}} Horsan Technology</div>
        </aside>
    </div>
    <!-- /login -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/pw_strenght.js"></script>
  
</body>
</html>