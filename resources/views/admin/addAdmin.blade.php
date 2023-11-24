@extends('admin.layouts.main')
@section('page-name')
Add Admin
@endsection
@section('add-admin')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            @if (\Session::has('success'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                    @endif
            <p><strong class="headings-color">Add Admin</strong></p>
            <p class="text-muted"></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <form id="college-basic-info" method="POST" action="{{route('addAdminSave')}}">
                @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Admin Name</label>
                        <input id="fname"
                               type="text"
                               class="form-control @error('admin_name') is-invalid @enderror"
                               placeholder="Name"
                               value="{{ old('admin_name') }}" name="admin_name" required="required">
                               @error('admin_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email"
                               type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="Email"
                               value="{{ old('email') }}" name="email" required="required">
                               @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input id="mobile"
                               type="text"
                               class="form-control @error('mobile') is-invalid @enderror"
                               placeholder="Mobile"
                               value="{{ old('mobile') }}" name="mobile" required="required">
                               @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password"
                               type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password"
                                name="password" required="required">
                                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save Basic Information</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection