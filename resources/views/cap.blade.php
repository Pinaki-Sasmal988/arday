@extends('layouts.main')
@section('cap-specific-css')
<link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
<link href="{{asset('css/wizard.css')}}" rel="stylesheet">
@endsection
@php
$courses=App\Models\Category::all();
@endphp
@section('cap-content')
<div id="form_container" class="clearfix cap-form">
		<figure>
			<a href="{{url('/')}}"><img src="{{asset('assets/img/logo-dark.png')}}" height="72" alt=""></a>
		</figure>
		<div id="wizard_container">
			{{--<div id="top-wizard">
				<div id="progressbar"></div>
			</div> --}}
			<!-- /top-wizard -->
			<form name="example-1" action="{{url('/cap')}}" id="wrapped" method="POST">
				@csrf
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<div class="step">
						<div id="intro">
							<figure>
								{{-- <img src="{{asset('assets/img/wizard_intro_icon.svg')}}" alt=""> --}}
							</figure>
							<h1>Common Application Process</h1>
							<p style="margin-bottom:5px"><strong>Common Application Process is a Platform through which aspirants can apply to their dream College for free of cost</strong></p>
						</div>
					</div>
					 @if ($errors->any())
					                  <div class="alert alert-danger">
					                      <ul>
					                          @foreach ($errors->all() as $error)
					                              <li>{{ $error }}</li>
					                          @endforeach
					                      </ul>
					                  </div>
					              @endif
					<div class="step">
						<div class="form-group">
							<input value="{{Auth::check()=='true'?auth()->user()->name:''}}" type="text" name="name" class="form-control required" placeholder="First name" required="required">
						</div>
						<div class="form-group">
							<input  value="{{Auth::check()=='true'?auth()->user()->email:''}}" type="email" name="email" class="form-control required" placeholder="Your Email" required="required">
						</div>
						<div class="form-group">
							<input type="text" value="{{Auth::check()=='true'?auth()->user()->mobile:''}}" name="phone" class="form-control" placeholder="Your Telephone" required="required">
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply" required="required">
									<option value="0" selected="">Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->category}}">{{$course->category}}</option>
                                        @endforeach
								</select>
							</div>
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="state_apply" id="state_apply" required="required">
			                      <option value="" selected="">Select State</option>
			                      @foreach($states as $state)
			                      <option value="{{$state->state}}">{{$state->state}}</option>
			                      @endforeach
			                    </select>  
							</div>
						</div>
						{{--<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply">
									<option value="" selected="">Select Colleges(Max-5)</option>
									<option value="Less than high school">Less than high school</option>
									<option value="High school diploma or equivalent">High school diploma or equivalent</option>
									<option value="Some college no degree">Some college, no degree</option>
									<option value="Bachelor degree">Bachelor’s degree</option>
									<option value="Doctoral or professional degree">Doctoral or professional degree</option>
								</select>
							</div>
						</div> --}}
					</div>
					<!-- /step

					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>Please fill your address</h3>
						<div class="form-group">
							<input type="text" name="address" class="form-control required" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control required" placeholder="City">
						</div>
						<div class="form-group">
							<input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
						</div>
						<div class="form-group">
							<div class="styled-select">
								<select class="required" name="country">
									<option value="" selected>Select your country</option>
									<option value="Europe">Europe</option>
									<option value="Asia">Asia</option>
									<option value="North America">North America</option>
									<option value="South America">South America</option>
								</select>
							</div>
						</div>
					</div>
					 /step

					<div class="submit step">
						<h3 class="main_question"><strong>3/3</strong>Your preferences</h3>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Management" name="preferences[]" class="icheck">Management adn Business</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Art" name="preferences[]" class="icheck">Art: Impressionist</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Litteratture" name="preferences[]" class="icheck">Litteratture: Poetry</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Math" name="preferences[]" class="icheck">Math: 12 Principles</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Architecture" name="preferences[]" class="icheck">Architecture</label>
						</div>
						<div class="form-group add_top_30">
							<textarea name="additional_message" class="form-control required" style="height:120px;" placeholder="Hello world....write your messagere here!"></textarea>
						</div>
						<div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
						</div>
					</div>
					 /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="submit" class="submit">Submit</button><br>
					<a href="{{url('/')}}" type="button" name="backward" class="backward mt-2">Go Back</a>
				</div>
				<!-- /bottom-wizard -->
			</form>
			<div class="copy text-center pb-2">© 2021 ZEQOON</div>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms 
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			/.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
@endsection
@section('cap-scripts')
<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('js/jquery-ui-1.8.22.min.js')}}"></script>
	<script src="{{asset('js/jquery.wizard.js')}}"></script>
	<script src="{{asset('js/jquery.validate.js')}}"></script>
	
@endsection