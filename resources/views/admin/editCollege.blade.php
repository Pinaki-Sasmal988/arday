@extends('admin.layouts.main')
@section('page-name')
{{$college_detail->college_name}}
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
            <form id="college-basic-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row">
            <div class="col">    
        	<div class="form-group">
                <label>College Logo</label>
                <input type="text" name="edit_type" style="display:none" value="basic_info">
                <input type="text" name="college_id" style="display:none" value="{{$college_detail->id}}">
                <input type="file" name="college_logo" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 250px; height: 100px;">
                            <img src="{{asset('assets/img/college_logo/'.$college_detail->logo)}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col">    
            <div class="form-group">
                <label>College Banner</label>
                <input type="file" name="college_banner" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 250px; height: 100px;">
                            <img src="{{asset('assets/img/college_banner/'.$college_detail->banner)}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
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
                               class="form-control"
                               placeholder="Name"
                               value="{{$college_detail->college_name}}" name="college_name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">State</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="State"
                               value="{{$college_detail->state}}" name="college_state">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">City</label>
                        <input id="fname"
                               type="text"
                               class="form-control"
                               placeholder="City"
                               value="{{$college_detail->city}}" name="college_city">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Type</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="Type"
                               value="{{$college_detail->college_type}}" name="college_type">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Rating(/10)</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="Rating(out of 10)"
                               value="{{$college_detail->rating}}" name="college_rating">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Established</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="Rating(out of 10)"
                               value="{{$college_detail->estd_date}}" name="estd_date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Certified By</label>
                        <input id="fname"
                               type="text"
                               class="form-control"
                               placeholder="Certified By"
                               value="{{$college_detail->certification}}" name="college_certification">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Email</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="Email"
                               value="{{$college_detail->email}}" name="college_email">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lname">Phone</label>
                        <input id="lname"
                               type="text"
                               class="form-control"
                               placeholder="Phone"
                               value="{{$college_detail->phone}}" name="college_phone">
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
                               value="{{$college_detail->address}}" name="college_address">
                    </div>           
                </div>
            </div>
            <div class="form-group">
            	@php
            	$arr=explode(',',$college_detail->key_points);
            	@endphp
                <label for="social1">Three Key Points</label>
                <div class="input-group input-group-merge mb-2"
                     style="width: 270px;">
                    <input id="social1"
                           type="text"
                           class="form-control form-control-prepended"
                           placeholder="First Key Point" value="{{$arr[0]}}" name="college_key0">
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
                           class="form-control form-control-prepended"
                           placeholder="Second Key Point" value="{{$arr[1]}}" name="college_key1">
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
                           class="form-control form-control-prepended"
                           placeholder="Second Key Point" value="{{$arr[1]}}" name="college_key2">
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
                          class="form-control"
                          placeholder="About" name="college_about">{{$college_detail->about}}</textarea>
            </div>
            <div class="form-group">
                <label for="brochure">Upload Brochure{{$college_detail->brochure==null?' 0 Brochure':'|1 Present'}}</label><br>
                <div class="">
                    <input name="brochure"
                           type="file"
                           id="brochure">
                </div>
            </div>
            <div class="form-group">
                <label for="subscribe">Mark as Popular</label><br>
                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                    <input name="is_popular" {{$college_detail->slider==1?'checked':''}}
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
    @if (\Session::has('success-course-save'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success-course-save') !!}</li>
                        </ul>
                    </div>
                    @endif
    <form id="college-course-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}">
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
                       {{--<span class="ml-1 d-inline"><button type="button" class="btn  btn-primary">Sub-Course</button></span>--}}
            </div>
        @if((($loop->index % 6 == 5)||($loop->index==$var))&&($loop->index >= 0))   
        </div>
        @endif
        @endforeach
    </div>
        <div class="card-body button-list course-button-div">
            @if(count($college_courses)>0)
            <button type="submit" class="btn btn-success">Save Courses</button>
            @endif
          <button type="button"
                    class="btn btn-info"
                    data-toggle="modal"
                    data-target=".add-course">Add Course</button>  
        </div>    
    </form>    
    <div class="card-body button-list">          
        </div>
</div>
<div class="card card-form">
    @if (\Session::has('success-subcourse-save'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success-subcourse-save') !!}</li>
                        </ul>
                    </div>
                    @endif    
    <div class="row no-gutters subcourse-div">
        <div class="col-lg-12 card-body card-form__body">
        <form id="college-subcourse-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}">
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

		{{-- @if(($loop->index % 9 == 0)||($loop->index == 0)) --}}  

       {{--  @endif	 --}}
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
        {{-- @if((($loop->index % 9 == 8)||($loop->index==$var))&&($loop->index >= 0))    --}}
        {{-- @endif --}}
        @php
        $var=$var+1;
        @endphp
        @endforeach
        @endforeach
        <div class="card-body button-list subcourse-button-div">
            @if($var>1)
            <button type="submit"
                    class="btn btn-success">Save SubCourse</button>
            @endif        
            <button type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target=".add-subcourse">Add Subcourse</button>
        </div>
        </form>
        </div>
    </div>
</div>
<div class="card card-form">
    @if (\Session::has('success-facility-save'))
        <div class="alert alert-success text-center" style="width: auto;height: 65px;">
            <ul style="margin-top: 1%;padding: 0 5px;">
                <li style="list-style: none;">{!! \Session::get('success-facility-save') !!}</li>
            </ul>
        </div>
        @endif
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">Facilities</strong></p>
            <p class="text-muted">Select College Facilites</p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <form id="college-facility-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="edit_type" style="display:none" value="facility_edit">
                <input type="text" name="college_id" style="display:none" value="{{$college_detail->id}}">
            @foreach($college_facilites as $key => $value)
            @if(($loop->index==0)||($loop->index % 5==0))
            <div class="row">
            @endif    
                <div class="col">
                    <div class="form-group">
                        <label for="{{$key}}">{{$key}}</label>
                        <input id="{{$key}}"
                               type="checkbox"
                               class="form-control"
                                 name="{{$key}}" {{$value==1?"checked='checked'":''}}>
                    </div>
                </div>
            @if(($loop->index % 5==4)&&($loop->index >0))    
            </div>
            @endif
            @endforeach
            <div class="form-group mt-4">
                <button class="btn btn-success">Save Facilities</button>
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
    @if (\Session::has('success-placement-save'))
        <div class="alert alert-success text-center" style="width: auto;height: 65px;">
            <ul style="margin-top: 1%;padding: 0 5px;">
                <li style="list-style: none;">{!! \Session::get('success-placement-save') !!}</li>
            </ul>
        </div>
    @endif    
    <div class="row no-gutters">
        <h4 class="p-3 pl-4">Placement companies</h4>
         <form id="college-placment-info" method="POST" action="{{url('/admin/allColleges/edit/'.$college_detail->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')    
        @foreach($placements as $key=>$placement)
        @if(($loop->index==0)||($loop->index %3==0))
        <div class="col-lg-12 col-md-12 card-body card-form__body row">
        @endif 
            <div class="form-group col-md-4">
                <label>Company {{$loop->iteration}}</label>
                <input type="text" name="edit_type" style="display:none" value="placement_edit">
                <input type="text" name="college_id" style="display:none" value="{{$college_detail->id}}">
                <input type="file" name="company{{$loop->iteration}}" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 120px;">
                            <img src="{{asset('assets/img/companies/'.$placement)}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                </div>
            </div>
        @if((($loop->index ==2)||($loop->index==4))&&($loop->index >0))    
        </div>
        @endif
        @endforeach
        <div class="form-group text-center mt-4">
                <button class="btn btn-success">Save Placements</button>
        </div>
    </form>
    </div>
</div>
@endsection
@include('admin.addCourseModal')

@section('add-course_subcourse')
<script type="text/javascript">  
    $(document).ready(function(){
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });        
        $('#add_course_form').on('submit',function(e){
            event.preventDefault(e);
            var course_name=$('#coursename').val();
            var college_id=$('#college_id_ajax').val();
            $.ajax({
                url:'{{route('addCourse')}}',
                type:"POST",
                data:{course_name:course_name,college_id:college_id},
                success:function(){
                    $('#modal-signup').modal('hide');
                    alert('Your Course has been added succesfully');
                    $(".course-div").load(" .course-div > *");
                    $(".course-button-div").load(" .course-button-div > *");
                    $('#coursename').val('');
                    $("#modal-signup-subcourse").load(" #modal-signup-subcourse > *");
                }
            });
        });

        $('#add_sub_course_form').on('submit',function(e){
            event.preventDefault(e);
            var sub_course_name=$('#subcoursename').val();
            var sub_course_duration=$('#duration').val();
            var sub_course_fees=$('#subcoursefees').val();
            var course_id=$('#courseofsubcourse').val();
            $.ajax({
                url:'{{route('addSubCourse')}}',
                type:"POST",
                data:{sub_course_name:sub_course_name,sub_course_duration:sub_course_duration,sub_course_fees:sub_course_fees,course_id:course_id},
                success:function(){
                    $('#modal-signup-subcourse').modal('hide');
                    alert('Your SubCourse has been added succesfully');
                    $(".preloader").load(" .preloader > *");
                    $(".subcourse-div").load(" .subcourse-div > *");
                    $(".subcourse-button-div").load(" .subcourse-button-div > *");
                },
                error: function() {
                    alert('Invalid Entry, Please try again');
                }
            }); 
        });
    });
</script>
@endsection