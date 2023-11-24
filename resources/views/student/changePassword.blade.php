@extends('student.layouts.main')
@section('page-name')
<h5>Change Password</h5>
@endsection
@section('slider')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Update Password') }}</div>
               
                
                <div class="card-body">
                @if (isset($confirmationMessage))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $confirmationMessage }}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button> 
              </div>
              @endif
    
                    <form method="POST" action="/updatePassword">
                        @csrf
                        <div class="mb-3 sm-5">
                       <label for="exampleInputEmail1" class="form-label">Set New Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" required>
                       </div>
                       <div class="mb-3 sm-5">
                      <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                       <input type="password"   onkeyup="check(this)" class="form-control" id="exampleInputPassword1" required>
                      </div>
                      <h6 id="res"></h6>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">
var password=document.getElementById('password');
	  function check(ele){
	        if(ele.value.length>0){
	            if(ele.value != password.value){
	              document.getElementById('res').innerText="password does't mach";
	            }else{
	                document.getElementById('res').innerText="";

	            }
	        }else{
	            document.getElementById('res').innerText="Enter confirm password";

	        }
	    }

  </script>
  <style>
    h6{
      color:red;
    }
    </style>
@endsection

