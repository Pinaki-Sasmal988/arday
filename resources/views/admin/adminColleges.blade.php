@extends('admin.layouts.main')
@section('page-name')
All Colleges
@endsection
@section('allColleges')
<div class="card">
@if (\Session::has('college-deleted'))
                    <div class="alert alert-success text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('college-deleted') !!}</li>
                        </ul>
                    </div>
                    @endif
                    @if (\Session::has('college-deleted-fail'))
                    <div class="alert alert-danger text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('college-deleted-fail') !!}</li>
                        </ul>
                    </div>
                    @endif
        <div class="table-responsive">

            <div class="m-3">
                <div class="row">
                    <div class="col-md-4">
                        <form name="college-filter-form" action="{{route('searchContent')}}" method="POST">
                            @csrf
                        <select name="filter_content"
                                class="form-control" id="college_type_select">
                                <option value="0" selected="selected">ALL</option>
                            @foreach($college_categories as $college)    
                            <option value="{{$college->category}}">{{$college->category}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="filter_type" class="d-none" value="college-select-filter">
                        </form>
                    </div>
                    <div class="col-md-8">
                       <form method="POST" action="{{route('searchContent')}}" name="college-search-form">
                       @csrf 
                        <div class="search-form search-form--light">
                            <input type="text"
                                   class="form-control search"
                                   placeholder="Type College Name Press Enter" name="filter_content">
                            <button class="btn"
                                    type="button"
                                    role="button"><i class="material-icons">search</i></button>
                                    <input type="submit" class="d-none">
                        </div>
                        <input type="text" name="filter_type" class="d-none" value="college-search-filter">
                    </form>
                    </div>
                </div>
            </div>

            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th class="text-center">City</th>
                        <th class="">State</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">View/Edit</th>
                        <th class="text-center">Delete</th>
                        
                            {{--<div class="dropdown pull-right">
                                <a href="#"
                                   data-toggle="dropdown"
                                   class="dropdown-toggle">Bulk</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)"
                                       class="dropdown-item"><i class="material-icons icon-18pt mr-1">work</i> Set Price</a>
                                    <a href="javascript:void(0)"
                                       class="dropdown-item"><i class="material-icons icon-18pt mr-1">archive</i> Archive</a>
                                </div>
                            </div>--}}
                    </tr>
                </thead>
                <tbody class="list" id="products">
                    @foreach($colleges as $college)
                    <tr>
                        <td>
                            <div class="badge badge-soft-dark text-center"># {{$loop->iteration}}</div>
                        </td>
                        <td><a href="{{url('admin/allColleges/edit/'.$college->id)}}">{{$college->college_name}}</a></td>
                        <td class="text-center">{{$college->city}}</td>
                        <td>{{$college->state}}</td>

                        <td class="text-center">{{$college->college_type}}</td>
                        <td class="text-center"><a href="{{url('admin/allColleges/edit/'.$college->id)}}"class="btn btn-sm btn-primary">VIEW/EDIT</td>
                        <td class="text-center"><a href="{{url('admin/delete/college/'.$college->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-body text-right">
            @if(count($colleges)<20)
            {{count($colleges)}} @else{20} @endif<span class="text-muted">of {{count($colleges)}}</span> <a href="#"
               class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
        </div>
        <div class="text-center mx-auto">
            {{ $colleges->onEachSide(5)->links() }}
        </div> 
</div>    
@endsection
@section('admin-college-script')
<script type="text/javascript">
   $(document).ready(function() {
  $('#college_type_select').on('change', function() {
     document.forms['college-filter-form'].submit();
  });
}); 
</script>
@endsection