@php
$categories=App\Models\Category::all();
@endphp
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<header class="header fadeInDown">
		<div id="logo">
			<a class="logo-class mt-0" href="{{ url('/') }}"><img src="{{asset('assets/img/ardaylogo.png')}}" width="100" height="70" alt=""><span class="logo-text"> Arday</span></a>
		</div>
		<ul id="top_menu">
			<li class="dropdown-hover"><a href="#0" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
				 <div class="dropdown-menu header-dropdown">
				 	@foreach($categories as $category)
				      <a href="{{url('/collegeList/'.$category->category.'/All Cities')}}" class="dropdown-item text-dark dropdown-header-items">{{$category->category}}</a>
				    @endforeach
				    {{--<a class="dropdown-item text-dark dropdown-header-items" >Another action</a>
				    <a class="dropdown-item text-dark dropdown-header-items" >Something else here</a>--}}
				  </div>
				</div>

			</li>
			@guest
            @if (Route::has('login'))
			<li><a href="{{ route('login') }}" class="login">Login</a></li>
			@endif
			@if (Route::has('register'))
			<li><a href="{{ route('register') }}" class="signup">SignUp</a></li>
			@endif
			@else
			{{--
			<li><a href="" class="login">{{ Auth::user()->name }}</a></li>
			<li><a href="" class="signup">My Applications</a></li> --}}
			<li><a href="{{ url('/myApplications') }}" class="signup">Dashboard</a></li>
			<li class="nav-item dropdown mt-0">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Profile</a>
				<!-- {{ Auth::user()->name }} -->
                <div class="dropdown-menu dropdown-menu-right bg-warning ml-2" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark signup text-center" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
    
	
			<!-- <li><a href="{{ url('/myApplications') }}" class="signup">My Applications</a></li> -->
			@endguest			
			<!-- {{-- <li><a href="#0" class="search-overlay-menu-btn">Search</a></li> --}}
			{{--<li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>--}} -->
			<li>
				<div class="hamburger hamburger--spin">
					<!-- <div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div> -->
				</div>
			</li>
		</ul>
		<!-- /top_menu -->	
	 </header>
	<!-- /header -->
	
	<div id="main_menu">
		<div class="container">
			<nav class="version_2">
				<div class="row">
					<div class="col-md-3">
						<h3>Nursing Colleges In</h3>
						<ul>
							<li><a href="{{url('/collegeList/Engineering/Bangalore')}}">Bangalore</a></li>
							<li><a href="{{url('/collegeList/Engineering/Mumbai')}}">Mumbai</a></li>
                            <li><a href="{{url('/collegeList/Engineering/Pune')}}">Pune</a></li>
							<li><a href="{{url('/collegeList/Engineering/Chennai')}}">Chennai</a></li>
							<li><a href="{{url('/collegeList/Engineering/Hyderabad')}}">Hyderabad</a></li>
							<li><a href="{{url('/collegeList/Engineering/Ahemdabad')}}">Ahemdabad</a></li>
							<li><a href="{{url('/collegeList/Engineering/Coimbatore')}}">Coimbatore</a></li>
							<li><a href="{{url('/collegeList/Engineering/Indore')}}">Indore</a></li>
							<li><a href="{{url('/collegeList/Engineering/Lucknow')}}">Lucknow</a></li>
							<li><a href="{{url('/collegeList/Engineering/Delhi-NCR')}}">Delhi-NCR</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Pharmacy Colleges In</h3>
						<ul>
							<li><a href="{{url('/collegeList/Medical/Bangalore')}}">Bangalore</a></li>
							<li><a href="{{url('/collegeList/Medical/Mumbai')}}">Mumbai</a></li>
                            <li><a href="{{url('/collegeList/Medical/Pune')}}">Pune</a></li>
							<li><a href="{{url('/collegeList/Medical/Chennai')}}">Chennai</a></li>
							<li><a href="{{url('/collegeList/Medical/Hyderabad')}}">Hyderabad</a></li>
							<li><a href="{{url('/collegeList/Medical/Ahemdabad')}}">Ahemdabad</a></li>
							<li><a href="{{url('/collegeList/Medical/Coimbatore')}}">Coimbatore</a></li>
							<li><a href="{{url('/collegeList/Medical/Indore')}}">Indore</a></li>
							<li><a href="{{url('/collegeList/Medical/Lucknow')}}">Lucknow</a></li>
							<li><a href="{{url('/collegeList/Medical/Delhi-NCR')}}">Delhi-NCR</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Paramedical Colleges In</h3>
						<ul>
							<li><a href="{{url('/collegeList/Law/Bangalore')}}">Bangalore</a></li>
							<li><a href="{{url('/collegeList/Law/Mumbai')}}">Mumbai</a></li>
                            <li><a href="{{url('/collegeList/Law/Pune')}}">Pune</a></li>
							<li><a href="{{url('/collegeList/Law/Chennai')}}">Chennai</a></li>
							<li><a href="{{url('/collegeList/Law/Hyderabad')}}">Hyderabad</a></li>
							<li><a href="{{url('/collegeList/Law/Ahemdabad')}}">Ahemdabad</a></li>
							<li><a href="{{url('/collegeList/Law/Coimbatore')}}">Coimbatore</a></li>
							<li><a href="{{url('/collegeList/Law/Indore')}}">Indore</a></li>
							<li><a href="{{url('/collegeList/Law/Lucknow')}}">Lucknow</a></li>
							<li><a href="{{url('/collegeList/Law/Delhi-NCR')}}">Delhi-NCR</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Dental Colleges In</h3>
						<ul>
							<li><a href="{{url('/collegeList/Other/Bangalore')}}">Bangalore</a></li>
							<li><a href="{{url('/collegeList/Other/Mumbai')}}">Mumbai</a></li>
                            <li><a href="{{url('/collegeList/Other/Pune')}}">Pune</a></li>
							<li><a href="{{url('/collegeList/Other/Chennai')}}">Chennai</a></li>
							<li><a href="{{url('/collegeList/Other/Hyderabad')}}">Hyderabad</a></li>
							<li><a href="{{url('/collegeList/Other/Ahemdabad')}}">Ahemdabad</a></li>
							<li><a href="{{url('/collegeList/Other/Coimbatore')}}">Coimbatore</a></li>
							<li><a href="{{url('/collegeList/Other/Indore')}}">Indore</a></li>
							<li><a href="{{url('/collegeList/Other/Lucknow')}}">Lucknow</a></li>
							<li><a href="{{url('/collegeList/Other/Delhi-NCR')}}">Delhi-NCR</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</nav>
@php
$footer_details=App\Models\SiteDetails::find(1);
@endphp
			<div class="follow_us">
				<ul>
					<li><a href="{{url('/cap')}}">Common Application Process</a></li>
				</ul>
				<ul>
					<li>Follow us</li>
					<li><a href="{{'https://'.$footer_details->facebook}}"><i class="ti-facebook"></i></a></li>
					<li><a href="{{'https://'.$footer_details->twitter}}"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="{{'https://'.$footer_details->youtube}}"><i class="ti-youtube"></i></a></li>
					<li><a href="{{'https://wa.me/'.$footer_details->whatsapp}}"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="{{'https://'.$footer_details->instagram}}"><i class="ti-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	@section('dropdown')
	<script type="text/javascript">
	/*$('.dropdown-hover').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});*/
</script>
	@endsection