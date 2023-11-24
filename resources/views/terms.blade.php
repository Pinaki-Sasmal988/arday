@extends('layouts.main')
@section('term-content')
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
								<h1 class="fadeInUp"><span></span>Terms &amp; Conditions</h1>
								
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
					<h2>Terms &amp; Conditions</h2>
					
				</div>
				<div class="row justify-content-between p-3" style="border: solid 1px #efefef;">
					{{--<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('assets/img/privacy.svg')}}" class="img-fluid" alt="">
						</figure>
					</div>--}}
					<div class="col-lg-12">
						<p> When you register, enquire, contact us in any form you agree to receive any or all type of communication from CareerCognitive.in like email, mail, messages, SMS and other which may includes communication from our associate colleges, universities, other third parties including associates of colleges, universities.</p>

<p>You will not provide any false information while contacting us, we have full right to terminate any account without any clarification.</p>

<p>All the content including script, software, text, images, designs, user interface etc. are property of CareerCognitive.in you cannot use it in any format including print, digital form without prior permission from CareerCognitive.in other than material which is available on internet free to use by anyone.</p>

<p>CareerCognitive.in is linking to several other websites and we do not take responsibility for content, uses and terms and conditions of those websites, user should take own decision to use those websites.</p>

<p>We have taken all possible steps to make content and site useful but CareerCognitive.in is not responsible and liable for any kind of damage for any incorrect content on our site.</p>

<p>All the logos, brand names, and details shown on CareerCognitive.in are of their respective owners.</p>

<p>For more information contact - info at CareerCognitive.in</p>


					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->		
	</main>
@endsection