	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<header class="header fadeInDown">
		<div id="logo">
			<a href="{{ url('/') }}"><img src="{{asset('assets/img/ardaylogo.png')}}" width="149" height="42" alt=""></a>
		</div>
		<ul id="top_menu">
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
			<li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

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
            <li><a href="{{ url('/myApplications') }}" class="signup">My Applications</a></li>
			@endguest			
			{{-- <li><a href="#0" class="search-overlay-menu-btn">Search</a></li> --}}
			{{--<li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>--}}
			<li>
				<div class="hamburger hamburger--spin">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
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
						<h3>Engineering Colleges In</h3>
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
						<h3>Medical Colleges In</h3>
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
						<h3>Law Colleges In</h3>
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
						<h3>Management &amp; Other Colleges In</h3>
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
			<div class="follow_us">
				<ul>
					<li><a href="{{url('/cap')}}">Common Application Process</a></li>
				</ul>
				<ul>
					<li>Follow us</li>
					<li><a href="#0"><i class="ti-facebook"></i></a></li>
					<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="#0"><i class="ti-google"></i></a></li>
					<li><a href="#0"><i class="ti-pinterest"></i></a></li>
					<li><a href="#0"><i class="ti-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>