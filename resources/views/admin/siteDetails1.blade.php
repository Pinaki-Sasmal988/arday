@extends('admin.layouts.main')
@section('page-name')
Edit Site Details
@endsection
@section('edit-siteDetails')
<div class="card card-form">
@if (\Session::has('success-siteinfo-save'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success-siteinfo-save') !!}</li>
                        </ul>
                    </div>
                    @endif    
                                <form method="POST" action="{{route('admin-siteDetailsSave')}}">
                                    @csrf
                                    @method('PUT')
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Site Settings</strong></p>
                                        <p class="text-muted">Update Footer with relevant and meaningful information.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="phone_site">Phone</label>
                                                    <input type="text" name="site_phone" class="form-control" placeholder="Company's Phone" id="phone_site" value="{{$current_details->phone}}">
                                                </div>
                                                <div class="col">
                                                    <label for="email_site">Email</label>
                                                    <input type="text" name="site_email" class="form-control" placeholder="Company's Email" id="email_site" value="{{$current_details->email}}">
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                            <div class="col">    
                                             <label for="address_site">Address</label>
                                                <input type="text" name="site_address" class="form-control" placeholder="Company's Address" id="address_site" value="{{$current_details->address}}">
                                            </div>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="desc2">Footer Description</label>
                                            <textarea id="desc2"
                                                      rows="4"
                                                      class="form-control"
                                                      placeholder="Description ..." name="footer_description">{{$current_details->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="social1">Social links</label>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social1"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Facebook" name="facebook_link" value="{{$current_details->facebook}}">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-facebook"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social2"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Twitter" name="twitter_link" value="{{$current_details->twitter}}">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-twitter"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social3"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Instagram" name="instagram_link" value="{{$current_details->instagram}}">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-instagram"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Top Colleges Only 5</strong></label>
                                        	<div class="col">
                                        		<label for="popcol1">Popular College 1</label>
                                                @php $arr=explode('|',$current_details->college1); @endphp
                                        		<select class="form-control" name="popcollege1" id="popcol1">
                                        			<option value="0|0">Select First College</option>
                                                    @foreach($collgs as $collg)
                                                    <option value="{{$collg->id.'|'.$collg->college_name}}" 
                                                        @if($collg->college_name==$arr[1])
                                                        selected="selected"@endif>
                                                        {{$collg->college_name}}
                                                    </option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcol2">Popular College 2</label>
                                            @php $arr=explode('|',$current_details->college2); @endphp                                
                                        		<select class="form-control" name="popcollege2" id="popcol1">
                                        			<option value="0|0">Select Second College</option>
                                                    @foreach($collgs as $collg)
                                                    <option value="{{$collg->id.'|'.$collg->college_name}}" 
                                                        @if($collg->college_name==$arr[1])
                                                        selected="selected"@endif>
                                                        {{$collg->college_name}}
                                                    </option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcol3">Popular College 3</label>
                                                     @php $arr=explode('|',$current_details->college3); @endphp               
                                                     <select class="form-control" name="popcollege3" id="popcol1">
                                        			<option value="0|0">Select Third College</option>
                                                    @foreach($collgs as $collg)
                                                    <option value="{{$collg->id.'|'.$collg->college_name}}" 
                                                        @if($collg->college_name==$arr[1])
                                                        selected="selected"@endif>
                                                        {{$collg->college_name}}
                                                    </option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcol4">Popular College 4</label>
                                                 @php $arr=explode('|',$current_details->college4); @endphp
                                        		<select class="form-control" name="popcollege4" id="popcol1">
                                        			<option value="0|0">Select Fourth College</option>
                                                    @foreach($collgs as $collg)
                                                    <option value="{{$collg->id.'|'.$collg->college_name}}" 
                                                        @if($collg->college_name==$arr[1])
                                                        selected="selected"@endif>
                                                        {{$collg->college_name}}
                                                    </option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcol5">Popular College 5</label>
                                                @php $arr=explode('|',$current_details->college5); @endphp
                                        		<select class="form-control" name="popcollege5" id="popcol1">
                                        			<option value="0|0">Select Fifth College</option>
                                                    @foreach($collgs as $collg)
                                                    <option value="{{$collg->id.'|'.$collg->college_name}}" 
                                                        @if($collg->college_name==$arr[1])
                                                        selected="selected"@endif>
                                                        {{$collg->college_name}}
                                                    </option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        </div>
										<div class="form-group">
											<div class="row">
                                        	<div class="col">
                                        		<label for="popcol1">Popular Course 1</label>
                                        		<select class="form-control" name="popcourse1" id="popcour1">
                                        			<option value="0">Select First Course</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->category}}"
                                                        @if($cat->category==$current_details->course1)
                                                        selected="selected"@endif>
                                                        {{$cat->category}}</option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcour2">Popular Course 2</label>
                                        		<select class="form-control" name="popcourse2" id="popcour2">
                                        			<option value="0">Select Second Course</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->category}}"
                                                        @if($cat->category==$current_details->course2)
                                                        selected="selected"@endif>
                                                        {{$cat->category}}</option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	</div>
                                        	<div class="row">
                                        	<div class="col">
                                        		<label for="popcour3">Popular Course 3</label>
                                        		<select class="form-control" name="popcourse3" id="popcour3">
                                        			<option value="0">Select Third Course</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->category}}"
                                                        @if($cat->category==$current_details->course3)
                                                        selected="selected"@endif>
                                                        {{$cat->category}}</option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col">
                                        		<label for="popcour4">Popular Course 4</label>
                                        		<select class="form-control" name="popcourse4" id="popcour4">
                                        			<option value="0">Select Fourth Course</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->category}}"
                                                        @if($cat->category==$current_details->course4)
                                                        selected="selected"@endif>
                                                        {{$cat->category}}</option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	</div>
                                        	<div class="row">
                                        	<div class="col">
                                        		<label for="popcour5">Popular Course 5</label>
                                        		<select class="form-control" name="popcourse5" id="popcour5">
                                        			<option value="0">Select Fifth Course</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->category}}"
                                                        @if($cat->category==$current_details->course5)
                                                        selected="selected"@endif>
                                                        {{$cat->category}}</option>
                                                    @endforeach
                                        		</select>
                                        	</div>
                                        	<div class="col"></div>
                                        	</div>
                                        </div>
                                        <br><div class="form-group">
                                        <button class="btn btn-success btn-lg">Save</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>              
@endsection