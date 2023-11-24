@php
$footer_details=App\Models\SiteDetails::find(1);
@endphp
	<footer>
		<div class="container margin_120_95" style="padding-bottom:10px">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p class='mb-0'><img src="{{asset('assets/img/ardaylogo.png')}}" width="150" height="100" alt=""></p>
					<p>{{$footer_details->description}}</p>

				</div>
				<div class="col-lg-3 col-md-3 ml-lg-auto">
					<h5>Top Colleges</h5>
					<ul class="links">
						@for($i=1;$i<6;$i++)
						@php 
							$vari='college'.$i;
							$arr=explode('|',$footer_details->$vari);
						@endphp
						@if($arr[0] != 0)
						<li><a href="{{url('collegeDetails/'.$arr[0].'/'.$arr[1])}}">{{$arr[1]}}</a></li>
						@endif
						@endfor
					{{--	<li><a href="#0">News &amp; Events</a></li>
						<li><a href="#0">Contacts</a></li> --}}
					</ul>
				</div>
				<div class="col-lg-2 col-md-3 ml-lg-auto">
					<h5>Top Courses</h5>
					<ul class="links">
						@for($i=1;$i<6;$i++)
						@php $var='course'.$i; @endphp
						<li><a href="{{url('/collegeList/'.$footer_details->$var.'/All Cities')}}">{{$footer_details->$var}}</a></li>
						@endfor
					</ul>
				</div>
				<div class="col-lg-2 col-md-3 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="{{url('/cap')}}">Admissions</a></li>
						<li><a href="{{url('/register')}}">Register</a></li>
						<li><a href="{{url('/about')}}">About</a></li>
						<li><a href="{{url('/tandc')}}">Terms and conditions</a></li>
						<li><a href="{{url('/privacypolicy')}}">Privacy</a></li>
					</ul>
				</div>
				</div>
				<div class="row">
				<div class="col-lg-5 col-md-5">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://{{$footer_details->phone}}"><i class="ti-mobile"></i> {{$footer_details->phone}}</a></li>
						<li><a href="mailto:{{$footer_details->email}}"><i class="ti-email"></i> {{$footer_details->email}}</a></li>
						<li><a href=""><i class="ti-location-arrow"></i> {{$footer_details->address}}</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2">
				  <div class="follow_us">
						<ul>
							<li class="d-block">Follow us</li>
							<li class="d-block"><a target="_blank" href="{{'https://'.$footer_details->facebook}}"><i class="ti-facebook"></i> <small>Facebook</small></a></li>
							<li class="d-block"><a target="_blank" href="{{'https://'.$footer_details->twitter}}"><i class="ti-twitter-alt"></i> <small>Twitter</small></a></li>
							<li class="d-block"><a target="_blank" href="{{'https://'.$footer_details->instagram}}"><i class="ti-instagram"></i> <small>Instagram</small></a></li>
							<li class="d-block"><a target="_blank" href="{{'https://'.$footer_details->youtube}}"><i class="social_youtube_circle"></i><small>Youtube</small></a></li>
							<li class="d-block"><a target="_blank" href="{{'https://wa.me/'.$footer_details->whatsapp}}"><i class="fab fa-whatsapp"></i><small>WhatsApp</small></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="follow_us">
						<ul>
							<li><a href="{{'https://'.$footer_details->playstore}}"><img src="{{asset('assets/img/google-play.png')}}" height="69"></a></li>
							<li class="ml-2"><a href="{{'https://'.$footer_details->appstore}}"><img src="{{asset('assets/img/apple-store.png')}}" height="51"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-4">
					<ul id="additional_links">
						<li><a href="{{url('/tandc')}}">Terms and conditions</a></li>
						<li><a href="{{url('/privacypolicy')}}">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-8">
					<div id="copy">© {{date('Y')}} <strong class="text-primary">Horsan Technology</strong> Created by <strong ><a class="text-warning" href='http://collegesuite.in/index.html' target="_blank">ZEQOON</a></strong></div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->