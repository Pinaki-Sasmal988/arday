<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">  
      <div id="login">
        <aside class="apply-modal-aside mx-auto">
          <figure class="apply-modal-figure">
            <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" width="149" height="42" alt=""></a>
          </figure>
            <form method="POST" action="{{route('submit-application')}}" class="apply-modal-form">
              @csrf
            <div class="divider"><span class="modal_college_name"></span></div>
            <div class="form-group">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <input type="text" id="college_name" name="college_name" class="d-none" value="">
              <input type="text" id="college_id" name="college_id" class="d-none" value="">
              <span class="input">
              <input value="{{Auth::check()=='true'?auth()->user()->name:''}}" class="input_field" type="text" autocomplete="off" name="name" required="required">
                <label class="input_label">
                <span class="input__label-content">Your Name</span>
              </label>
              </span>
              <span class="input">
              <input value="{{Auth::check()=='true'?auth()->user()->email:''}}" class="input_field" type="email" autocomplete="email" name="email" required="required">
                <label class="input_label">
                <span class="input__label-content">Email</span>
              </label>
              </span>
              <span class="input">
              <input value="{{Auth::check()=='true'?auth()->user()->mobile:''}}" class="input_field" type="text" name="phone" required="required">
                <label class="input_label">
                <span class="input__label-content">Mobile</span>
              </label>
              </span>
              <span class="input mt-4">
                  {{-- <label class="input_label">
                  <span class="input__label-content">Course</span>
                  </label> --}}                
              <div class="form-group select">
                  <div class="styled-select">
                    <select class="required" name="education_apply" id="education_apply" required="required">
                      <option value="" selected="">Select Course</option>
                    </select>
                </div>
              </div>
              </span>
              <span class="input mt-3 d-none">
                   <label class="input_label">
                  <span class="input__label-content">Course</span>
                  </label>               
              <div class="form-group select">
                  <div class="styled-select">
                    <select class="required" name="state_apply" id="state_apply" required="required">
                      <option value="">Select State</option>
                      <option value="Default State" selected="">Select State</option>
                      @foreach($states as $state)
                      <option value="{{$state->state}}">{{$state->state}}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              </span>
              {{-- <small><a href="#0">Forgot password?</a></small> --}}
            </div>
            <button class="btn_1 rounded full-width add_top_60" type="submit">Submit</button>
            <div class="text-center add_top_30"><button type="button" class="btn btn-danger text-center btn-rounded" data-dismiss="modal">Close X</button></div>
          </form>
          {{-- <div class="copy">© 2017 Udema</div> --}}
        </aside>
      </div>      
    </div>
  </div>
</div>