@extends('student.layouts.main')
@section('page-name')
 <h5>Student Dashboard<h5>
@endsection
@section('slider')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4  text-center">  
          <div class="card text-center"> 
        <img class="mx-auto d-block" style="border: 2px solid gray;padding: 3px; border-radius: 110%;" src="{{asset('storage/images/' .auth()->user()->photo)}}" width="210" height="160"/><hr>   
        <p class="text-center"><b>Informations</b></p>
           <hr>
           <h6><b>Email:</b>{{auth()->user()->email}}</h6>
           <h6><b>Phone:</b>{{auth()->user()->mobile}}</h6>
           <h6><b>State:</b>{{auth()->user()->state ?? 'Not Set'}}</h6>
           <h6><b>City:</b>{{auth()->user()->city ?? 'Not Available'}}</h6>
           <p class="text-center"><b> Course Informations</b></p>
           <hr>
           <p>GNM Nursing</p>
           <p>abcd nursing collage</p>
           </div>
        </div>
           <div class="col-sm-4 mt-1 text-center">
            <div class="card text-center">
            <h4 class="text-center">Collage Suggestion</h4>
            <img class="mx-auto d-block" style="width:60% ;height:25%" src="{{asset('assets/admin/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" width="330" height="50"/> <br><a href="#" class="btn btn-primary">Kolkata Univercity</a><br><br> 
            <img class="mx-auto d-block" style="width:60%; height:25%" src="{{asset('assets/admin/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" width="330" height="50"/><br><a href="#" class="btn btn-primary">Delhi Univercity</a>   
           </div>
          </div>

          <div class="col-sm-4 mt-1">
          <div class="card text-center">
            <div class="card-body">
          <h6 class="card-title">Membership Status <a href="#" class="btn btn-primary">Subscribe</a></h6>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
          </div>
          </div>
    </div>    
</div>
@endsection