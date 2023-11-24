@extends('admin.layouts.main')
@section('page-name')
All Registered Users Applications
@endsection
@section('allUserApp')
<div class="card">

        <div class="table-responsive">

            <div class="m-3">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                       <form method="POST" action="{{route('searchContent')}}" name="userapp-search-form">
                       @csrf 
                        <div class="search-form search-form--light">
                            <input type="text"
                                   class="form-control search"
                                   placeholder="Type User Name Press Enter" name="filter_content">
                            <button class="btn"
                                    type="button"
                                    role="button"><i class="material-icons">search</i></button>
                                    <input type="submit" class="d-none">
                        </div>
                        <input type="text" name="filter_type" class="d-none" value="userapp-search-filter">
                    </form>
                    </div>
                </div>
            </div>

            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th class="text-center">Email</th>
                        <th class="">Mobile</th>
                        <th class="">Course</th>
                        <th class="">College</th>
                        <th class="">State</th>
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
                    @if(count($user_applications)>0)
                    @foreach($user_applications as $app)
                    <tr>
                        <td>
                            <div class="badge badge-soft-dark text-center"># {{$loop->iteration}}</div>
                        </td>
                        <td><a href="#">{{$app->name}}</a></td>
                        <td class="text-center">{{$app->email}}</td>
                        <td class="text-center">{{$app->mobile}}</td>
                        <td class="text-center">{{$app->college}}</td>
                        <td class="text-center">{{$app->course}}</td>
                        <td class="text-center">{{$app->state}}</td>
                        {{-- <td class="text-center"><a href="">View</a></td> --}}
                    </tr>
                    @endforeach
                    @else
                    <tr><td>No applications found</td></tr>
                    @endif
                </tbody>
            </table>

        </div>

        <div class="card-body text-right">
            @if(count($user_applications)<20)
            {{count($user_applications)}} @else{20} @endif<span class="text-muted">of {{count($user_applications)}}</span> <a href="#"
               class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
        </div>
        <div class="text-center mx-auto">
            {{ $user_applications->onEachSide(5)->links() }}
        </div>

    </div>
@endsection