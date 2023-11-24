@extends('admin.layouts.main')
@section('page-name')
Add College
@endsection
@section('edit-college')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            @if (\Session::has('success-binfo-save'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success-binfo-save') !!}</li>
                        </ul>
                    </div>
                    @endif
            <p><strong class="headings-color">Basic Information</strong></p>
            <p class="text-muted">Edit Basic College Info</p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <form id="college-basic-info" method="POST" action="{{route('addCollegeSave')}}" enctype="multipart/form-data">
                @csrf
           <div class="row">
           <div class="col">     
        	<div class="form-group">
                <label>College Logo</label>
                <input type="text" name="info_type" style="display:none" value="basic_info">
                <input type="file" name="college_logo" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 250px; height: 100px;">
                            <img src="{{asset('assets/img/college_logo/college_logo.svg')}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                    {{--<div class="media-body">
                       <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button> 

                    </div>--}}
                </div>
            </div>
            </div>
            <div class="col">
            <div class="form-group">
                <label>College Banner(Use High Quality Image)</label>
                <input type="file" name="college_banner" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 250px; height: 100px;">
                            <img src="{{asset('assets/img/college_logo/college_logo.svg')}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                    {{--<div class="media-body">
                       <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button> 

                    </div>--}}
                </div>
            </div>
            </div>
        </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Name</label>
                        <input id="fname"
                               type="text"
                               class="form-control @error('college_name') is-invalid @enderror"
                               placeholder="Name"
                               value="{{ old('college_name') }}" name="college_name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="state">State</label>
                        <select {{old('college_state')}} class="form-control @error('college_state') is-invalid @enderror" id="state"  name="college_state">
                        <option value="0" selected>Select State</option>
                        @foreach($states as $state)
                        <option value="{{$state->id.','.$state->state}}">{{$state->state}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">City</label>
                        <input id="fname"
                               type="text"
                               class="form-control @error('college_city') is-invalid @enderror"
                               placeholder="City"
                               value="{{old('college_city')}}" name="college_city">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Type</label>
                        <select class="form-control @error('college_type') is-invalid @enderror" value="{{old('college_type')}}" name="college_type">
                            <option value="0">Select Type</option>
                            @foreach($categories as $category)
                            <option value="{{$category->category}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Rating(/10)</label>
                        <input id="lname"
                               type="text"
                               class="form-control @error('college_rating') is-invalid @enderror"
                               placeholder="Rating(out of 10)"
                               value="{{old('college_rating')}}" name="college_rating">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Established</label>
                        <input id="lname"
                               type="text"
                               class="form-control @error('estd_date') is-invalid @enderror"
                               placeholder="Year"
                               value="{{old('estd_date')}}" name="estd_date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Certified By</label>
                        <input id="fname"
                               type="text"
                               class="form-control  @error('college_certification') is-invalid @enderror"
                               placeholder="E.g AICTE"
                               value="{{old('college_certification')}}" name="college_certification">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Email</label>
                        <input id="lname"
                               type="text"
                               class="form-control  @error('college_email') is-invalid @enderror"
                               placeholder="Email"
                               value="{{old('college_email')}}" name="college_email">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Phone</label>
                        <input id="lname"
                               type="text"
                               class="form-control  @error('college_phone') is-invalid @enderror"
                               placeholder="Phone"
                               value="{{old('college_phone')}}" name="college_phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address"
                               type="text"
                               class="form-control  @error('college_address') is-invalid @enderror"
                               placeholder="Address"
                               value="{{old('college_phone')}}" name="college_address">
                    </div>           
                </div>
            </div>
            <div class="form-group">
                <label for="social1">Three Key Points</label>
                <div class="input-group input-group-merge mb-2"
                     style="width: 270px;">
                    <input id="social1"
                           type="text"
                           class="form-control form-control-prepended @error('college_key0') is-invalid @enderror"
                           placeholder="First Key Point" value="{{old('college_key0')}}" name="college_key0">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span >I.</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-merge mb-2"
                     style="width: 270px;">
                    <input id="social2"
                           type="text"
                           class="form-control form-control-prepended @error('college_key1') is-invalid @enderror"
                           placeholder="Second Key Point" value="{{old('college_key1')}}" name="college_key1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span >II.</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-merge mb-2"
                     style="width: 270px;">
                    <input id="social3"
                           type="text"
                           class="form-control form-control-prepended  @error('college_key2') is-invalid @enderror"
                           placeholder="Second Key Point" value="{{old('college_key2')}}" name="college_key2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span >III.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="desc">About</label>
                <textarea id="desc"
                          rows="6"
                          class="form-control  @error('college_about') is-invalid @enderror"
                          placeholder="About College" name="college_about">{{old('college_about')}}</textarea>
            </div>
            <div class="form-group">
                <label for="brochure">Upload Brochure</label><br>
                <div class="">
                    <input name="brochure"
                           type="file"
                           id="brochure">
                </div>
            </div>
            <div class="form-group">
                <label for="subscribe">Mark as Popular</label><br>
                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                    <input name="is_popular" checked=""
                           type="checkbox"
                           id="subscribe"
                           class="custom-control-input">
                    <label class="custom-control-label"
                           for="subscribe">Yes</label>
                </div>
                <label for="subscribe"
                       class="mb-0">Yes</label>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save Basic Information</button>
            </div>
            {{--<div class="form-group">
                <label for="subscribe">Subscribe to newsletter</label><br>
                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                    <input checked=""
                           type="checkbox"
                           id="subscribe"
                           class="custom-control-input">
                    <label class="custom-control-label"
                           for="subscribe">Yes</label>
                </div>
                <label for="subscribe"
                       class="mb-0">Yes</label>
            </div>--}}
        </form>
        </div>
    </div>
</div>

<div class="card card-form">
    <h4 class="text-center p-2">Go To Update College to Add Course Subcourse.</h4>
    {{--<form id="college-course-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}">
        @csrf
        @method('PUT')
      <input type="text" name="edit_type" value="course_edit" style="display:none">  
    <div class="row no-gutters course-div">    
    	@php
    	$var=count($college_courses)-1;
    	@endphp
		@foreach($college_courses as $course)
		@if(($loop->index % 6 == 0)||($loop->index == 0))  
        <div class="col-lg-6 card-body card-form__body">
        	<h3>Courses</h3>
        @endif	
            <div class="form-group">
                <label for="opass">{{$loop->iteration.'.'}}</label>
                <input type="text" name="{{'course_id'.$loop->iteration}}" style="display:none" value="{{$course->id}}">
                <input type="text" name="count_course" style="display:none" value="{{$loop->count}}">
                <input style="width: 270px;"
                       id="opass"
                       type="text"
                       class="form-control d-inline"
                       placeholder="Course Name"
                       value="{{$course->course_name}}" name="{{'course'.$loop->iteration}}">
                       <span class="ml-1 d-inline"><button type="button" class="btn  btn-primary">Sub-Course</button></span>
            </div>
        @if((($loop->index % 6 == 5)||($loop->index==$var))&&($loop->index >= 0))   
        </div>
        @endif
        @endforeach
    </div>--}}  
    {{-- </form> --}}    
</div>
<div class="card card-form">
   
    <div class="row no-gutters subcourse-div">
        <div class="col-lg-12 card-body card-form__body">
            <h4 class="text-center p-2">Go To Update College to Add Course Subcourse.</h4>
        {{--<form id="college-subcourse-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}">
        @csrf
        @method('PUT')    
		<h3>Sub Courses</h3>
        @php
        $var=1;
        @endphp
        <div class="form-group">
         <label for="someid">&#8594;</label>   
         <input 
                       class="form-control d-inline col-md-4"
                       value="Name" disabled="disabled" id="someid">
                       <span class="d-inline"><button type="button" class="col-md-3 btn  btn-primary">Parent Course    Name</button></span>
                       <span class="d-inline"><input  type="text" class="col-md-2 form-control d-inline"
                       value="Years"  disabled="disabled"/></span>
                       <span class="d-inline"><input  type="text" class="col-md-2 form-control d-inline"
                        value="Fees Per Year"  disabled="disabled"/></span>   

        </div>
    	@foreach($college_courses as $course)
		@foreach($course->subcourse as $subcourse)

		@if(($loop->index % 9 == 0)||($loop->index == 0))   

       @endif	 
            <div class="form-group">
                <input type="text" name="edit_type" value="subcourse_edit" style="display:none">
                <label for="opass">{{$var.'.'}}</label>
                <input
                       id="opass.{{$var}}"
                       type="text"
                       class="col-md-4 form-control d-inline"
                       placeholder="SubCourse Name"
                       value="{{$subcourse->subcourse_name}}" name="{{'subcourse'.$var}}">
                       <span class="ml-1 d-inline"><button type="button" class="col-md-3 btn  btn-primary">{{$course->course_name}}</button></span>
                       <span class="ml-1 d-inline"><input type="text" class="col-md-2 form-control d-inline"
                       placeholder="SubCourse Duration"  name="{{'sub_course_duration'.$var}}" value="{{$subcourse->sub_course_duration}}" /></span>
                       <span class="ml-1 d-inline"><input  type="text" class="col-md-2 form-control d-inline"
                       placeholder="SubCourse Duration"  name="{{'sub_per_year_fees'.$var}}" value="{{$subcourse->sub_per_year_fees}}" /></span>
                       <input type="text" name="{{'subcourse_id'.$var}}" style="display:none" value="{{$subcourse->id}}">
                       <input type="text" name="subcourse_count" style="display:none" value="{{$var}}">       
            </div>
         @if((($loop->index % 9 == 8)||($loop->index==$var))&&($loop->index >= 0))    
         @endif 
        @php
        $var=$var+1;
        @endphp
        @endforeach
        @endforeach
        <div class="card-body button-list">
            <button type="submit"
                    class="btn btn-success">Save SubCourse</button>
            <button type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target=".add-subcourse">Add Subcourse</button>
        </div>
        </form>--}}
        </div>
    </div>
</div>
{{--<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">Profile Settings</strong></p>
            <p class="text-muted">Update your public profile with relevant and meaningful information.</p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="form-group">
                <label>Avatar</label>
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 80px; height: 80px;">
                            <img src="assets/images/account-add-photo.svg"
                                 class="avatar-img rounded"
                                 alt="..."
                                 data-dz-thumbnail>
                        </div>
                    </div>
                    <div class="media-body">
                        <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="desc2">Description</label>
                <textarea id="desc2"
                          rows="4"
                          class="form-control"
                          placeholder="Description ..."></textarea>
            </div>
            <div class="form-group">
                <label for="social1">Social links</label>
                <div class="input-group input-group-merge mb-2"
                     style="width: 270px;">
                    <input id="social1"
                           type="text"
                           class="form-control form-control-prepended"
                           placeholder="Facebook">
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
                           placeholder="Twitter">
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
                           placeholder="Instagram">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="customCheck1">Available for freelance?</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"
                           class="custom-control-input"
                           id="customCheck1"
                           checked="">
                    <label class="custom-control-label"
                           for="customCheck1">Yes, show me as available for freelance!</label>
                </div>
            </div>
        </div>
    </div>
</div>--}}
{{-- <div class="text-right mb-5">
    <a href=""
       class="btn btn-success">Save</a>
</div> --}}
@endsection
