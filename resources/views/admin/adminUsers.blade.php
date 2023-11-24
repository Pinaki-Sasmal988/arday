@extends('admin.layouts.main')
@section('page-name')
All Users
@endsection
@section('allUsers')
<div class="card">
@if (\Session::has('user-deleted'))
                    <div class="alert alert-success text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('user-deleted') !!}</li>
                        </ul>
                    </div>
                    @endif
                    @if (\Session::has('user-deleted-fail'))
                    <div class="alert alert-danger text-center" style="width: auto;height: 55px;">
                        <ul style="margin-top: 1%;padding: 0 5px;">
                            <li style="list-style: none;">{!! \Session::get('user-deleted-fail') !!}</li>
                        </ul>
                    </div>
                    @endif
        <div class="table-responsive">

            <div class="m-3">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                       <form method="POST" action="{{route('searchContent')}}" name="user-search-form">
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
                        <input type="text" name="filter_type" class="d-none" value="user-search-filter">
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
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Course</th>
                        <th class="text-center">State</th>
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
                    @foreach($users as $user)
                    @if($user->id!=0)
                    <tr>
                        <td>
                            <div class="badge badge-soft-dark text-center"># {{$loop->iteration}}</div>
                        </td>
                        <td><a href="#">{{$user->name}}</a></td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->mobile}}</td>
                        <td class="text-center">{{$user->course}}</td>
                        <td class="text-center">{{$user->state}}</td>
                        <td class="text-center"><a href="{{url('admin/delete/user/'.$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-body text-right">
            @if(count($users)<20)
            {{count($users)}} @else{20} @endif<span class="text-muted">of {{count($users)}}</span> <a href="#"
               class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
        </div>
        <div class="text-center mx-auto">
            {{ $users->onEachSide(5)->links() }}
        </div>

    </div>
@endsection