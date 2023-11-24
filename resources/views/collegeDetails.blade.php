@extends('layouts.main')
@section('collegeDetails-content')
@php
	 $slider=App\Models\Slider::find(1);
@endphp
	<main>
		<section id="hero_in" class="courses" style="height: 550px;">
			<div class="wrapper">	
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2800" data-pause="false">	
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100 carousel-img" src="{{asset('assets/img/college_banner/'.$college_details->banner)}}" alt="First slide">
					    </div>
					  </div>
					  <div id="search-box-container" class="col-md-8 col-xs-10">
							<div class="container search-container-inside">
								<h1 class="fadeInUp"><span></span>{{$college_details->college_name}}</h1>
								<p>In {{$college_details->city}}</p>
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
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="make-scroll" class="active">About</a></li>
						<li><a href="#lessons" class="make-scroll">Courses-Fees</a></li>
						<li><a href="#teachers" class="make-scroll">Facilites</a></li>
						@if($college_details->brochure!==null)<li><a class="dbrochure" href="@if (Auth::check()){{url('/download/'.$college_details->brochure)}} @else {{url('/register')}}  @endif">Download Brochure</a></li>@endif
						@if(count((array)$placements)!==0)<li><a class="make-scroll" href="#placements">Placements</a></li>@endif
						<li id="secondary_nav_apply"><a class="make-scroll" href="#sidebar">Apply</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				@if (\Session::has('success'))
				    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
				        <ul style="margin-top: 1%;padding: 0 5px;">
				            <li>{!! \Session::get('success') !!}</li>
				        </ul>
				    </div>
					@endif
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<div class="box_highlight">
								<ul class="additional_info">
									<li><i class="pe-7s-map-marker"></i>{{$college_details->city}},{{$college_details->state}}</li>
									<li><i class="pe-7s-date"></i>{{$college_details->estd_date}}</li>
									<li><i class="pe-7s-check"></i>{{$college_details->certification}}</li>
								</ul>
							</div>
							<!-- /box_highlight -->
							<h2>{{$college_details->college_name}}</h2>
							<p>{{$college_details->about}}</p>
							<div class="row">
								<div class="col-lg-6">
									<h3>Why We?</h3>
									<ul class="bullets">
										@php
											$key_points=explode(',',$college_details->key_points);
										@endphp
										@foreach($key_points as $key)
										<li>{{$key}}</li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<h3>Contact Details</h3>
									<ul>
										<li><span><i class="icon-email"></i> </span> {{   $college_details->email}}</li>
										<li><span><i class="icon-phone-circled"></i> </span> {{   $college_details->phone}}</li>
										<li><span><i class=" icon-address"></i> </span> {{   $college_details->address}}</li>
									</ul>
								</div>
							</div>
							<!-- /row -->
						</section>
						<!-- /section -->
						
						<section id="lessons">
							<div class="intro_title">
								<h2>Courses and Fees</h2>
							</div>
							<div id="accordion_lessons" role="tablist" class="add_bottom_45">
								@if(count((array)$courses)!==0)
								@foreach($courses as $course)
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}"><i class="indicator ti-minus"></i> {{$course->course_name}}</a>
										</h5>
									</div>
									<div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-body">
										{{--	<p>Some Optional <strong>
											details</strong>. Et his copiosae vivendum, corpora contentiones vel ei.</p> --}}
											@foreach($course->subcourse as $subcourse)
											@if($subcourse !== null)
											<h6>{{$subcourse->subcourse_name}}</h6>
											<div class="list_lessons_2">
												<ul>
													<li>{{$subcourse->sub_course_duration.' Years Course'}}</li>
													<li>{{($subcourse->sub_per_year_fees/100000).' Lakhs/Year  |  '.($subcourse->sub_per_year_fees/100000)*$subcourse->sub_course_duration.' Full'}}</li>
												</ul>
											</div>
											@else
											<h6>{{'No Sub Courses'}}</h6>
											@endif
											@endforeach
											{{--
											<h6>Year 2</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.01 Lakh</li>
												</ul>
											</div>
											<h6>Year 3</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 4</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											--}}
										</div>
									</div>
								</div>
								@endforeach
								@endif
								<!-- /card -->
								{{--
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}"><i class="indicator ti-minus"></i> B.Pharma</a>
										</h5>
									</div>

									<div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-body">
											<p>Some Optional <strong>
											details</strong>. Et his copiosae vivendum, corpora contentiones vel ei.</p>
											<h6>Year 1</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 2</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.01 Lakh</li>
												</ul>
											</div>
											<h6>Year 3</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 4</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}"><i class="indicator ti-minus"></i> Bio-Tech</a>
										</h5>
									</div>

									<div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-body">
											<p>Some Optional <strong>
											details</strong>. Et his copiosae vivendum, corpora contentiones vel ei.</p>
											<h6>Year 1</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 2</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.01 Lakh</li>
												</ul>
											</div>
											<h6>Year 3</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 4</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}"><i class="indicator ti-minus"></i> MCA</a>
										</h5>
									</div>

									<div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-body">
											<p>Some Optional <strong>
											details</strong>. Et his copiosae vivendum, corpora contentiones vel ei.</p>
											<h6>Year 1</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 2</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.01 Lakh</li>
												</ul>
											</div>
											<h6>Year 3</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 4</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}"><i class="indicator ti-minus"></i> Management</a>
										</h5>
									</div>

									<div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-body">
											<p>Some Optional <strong>
											details</strong>. Et his copiosae vivendum, corpora contentiones vel ei.</p>
											<h6>Year 1</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 2</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.01 Lakh</li>
												</ul>
											</div>
											<h6>Year 3</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
											<h6>Year 4</h6>
											<div class="list_lessons_2">
												<ul>
													<li>1.1 Lakh</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								--}}
								<!-- /card -->								
							</div>
							<!-- /accordion -->
						</section>
						<!-- /section -->
						@if(count((array)$facilities)!==0)
						<section id="teachers" class="border-bottom-details">
							<div class="intro_title">
								<h2>Facilites</h2>
							</div>
							<div class="row add_top_20 add_bottom_30">
								@php
								$length=count((array)$facilities);
								@endphp
								@foreach($facilities as $facility)
							    @if (($loop->index % 4 == 0)||($loop->index == 0))
							    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
							        <ul class="list_teachers">
							    @endif
							    	{{-- @if(($loop->index > 2)) --}}
							        {{-- @if(($value!=0)) --}}
							        <li>
							            <a>
							            <figure><img src="{{asset('assets/img/'.$facility.'.png')}}" alt=""></figure>
							                <p>{{$facility}}</p></a>
							        </li>
							       {{--  @endif --}}
							        {{-- @endif --}}
							    @if (($loop->index % 4 == 3)&&($loop->index > 0))   
							        </ul>
							    </div>
							    @endif
							@endforeach	
							</div>
							<!-- /row -->
						</section>
						@endif
						<!-- /section -->
						@if(count((array)$placements)!==0)
						<section id="placements" class="border-bottom-details">
							<div class="intro_title">
								<h2>Top Recruiters</h2>
							</div>
							<div class="row add_top_20 add_bottom_30">
								<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
									<ul class="list_teachers">

										@foreach($placements as $company=>$logo)
										@if($logo !='company_default.svg')
										<li>
											<a>
												<figure style="width:100px"><img style="width:100px" src="{{asset('assets/img/companies/'.$logo)}}" alt=""></figure>
											</a>
										</li>
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							<!-- /row -->
						</section>
						@endif
						<!-- /section -->
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail" style="border-color: #6d6a6a;">
							<h4>Enquire now</h4>
							{{-- <p class="nopadding">Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p> --}}
							<div id="message-contact"></div>
							<form  method="POST" action="{{route('submit-application')}}" autocomplete="off">
								@csrf
								@if ($errors->any())
				                  <div class="alert alert-danger">
				                      <ul>
				                          @foreach ($errors->all() as $error)
				                              <li>{{ $error }}</li>
				                          @endforeach
				                      </ul>
				                  </div>
				              @endif
				              <input type="text" id="college_name" name="college_name" class="d-none" value="">
              				  <input type="text" id="college_id" name="college_id" class="d-none" value="">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-sm-12">
										<span class="input">
											<input class="input_field" type="text" id="name_contact" name="name" value="{{Auth::check()=='true'?auth()->user()->name:''}}">
											<label class="input_label">
												<span class="input__label-content">Name</span>
											</label>
										</span>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-xl-6 col-lg-12 col-sm-6">
										<span class="input">
											<input class="input_field" type="email" id="email_contact" name="email" value="{{Auth::check()=='true'?auth()->user()->email:''}}">
											<label class="input_label">
												<span class="input__label-content">Email</span>
											</label>
										</span>
									</div>
									<div class="col-xl-6 col-lg-12 col-sm-6">
										<span class="input">
											<input class="input_field" type="text" id="phone_contact" name="phone" value="{{Auth::check()=='true'?auth()->user()->mobile:''}}">
											<label class="input_label">
												<span class="input__label-content">Mobile</span>
											</label>
										</span>
									</div>
								</div>
								<!-- /row -->
								<span class="input mt-3">
			                  {{-- <label class="input_label">
			                  <span class="input__label-content">Course</span>
			                  </label> --}}                
					              <div class="form-group select">
					                  <div class="styled-select">
					                    <select class="required" name="education_apply" id="education_apply" required="required">
					                      <option value="" selected="">Select Course</option>
					                    </select>
					                </div>
					              </div>
					              </span>
					              <span class="input mt-3 d-none">
			                  {{-- <label class="input_label">
			                  <span class="input__label-content">Course</span>
			                  </label> --}}                
					              <div class="form-group select">
					                  <div class="styled-select">
					                    <select class="required" name="state_apply" id="state_apply" required="required">
					                      <option value="">Select State</option>
					                      <option value="Default State" selected="">Select State</option>
					                      @foreach($states as $state)
					                      <option value="{{$state->state}}">{{$state->state}}</option>
					                      @endforeach
					                    </select>
					                </div>
					              </div>
					              </span>
								<hr>
								<div style="position:relative;"><button type="submit" class="btn_1 full-width" id="">Apply</button></div>
							</form>
							</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->	
@endsection
@section('collegeList-script')
<script type="text/javascript">
	$(document).ready(function(){
			var college_name='{{$college_details->college_name}}';
			var college_id={{$college_details->id}};
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
</script>
@endsection	