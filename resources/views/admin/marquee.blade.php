@extends('admin.layouts.main')
@section('page-name')
Edit Marquee Details
@endsection
@section('edit-marqueeDetails')
<div class="card card-form">
@if (\Session::has('success-marquee-save'))
                    <div class="alert alert-success text-center" style="width: auto;height: 65px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('success-marquee-save') !!}</li>
                        </ul>
                    </div>
                    @endif    
                                <form method="POST" action="{{route('edit-marquee')}}">
                                    @csrf
                                    @method('PUT')
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Marquee[Info Banner] Details</strong></p>
                                        <p class="text-muted">Update Content and running Date.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="start-date">Start-Date</label>
                                                    <input type="date" name="start_date" class="form-control" placeholder="Start-Date" id="start-date" value="{{$marquee_content->start_date}}">
                                                </div>
                                                <div class="col">
                                                    <label for="end-date">End-Date</label>
                                                    <input type="date" name="end_date" class="form-control" placeholder="End-Date" id="end-date" value="{{$marquee_content->finish_date}}">
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="desc2">Content [Keep It Short &amp; Simple!]</label>
                                            <textarea id="desc2"
                                                      rows="4"
                                                      class="form-control"
                                                      placeholder="Content ..." name="content">{{$marquee_content->content}}</textarea>
                                        </div>
                                        <br><div class="form-group">
                                        <button class="btn btn-success btn-lg">Save</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>              
@endsection