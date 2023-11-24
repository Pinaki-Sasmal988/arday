@extends('layouts.main')
@section('about-content')
	<main>
	@php
	 $slider=App\Models\Slider::find(1);
	@endphp
	<main>
		<section id="hero_in" class="courses" style="height: 550px;">
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
								<h1 class="fadeInUp"><span></span>About Us</h1>
								
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

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Who We Are</h2>
					
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('assets/img/'.$slider->slider2)}}" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
						<p>We are pleased to introduce ourselves as one of the leading Educational Consultancy offering services all over Indian for career councelling and admissions guidance, acquiring acute expertise and excellence in the field of education. Career Cognitive is one of the growing educational consultancy in India.</p>
						<p>Career Cognitive takes pleasure in providing admissions guidance in most of the reputed institutions offering education in every sphere - Medical, Engineering, Management, Pharmacy, Paramedical and many more. We provide all around assistance for students to get admissions in various professional courses under Management/NRI quota. Master's offers a unique range of services dedicated to advising and guiding candidates.</p>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

		<div class="bg_color_1">
			<div class="container margin_80_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>More About Us</h2>
					{{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<p>Career Cognitive is ISO certified Educational Consultancy. We represents about 100 reputed colleges across the country and referred thousands of candidates. Creer Cognitive has strong presence all over the country with forceful network of offices located in all major cities of India and head office located in 1236 12th Cross Rd, HRBR Layout 1st Block, Banaswadi, Bengaluru, Karnataka-560043.</p>
						<p>Career Cognitive has been dedicated to the cause of providing personalised service to all parents/students and one can expect a thoroughly transparent, reliable & satisfying service from us. The admissions are arranged only in reputed colleges which are affiliated to genuine universities and recognized by the UGC and government of India. Associate with us and linked to the brighter side of education.</p>
					</div>
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('assets/img/'.$slider->slider3)}}" class="img-fluid" alt="">
						</figure>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->		
	</main>
@endsection