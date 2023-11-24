@extends('student.layouts.main')
@section('page-name')
<h5>Common Application</h5>
@endsection
@section('slider')
<div class="row card-group-row">                                     
<div class="col-lg-20 col-md-20 card-group-row">
<div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Course</th>
      <th>State</th>
      <th>Type</th>

    </tr>
  </thead>
  <tbody>

    @foreach($data as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->mobile}}</td>
      <td>{{$item->course}}</td>
      <td>{{$item->state}}</td>
      <td>{{$item->type}}</td>
    </tr>
   @endforeach
  </tbody>
</table>               
</div>
</div> 
</div>
</div>         
@endsection