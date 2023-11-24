@extends('admin.layouts.main')
@section('page-name')
Slider
@endsection
@section('slider')
<div class="card card-form">
    @if (\Session::has('success-slider-save'))
        <div class="alert alert-success text-center" style="width: auto;height: 65px;">
            <ul style="margin-top: 1%;padding: 0 5px;">
                <li style="list-style: none;">{!! \Session::get('success-slider-save') !!}</li>
            </ul>
        </div>
    @endif    
    <div class="row no-gutters">
        <h4 class="p-3 pl-4">Slider Images</h4>
         <form id="college-placment-info" method="POST" action="{{route('sliderSave')}}" enctype="multipart/form-data">
            @csrf
        <div class="col-lg-12 col-md-12 card-body card-form__body row">            
        @foreach($slider_images as $key=>$slider)
            <div class="form-group col-md-4">
                <label>Slider {{$loop->iteration}} (Suggested size- HD Size)</label>
                <input type="text" name="edit_type" style="display:none" value="placement_edit">
                <input type="file" name="slider{{$loop->iteration}}" class="mb-3 file-upload">
                <div class="dz-clickable media align-items-center"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 220px;height: auto;">
                            <img src="{{asset('assets/img/'.$slider)}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
        <div class="form-group text-center mt-4">
                <button class="btn btn-success">Save Slider</button>
        </div>
    </form>
    </div>
</div>
@endsection