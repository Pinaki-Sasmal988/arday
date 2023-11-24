@extends('student.layouts.main')
@section('page-name')
<h5>Contact Support</h5>
@endsection
@section('slider')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Contact Support') }}</div>
               
                
                <div class="card-body">
    
                        <div class="mb-1 sm-6">
                       <label for="exampleInputEmail1" class="form-label">Contact Via Mail:-</label>
                       <a href = "mailto:horsantech@gmail.com">horsantech@gmail.com</a></div>
                       <div class="mb-1 sm-6">
                      <label for="exampleInputPassword1" class="form-label"></i>Contact Via Phone:-</label>
                       <strong>1234567890</strong>
                      </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

