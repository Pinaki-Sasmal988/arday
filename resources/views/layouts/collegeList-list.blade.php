<div class="row search-filter-results">
						@foreach($results as $result)
						<div class="col-md-4">
							<div class="box_grid wow">
								<figure class="block-reveal collg-list-fig-img">
									<div class="block-horizzontal"></div>
									{{-- <a href="#0" class="wish_bt"></a> --}}
									<a href="{{url('collegeDetails/'.$result->id.'/'.$result->college_name)}}"><img class="img-fluid collg-list-collg-img" src="{{asset('assets/img/college_banner/'.$result->banner)}}" alt="college logo"></a>
									{{-- <div class="price">$54</div> --}}
									<div class="preview"><span>View Details</span></div>
								</figure>
								<div class="wrapper">
									<h3>{{$result->college_name}}</h3>
									<ul class="college-brief-ul">
										<li class="college-brief-li"><i class="icon-location icons-college-page"></i>{{$result->city.','.$result->state}}</li>
										<li class="college-brief-li"><i class="icon-calendar-empty icons-college-page"></i> Estd. {{$result->estd_date}}</li>
										<li class="college-brief-li"><i class="icon-target icons-college-page"></i> {{$result->certification}}</li>
										<li class="college-brief-li"><i class="icon-college icons-college-page"></i>{{$result->college_type}}</li>
										<li class="college-brief-li"><i class="icon-ok icons-college-page"></i> Private</li>
									</ul>
									<div class="rating"><i class="icon_star voted"></i><small> <strong>{{$result->rating.'/10'}} </strong></small></div>
								</div>
								<ul>
									<li><a href="{{url('collegeDetails/'.$result->id.'/'.$result->college_name)}}" class="full-details-btn">Details</a></li>
									<li><a class="enroll_now_bt" href="" data-toggle="modal" data-target="#modalLRForm" data-value="{{$result->college_name}}" data-id="{{$result->id}}">Enroll now</a></li>
								</ul>
							</div>
						</div>
						@endforeach