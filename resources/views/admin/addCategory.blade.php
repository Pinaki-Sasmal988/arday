@extends('admin.layouts.main')
@section('page-name')
Add Category
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
            <p><strong class="headings-color">Add Category</strong></p>
            <p class="text-muted"></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <form id="college-basic-info" method="POST" action="{{route('addCategorySave')}}"  enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Category Name</label>
                        <input id="fname"
                               type="text"
                               class="form-control @error('category_name') is-invalid @enderror"
                               placeholder="Name"
                               value="{{ old('category_name') }}" name="category_name" required="required">
                               @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="fname">Category Image</label>
                        <input type="file" name="category_image" class="mb-3 file-upload">
                               @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save Category</button>
            </div>
        </form>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <strong class="headings-color">Current Categories/Edit</strong>
            @if (\Session::has('category-deleted'))
                    <div class="alert alert-success text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('category-deleted') !!}</li>
                        </ul>
                    </div>
                    @endif
                    @if (\Session::has('category-deleted-fail'))
                    <div class="alert alert-danger text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('category-deleted-fail') !!}</li>
                        </ul>
                    </div>
                    @endif
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <form method="POST" action="{{route('updateCategory')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row">
            @foreach($categories as $category)    
                <div class="col-md-3">
                <div class="form-group">
                <input type="text" class="d-none" name="cat_id[]" value="{{$category->id}}">    
                    <input type="text" class="mb-1 form-control" name="{{'category'.$loop->iteration}}" value="{{$category->category}}">
                    <input type="file" id='{{'update_file'.$loop->iteration}}' class="mb-1 d-none" name="{{'category_image'.$loop->iteration}}">
                    <label for="{{'update_file'.$loop->iteration}}" class="p-2 bg-primary text-white">Click to Change Image</label><br><a href="{{url('admin/delete/category/'.$category->id)}}" class="btn btn-dark btn-sm">Delete</a>
                <div class="dz-clickable media align-items-center mb-3"
                     data-toggle="dropzone"
                     data-dropzone-url="http://"
                     data-dropzone-clickable=".dz-clickable"
                     data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar"
                             style="width: 120px;height: 100px;padding: 10px;">
                            <img src="{{asset('assets/img/'.$category->category_image)}}"
                                 class="avatar-img rounded py-1 px-3"
                                 alt="..."
                                 data-dz-thumbnail>

                        </div>
                    </div>
                </div>
            </div>
                </div>
            @endforeach
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update Categories</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection