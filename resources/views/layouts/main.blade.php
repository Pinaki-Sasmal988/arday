<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Arday | Get Best College Informatoion</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('public/assets/img/favicon.ico')}}" type="image/x-icon">
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
<!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('/css/custom.css')}}"  rel="stylesheet">
    <!-- specific css -->
    @yield('specific-css')
    @yield('cap-specific-css')
    @yield('myApplications-css')

</head>

<body>
	@include('layouts.header')
	@yield('index-content')
	@yield('collegeList-content')
	@yield('collegeDetails-content')
	@yield('cap-content')
	@yield('myApplications-content')
	@yield('about-content')
	@yield('term-content')
	@yield('policy-content')
	@include('layouts.footer')
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_search"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/js/common_scripts.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
	<script src="{{asset('/assets/validate.js')}}"></script>
	<script src="{{asset('/js/customjs.js')}}"></script>
	@yield('cap-scripts')
	@yield('index-search-js')
	@yield('collegeList-script')
</body>
</html>