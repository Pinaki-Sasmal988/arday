@extends('layouts.main')
@section('index-content')
	<!-- /main_menu 2-->
	@php
	 $slider=App\Models\Slider::find(1);
	@endphp
	<main>
		<section class="hero_single version_2">
			{{--<div class="wrapper"> --}}
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
								<h3>Looking For Best Colleges</h3>
								<p>Your Search Ends Here</p>
								<form autocomplete="off">
									<div id="custom-search-input">
										<div class="input-group">
											<input type="text" class="search-query" placeholder="Search Colleges" id="college_name">
											<input type="submit" class="btn_search" value="Search">
											<div id="collegeList" class="college_list_search_field">
    										</div>
    										{{ csrf_field() }}
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			{{--</div> --}}	
			{{--<div class="wrapper">
				<div class="container">
					<h3>Looking For Best Colleges</h3>
					<p>Your Search Ends Here</p>
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="Search Colleges">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
					</form>
				</div>
			</div> --}}
		</section>
		<!-- /hero_single -->
<nav class="secondary_nav sticky_horizontal" style="padding:3px 0;"></nav>
		<div class="features clearfix">

			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 Colleges</h4><span>We've them All</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Genuine Details</h4><span>Find the right institute for you</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Choose the best</h4><span>Increase your personal expertise</span>
					</li>
				</ul>
			</div>
		</div>
<nav class="secondary_nav sticky_horizontal" style="padding:3px 0;"></nav>		
		<!-- /features -->

		<div class="container-fluid margin_120_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Admissions for 2021</h2>
				<p>Get details of Best Colleges in India.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							{{--<a href="#0" class="wish_bt"></a>--}}
							<a href="course-detail.html">
								<div class="preview"><span>Preview course</span></div><img src="{{asset('assets/img/engineering.svg')}}" class="img-fluid" alt=""></a>
							{{-- <div class="price">$39</div> --}}

						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Engineering</h3>
							<p>View the best Engineering Colleges.</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 100+</li>
							{{-- <li><i class="icon_like"></i> 890</li> --}}
							<li><a href="{{url('/collegeList/Engineering/All Cities')}}">View Now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							{{--<a href="#0" class="wish_bt"></a>--}}
							<a href="{{url('/collegeList/Medical/All Cities')}}"><img src="{{asset('assets/img/medical.svg')}}" class="img-fluid" alt=""></a>
							{{-- <div class="price">$45</div> --}}
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Medical</h3>
							<p>Find the best Medical Colleges</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 60+</li>
							{{-- <li><i class="icon_like"></i> 890</li> --}}
							<li><a href="{{url('/collegeList/Medical/All Cities')}}">View Now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							{{--<a href="#0" class="wish_bt"></a>--}}
							<a href="{{url('/collegeList/Management/All Cities')}}"><img src="{{asset('assets/img/management.svg')}}" class="img-fluid" alt=""></a>
							{{-- <div class="price">$54</div> --}}
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Management</h3>
							<p>Choose From a variety of MBA Colleges.</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 50+</li>
							{{-- <li><i class="icon_like"></i> 890</li> --}}
							<li><a href="{{url('/collegeList/Management/All Cities')}}">View Now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							{{--<a href="#0" class="wish_bt"></a>--}}
							<a href="{{url('/collegeList/Law/All Cities')}}"><img src="{{asset('assets/img/law.svg')}}" class="img-fluid" alt=""></a>
							{{-- <div class="price">$27</div> --}}
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Law</h3>
							<p>Compare the best according to your preference.</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 10+</li>
							{{-- <li><i class="icon_like"></i> 890</li> --}}
							<li><a href="{{url('/collegeList/Law/All Cities')}}">View Now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							{{--<a href="#0" class="wish_bt"></a>--}}
							<a href="{{url('/collegeList/Other/All Cities')}}"><img src="{{asset('assets/img/others.svg')}}" class="img-fluid" alt=""></a>
							{{-- <div class="price">$35</div> --}}
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Other Colleges</h3>
							<p>Check the other colleges.</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 70+</li>
							{{-- <li><i class="icon_like"></i> 890</li> --}}
							<li><a href="{{url('/collegeList/Other/All Cities')}}">View Now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			{{--	<div class="item">
					<div class="box_grid">
						<figure class="index-college-category-image">
							<a href="#0" class="wish_bt"></a>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_6.jpg" class="img-fluid" alt=""></a>
							<div class="price">$54</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating rating-index"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div> --}}
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				{{-- <p class="btn_home_align"><a href="courses-grid.html" class="btn_1 rounded">View all courses</a></p> --}}
			</div>
			<!-- /container -->
			<hr>
		</div>
		<!-- /container -->
		@if(count($popular_colleges)>0)
		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Popular Colleges</h2>
				{{-- <p>Just a few points of what we offer.</p> --}}
			</div>
			<div class="row">
				@foreach($popular_colleges as $college)
				<div class="col-lg-4 col-md-4 wow" data-wow-offset="150">
					<a href="{{url('collegeDetails/'.$college->id.'/'.$college->college_name)}}" class="grid_item">
						<figure class="block-reveal" style="height: 200px;">
							<div class="block-horizzontal"></div>
							<img src="{{asset('assets/img/college_logo/'.$college->logo)}}" class="img-fluid why-choose-image" alt="">
							<div class="info">
								<h3>{{$college->college_name}}</h3>
								<small><i class="ti-layers"></i>{{$college->city.','.$college->state}}</small>
							</div>
						</figure>
					</a>
				</div>
				@endforeach
				<!-- /grid_item -->
				<!-- /grid_item 
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_4.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Science and Biology</h3>
							</div>
						</figure>
					</a>
				</div> -->
				<!-- /grid_item 
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_5.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Law and Criminology</h3>
							</div>
						</figure>
					</a>
				</div> -->
				<!-- /grid_item 
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_6.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Medical</h3>
							</div>
						</figure>
					</a>
				</div>
				/grid_item -->
			</div>
			<!-- /row -->
		</div>
		@endif
		<!-- /container -->

	{{--	<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>News and Events</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_1.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Mark Twain</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_2.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Jhon Doe</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Duo eius postea suscipit ad</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_3.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Luca Robinson</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Elitr mandamus cu has</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_4.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Paula Rodrigez</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Id est adhuc ignota delenit</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
			</div>
			<!-- /container -->
		</div> --}}
		<!-- /bg_color_1 -->
		{{--
		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a great students community</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		--}}
		<!--/call_section-->
	</main>
	<!-- /main -->
@endsection
@section('index-search-js')
<script>
$(document).ready(function(){
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 $('#college_name').keyup(function(){ 
        var query = $(this).val();
        if(query !== '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{route('search')}}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#collegeList').fadeIn();  
                    $('#collegeList').html(data);
          }
         });
        }
        else{
            $('#collegeList').fadeOut();
           //$('#collegeList').css('none'); 
        }
    });

    $(document).on('click', 'li', function(){  
        $('#college_name').val($(this).text());  
        $('#collegeList').fadeOut();  
    });  

});
</script>
<script src="{{asset('/js/college_search_ajax.js')}}"></script>
@endsection