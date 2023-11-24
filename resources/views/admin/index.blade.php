@extends('admin.layouts.main')
@section('page-name')
Dashboard
@endsection
@section('index-content')
<div class="row card-group-row">
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-primary">
                                                    <i class="material-icons text-white icon-18pt">business</i>
                                                </span>
                                            </div>
                                            <a href="{{route('allColleges')}}"
                                               class="text-dark">
                                                <strong>Colleges</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center">
                                                    <i class="material-icons text-white icon-18pt">person_add</i>
                                                </span>
                                            </div>
                                            <a href="{{route('addCollege')}}"
                                               class="text-dark">
                                                <strong>Add College</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-success">
                                                    <i class="material-icons text-white icon-18pt">contact_mail</i>
                                                </span>
                                            </div>
                                            <a href="#"
                                               class="text-dark">
                                                <strong>Add Admin</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-info">
                                                    <i class="material-icons text-white icon-18pt">collections</i>
                                                </span>
                                            </div>
                                            <a href="{{route('slider')}}"
                                               class="text-dark">
                                                <strong>Slider Images</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-blue">
                                                    <i class="material-icons text-white icon-18pt">account_circle</i>
                                                </span>
                                            </div>
                                            <a href="{{route('allUsers')}}"
                                               class="text-dark">
                                                <strong>Users</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-warning">
                                                    <i class="material-icons text-white icon-18pt">assignment_turned_in</i>
                                                </span>
                                            </div>
                                            <a href="{{route('allUserApp')}}"
                                               class="text-dark">
                                                <strong>User Applications</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-primary">
                                                    <i class="material-icons text-white icon-18pt">assignment_ind</i>
                                                </span>
                                            </div>
                                            <a href="{{route('allGuestApp')}}"
                                               class="text-dark">
                                                <strong>Guest Applications</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="p-2 d-flex flex-row align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle text-center bg-danger">
                                                    <i class="material-icons text-white icon-18pt">folder_shared</i>
                                                </span>
                                            </div>
                                            <a href="{{route('allCAP')}}"
                                               class="text-dark">
                                                <strong>Common Applications</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            

<div class="row card-group-row">
    <div class="col-lg-4 col-md-6 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                <div class="flex">
                    <div class="card-header__title mb-2">Total Users</div>
                    <div class="text-amount">{{$user_count}}</div>
                </div>
                <div class="ml-3 d-flex flex-column align-items-end text-right">
                    <a href="{{route('allUsers')}}"
                       class="mb-2">View All</a>
                    <div class="text-stats text-success"><i class="material-icons">arrow_upward</i></div>
                </div>
            </div>
            <div class="card-body flex-0">
                <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                    <span class="flex text-body"></span>
                    <span class="mx-3"></span>
                    <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i></span>
                </small>
                <small class="d-flex align-items-center font-weight-bold text-muted">
                    <span class="flex text-body"></span>
                    <span class="mx-3"></span>
                    <span class="d-flex align-items-center"><i class="material-icons text-danger icon-16pt mr-1"></i></span>
                </small>
            </div>
            <div class="card-body text-muted flex d-flex align-items-center">
                <div class="chart w-100"
                     style="height: 200px;">
                    <canvas id="totalSalesChart">
                        <span style="font-size: 1rem;"><strong>Total Colleges</strong> chart goes here.</span>
                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                <div class="flex">
                    <div class="card-header__title mb-2">Total Colleges</div>
                    <div class="text-amount">{{$college_count}}</div>
                </div>
                <div class="ml-3 d-flex flex-column align-items-end text-right">
                    <a href="{{route('allColleges')}}"
                       class="mb-2">View All</a>
                    <div class="text-stats text-success"><i class="material-icons">arrow_upward</i></div>
                </div>
            </div>
            <div class="card-body text-muted flex d-flex align-items-center">
                <div class="chart w-100"
                     style="height: 250px;">
                    <canvas id="totalVisitorsChart">
                        <span style="font-size: 1rem;"><strong>Total Visitors</strong> chart goes here.</span>
                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                <div class="flex">
                    <div class="card-header__title mb-2">Common Applications</div>
                    <div class="text-amount">{{$cap_count}}</div>
                </div>
                <div class="ml-3 d-flex flex-column align-items-end text-right">
                    <a href="{{route('allCAP')}}"
                       class="mb-2">View All</a>
                    <div class="text-stats text-success"><i class="material-icons">arrow_upward</i></div>
                </div>
            </div>
            <div class="card-body text-muted flex d-flex align-items-center">
                <div class="chart w-100"
                     style="height: 250px;">
                    <canvas id="repeatCustomerRateChart">
                        <span style="font-size: 1rem;"><strong>Repeat Customer Rate</strong> chart goes here.</span>
                    </canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card card-social card-facebook">
            <div class="card-body">
                <a href="{{route('allUserApp')}}">
                    <i class="fa fa-address-card fa-4x"></i>
                    <div class="dropdown-divider"></div>
                    <span class="mt-1 d-block">
                        User Applications<br>
                        {{$userApp_count}}
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mx-auto">
        <div class="card card-social card-instagram">
            <div class="card-body">
                <a href="{{route('allGuestApp')}}">
                    <i class="fa fa-book fa-4x"></i>
                    <div class="dropdown-divider"></div>
                    <span class="mt-1 d-block">
                        Guest Applications<br>
                        {{$guestApp_count}}
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection