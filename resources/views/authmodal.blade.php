<div class="modal fade" id="modalregisterindex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content md-100" style="border:none;overflow-y: ">  
      <div id="login">
        <aside class="apply-modal-aside mx-auto " id="indexpopup">
          <figure class="apply-modal-figure">
                <a href="index.html"><img src="{{asset('assets/img/ardaylogo.png')}}" height="92" alt=""></a>
            </figure>
            <form method="POST" action="{{ route('register') }}" id="indexpopupform" style="margin-bottom: ;">
                <div class="form-group mb-0">
                    @csrf
                    <div class="row">
                    <span class="input col mr-2">
                    <input class="input_field authmodal_input_field @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" name="name">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit ">Name</span>
                    </label>
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input col ml-2">
                    <input class="input_field authmodal_input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Email</span>
                    </label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                    </span>
                </div>
                <div class="row">
                    <span class="input col mr-2">
                    <input class="input_field authmodal_input_field @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" type="text">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Mobile</span>
                    </label>
                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input col ml-2">
                    <select class="input_field authmodal_input_field  @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" >
                        <option value="0">Select</option>
                         @foreach($courses as $course)
                         <option value="{{$course->category}}">{{$course->category}}</option>
                        @endforeach
                    </select> 
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Preferred Course</span>
                    </label>
                    @error('course')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                </div>
                <div class="row">
                    <span class="input col mr-2">
                    <select class="input_field authmodal_input_field @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" >
                        <option value="0">Select</option>
                         @foreach($states as $state)
                         <option value="{{$state->state}}">{{$state->state}}</option>
                        @endforeach
                    </select> 
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Your State</span>
                    </label>
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>

                    <span class="input col ml-2">
                    <input class="input_field authmodal_input_field  @error('password') is-invalid @enderror" name="password" type="password" id="password1">
                        <label class="input_label">
                        <span class="input__label-content input__label-content-edit">Your password</span>
                    </label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                    </div>
                    <div class="row">
                    <span class="input col">
                        <input class="input_field authmodal_input_field" type="password" id="password2" name="password_confirmation" required>
                        <label class="input_label">
                            <span class="input__label-content input__label-content-edit">Confirm password</span>
                        </label>
                    </span>
                    <span class="col"></span>
                </div>
                   {{--  <div id="pass-info" class="clearfix"></div> --}}
                </div>
                <button type="submit" class="btn_1 rounded full-width">Register</button>
                <a href="/googleLogin"><img src="{{asset('assets/img/sign-up.png')}}" height="67" /><a>
                <a href="/facebookLogin"><img src="{{asset('assets/img/facebook-signup1.jpg')}}" height="53" /><a>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('login')}}">Sign In</a></strong></div>
            </form>
            <div class="copy" style="position:unset !important;">© {{date('Y')}} Horsan Technology</div>
        </aside>
    </div>
</div>
</div>
</div>