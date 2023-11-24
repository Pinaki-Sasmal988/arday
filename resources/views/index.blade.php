@extends('layouts.main')
@section('index-content')
	<!-- /main_menu 2-->
	@php
		use App\Models\State;
use App\Models\Category;
$states=State::all();
$courses=Category::all();
	 $slider=App\Models\Slider::find(1);
	 $categories=App\Models\Category::all();
	 $marquee=App\Models\Marquee::find(1);
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
					  <div id="search-box-container" class="col-md-8 col-sm-10">
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
@php 
$sdate=new DateTime($marquee->start_date);
$edate=new DateTime($marquee->finish_date);
$today=new DateTime('');
@endphp
@if(($today->format("Y-m-d") >= $sdate->format("Y-m-d"))&& ($today->format("Y-m-d")<$edate->format("Y-m-d")))		
<div class="bg_color_1 margin_120_95 marquee-parent-div">
	<div class="container for_marquee">
		<div class="row">
		<div class="col-md-2 col-xs-2 marquee-image-parent">
			<!--<img src="{{asset('assets/img/logo.png')}}" height="78" class="px-2 pb-2 marquee-image">-->
			<h5 class="marquee-image px-2 py-3 text-white"> Notice | Alerts:</h5>
		</div>	
		<div class="col-xs-10 col-md-10 pl-0">
			<div class="marquee-text-parent" >
				<h5 class="p-2 pt-3 text-white marquee-text">{{$marquee->content}}</h5>
			</div>
		</div>
		</div>
	</div>
</div>
@endif	
		<!-- /features -->
<div class="bg_color_1">
			<div class="container margin_120_95 admisson2021-parent">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Admissions Open For 2021-22</h2>
					<p>Top College Categories</p>
				</div>
				<div class="row">
					@foreach($categories as $category)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-3">
						<div style="border: 1px solid #ededed;box-shadow: 0px 0px 10px 0px #c7c3c3;">
						<a class="box_news course-category" href="{{url('/collegeList/'.$category->category.'/All Cities')}}">
							<figure class="course-category-fig"><img class="course-category-img" src="{{asset('assets/img/'.strtolower($category->category).'course.png')}}" alt="">
								<figcaption class="course-category-figcaption"><strong>{{$category->category}}</strong></figcaption>
							</figure>
						</a>
						</div>
					</div>
						<!-- /box_news -->
					@endforeach
					<!-- /box_news -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<!-- /container -->
		@if(count($popular_colleges)>0)
		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Popular Colleges In Bangalore</h2>
				{{-- <p>Just a few points of what we offer.</p> --}}
			</div>
			<div class="row">
				@foreach($popular_colleges as $college)
				<div class="col-lg-4 col-md-4 wow" data-wow-offset="150">
					<a href="{{url('collegeDetails/'.$college->id.'/'.$college->college_name)}}" class="grid_item">
						<figure class="block-reveal" style="height: 200px;">
							<div class="block-horizzontal"></div>
							<img src="{{asset('assets/img/college_banner/'.$college->banner)}}" class="img-fluid why-choose-image" alt="">
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
@include('authmodal')
<script>
$(document).ready(function(){

 $('#college_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
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
function blink_text() {
    $('.marquee-text').fadeOut(700);
    $('.marquee-text').fadeIn(900);
}
setInterval(blink_text, 1600);
});
@guest
setTimeout(function() {
    $('#modalregisterindex').modal();
}, 8500);
@endguest
</script>
@endsection