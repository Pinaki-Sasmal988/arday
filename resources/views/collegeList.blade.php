@extends('layouts.main')
@section('specific-css')
<link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
@endsection
@section('collegeList-content')
@php
	 $slider=App\Models\Slider::find(1);
	 $courses=App\Models\Category::all();
@endphp
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">	
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2800" data-pause="false">	
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100 carousel-img" src="{{asset('assets/img/'.$slider->slider1)}}" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 carousel-img" src="{{asset('assets/img/'.$slider->slider2)}}" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 carousel-img" src="{{asset('assets/img/'.$slider->slider3)}}" alt="Third slide">
					    </div>
					  </div>
					  <div id="search-box-container">
							<div class="container search-container-inside">
								<h1 class="fadeInUp college_type_class"><span></span>{{$college_type}} Colleges</h1>
								<p class="college_type_city">In {{$city}}</p>
							</div>
						</div>
					</div>
				</div>
			{{--	<div class="wrapper">
					<div class="container">
						<h1 class="fadeInUp"><span></span>Online courses</h1>
					</div>
				</div> --}}
		</section>
		<!--/hero_in-->
		{{--
		<div class="filters_listing sticky_horizontal">

			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
							<a href="courses-list.html"><i class="icon-th-list"></i></a>
						</div>
					</li>
					<li>
						<select name="orderby" class="selectbox">
							<option value="category">Category</option>
							<option value="category 2">Literature</option>
							<option value="category 3">Architecture</option>
							<option value="category 4">Economy</option>
						</select>
					</li>
				</ul>
			</div>
			
			<!-- /container -->
		</div>
			--}}
		<!-- /filters -->

		<div class="container-fluid margin_60_35">
			<div class="row">
				@if(count($results) != 0)
				<aside class="col-lg-3 col-sm-12" id="sidebar">
					<div id="filters_col"><a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<form id='course-filter-form' method="POST" action="{{route('collegeFilter')}}">
									@csrf
							<div class="filter_type">
								<h6 data-toggle="collapse" href="#category1" role="button" aria-expanded="false" aria-controls="category1" class="filter_category">Course</h6>
								<input type="text" name="filter_category" value="type" class="d-none">
								<ul class="collapse show" id="category1">
								    @foreach($courses as $course)
									<li>
										<label>
											<input type="checkbox" class="ucheck" value="{{$course->category}}" name="type_value[]">{{$course->category}}
										</label>
									</li>
									@endforeach
									<!--<li>-->
									<!--	<label>-->
									<!--		<input type="checkbox" class="ucheck" value="Managment" name="type_value[]"> Managment -->
									<!--	</label>-->
									<!--</li>-->
									<!--<li>-->
									<!--	<label>-->
									<!--		<input type="checkbox" class="ucheck" value="Law" name="type_value[]"> Law-->
									<!--	</label>-->
									<!--</li>-->
									<!--<li>-->
									<!--	<label>-->
									<!--		<input type="checkbox" class="ucheck" value="Other"> Other-->
									<!--	</label>-->
									<!--</li>-->
								</ul>
							</div>
							<!--------------onetype ends------------------>	
							<div class="filter_type">
									<h6 data-toggle="collapse" href="#category2" role="button" aria-expanded="false" aria-controls="category2" class="filter_category">State</h6>
									<ul class="collapse state-filter" id="category2">
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Karnataka"> Karnataka
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Tamil Nadu"> Tamil Nadu
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Maharashtra"> Maharashtra
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Uttar Pradesh"> Uttar Pradesh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Kerala"> Kerala
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Gujarat"> Gujarat
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Madhya Pradesh"> Madhya Pradesh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Telangana"> Telangana
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="West Bengal"> West Bengal
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Haryana"> Haryana
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Andhra Pradesh"> Andhra Pradesh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Punjab"> Punjab
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Rajasthan"> Rajasthan
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Delhi-Ncr"> Delhi-Ncr
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Orissa"> Orissa
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Uttarakhand"> Uttarakhand
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Bihar"> Bihar
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Assam"> Assam
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Chhattisgarh"> Chhattisgarh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Himachal Pradesh"> Himachal Pradesh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Jharkhand"> Jharkhand
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Chandigarh"> Chandigarh
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Goa"> Goa
											</label>
										</li>
										<li>
											<label>
												<input name="state_value[]" type="checkbox" class="ucheck" value="Arunachal Pradesh"> Arunachal Pradesh
											</label>
										</li>
									</ul>
							</div>
							<!--------------onetype ends------------------>
							<!--------------onetype ends------------------>
							{{--<div class="filter_type">
									<h6 data-toggle="collapse" href="#category5" role="button" aria-expanded="false" aria-controls="category5" class="filter_category">Course Duration</h6>
									<ul class="collapse" id="category5">
										<li>
											<label>
												<input name="duration_value[]" type="checkbox" class="ucheck" value="1"> 1 Year
											</label>
										</li>
										<li>
											<label>
												<input name="duration_value[]" type="checkbox" class="ucheck" value="2"> 2 Years
											</label>
										</li>
										<li>
											<label>
												<input name="duration_value[]" type="checkbox" class="ucheck" value="3"> 3 Years
											</label>
										</li>
										<li>
											<label>
												<input name="duration_value[]" type="checkbox" class="ucheck" value="4"> 4 Years
											</label>
										</li>
										<li>
											<label>
												<input name="duration_value[]" type="checkbox" class="ucheck" value="5"> 5 Years
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="ucheck" value="5_plus"> Above 5 Years
											</label>
										</li>
									</ul>
							</div>--}}
							<!--------------onetype ends------------------>
						<div class="filter_type text-center">
						<hr>	
							<button type="submit" class="btn btn-success btn-sm">Apply Filters</button>
						</div>
						</form>	
						</div>
						<!--/collapse -->
					</div> 
					<!--/filters col-->
				</aside>
				<!-- /aside -->
				<div class="col-lg-9 col-md-12 col-12 mx-auto">
					@if (\Session::has('success'))
				    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
				        <ul style="margin-top: 1%;padding: 0 5px;">
				            <li>{!! \Session::get('success') !!}</li>
				        </ul>
				    </div>
					@endif
					@include('layouts.collegeList-list')
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="course-detail.html " class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid 
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails')}}"><img src="https://3.bp.blogspot.com/-icrIU-nqp-s/WxDWHHoR9DI/AAAAAAAA8Ws/mCHAYBBQbCkgaLybC_JpKqL-NG-oYPz-QCLcBGAs/s1600/KIET%2BLogo.png" class="img-fluid collg-list-collg-img" alt=""></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>Krishna Institute Of Engineering and Technology</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>Ghaziabad,Delhi/NCR</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. 1999</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> AICTE, NAAC, NBA</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i> AKTU</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>8/10 </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails')}}" class="full-details-btn">Details</a></li>
									<li><a href="" data-toggle="modal" data-target="#modalLRForm">Enroll now</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /box_grid -->
					</div>
					<!-- /row -->
					{{-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p> --}}
				</div>
				<!-- /col -->
				@else
				<div class="text-center mx-auto">
				<h4 class="text-center ml-4">Sorry there are no colleges Registered with us at this location.</h4>
				</div>
				@endif
			</div>
			{{-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p> --}}
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Call at +91-91139 68174  or </p>
							<p>Email: careercognitive1@gmail.com</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{url('/cap')}}" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Common Application Form</h4>
							<p>Fill One Form and we,will notify you the best.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Free Service</h4>
							<p>Register and Use for Free.</p><br>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
@include('applyModal')	
@endsection
@section('collegeList-script')
<script src="{{asset('js/collegeList-script.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('.enroll_now_bt').on('click',function(){
			var college_name=$(this).attr('data-value');
			var college_id=$(this).attr('data-id');
			$('.modal_college_name').text(college_name +' Application.');
			$('input[name="college_name"]').val(college_name);
			$('input[name="college_id"]').val(college_id);
			$.ajax({
				url:"{{route('populateCourse')}}",
				type:'get',
				data:{college_name:college_name,college_id:college_id},
				success(data){
					$('#education_apply').html(data);
				},

			});
		});
	});
</script>
@endsection