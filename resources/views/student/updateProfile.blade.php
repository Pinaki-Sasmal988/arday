@extends('student.layouts.main')
@section('page-name')
<h5>Update Profile</h5>
@endsection
@section('slider')
<div class="row card-group-row">                                     
<div class="col-lg-20 col-md-20 card-group-row__col">
    
<form  action="/updateInformation" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
  @csrf
  <div class="col-md-3 position-relative">
    <label for="validationTooltip01" class="form-label">Name</label>
    <input type="text" class="form-control"  value="{{auth()->user()->name}}"name="name" id="validationTooltip01" required>
   
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip02" class="form-label">Email</label>
    <input type="text" class="form-control" value="{{auth()->user()->email}}" name="email" id="validationTooltip02"  required>
    
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltipUsername" class="form-label">Mobile</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" value="{{auth()->user()->mobile}}" name="mobile" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
     
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Course</label>
    <input type="text" class="form-control" value="{{auth()->user()->course ?? 'not available'}}" name="course"  required>
    
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <input type="text" name="state"  value="{{auth()->user()->state}}"class="form-control"  required>

    
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip05" readonly>
   
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip02" class="form-label">Upload Photo</label>
    <input type="file"  name="photo" class="form-control" value="{{auth()->user()->photo}}" id="validationTooltip02">
   
  </div>
  <div class="col-12">
    <button class="btn btn-success" type="submit">Submit</button>
  </div>
</form>
 
            
    </div>
</div>
@endsection