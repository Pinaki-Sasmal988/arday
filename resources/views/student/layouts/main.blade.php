<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />      
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>
        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{asset('assets/admin/vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

              <!-- boostrap -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                 <!-- boostrap js -->
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- App CSS -->
        <link type="text/css"
              href="{{asset('assets/admin/css/app.css')}}"
              rel="stylesheet">
        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-material-icons.css')}}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        {{--<script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>--}}

        <!-- Flatpickr -->
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{asset('assets/admin/css/vendor-flatpickr-airbnb.css')}}"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="{{asset('assets/admin/vendor/jqvmap/jqvmap.min.css')}}"
              rel="stylesheet">


              <!-- boostrap -->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body class="layout-default">

        <div class="preloader"></div>
        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">
            @include('student.layouts.header')
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                                            <li class="breadcrumb-item active"
                                                aria-current="page">Dashboard</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">@yield('page-name')</h1>
                                </div>
                                {{--<div class="flatpickr-wrapper ml-3">
                                    <div id="recent_orders_date"
                                         data-toggle="flatpickr"
                                         data-flatpickr-wrap="true"
                                         data-flatpickr-mode="range"
                                         data-flatpickr-alt-format="d/m/Y"
                                         data-flatpickr-date-format="d/m/Y">
                                        <a href="javascript:void(0)"
                                           class="link-date"
                                           data-toggle>13/03/2018 to 20/03/2018</a>
                                        <input class="flatpickr-hidden-input"
                                               type="hidden"
                                               value="13/03/2018 to 20/03/2018"
                                               data-input>
                                    </div>
                                </div>--}}
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                        @yield('slider')
                        <!-- @yield('index-content') -->
                            <!-- @yield('allColleges')
                            @yield('allUsers')
                            @yield('allUserApp')
                            @yield('allGuestApp')
                            @yield('allCAP')
                            @yield('edit-college')
                            @yield('add-admin')
                             @yield('slider')
                            @yield('edit-siteDetails')
                            @yield('edit-marqueeDetails') -->
                        </div>

                    </div>
                    <!-- // END drawer-layout__content -->

                    @include('student.layouts.sidebar')
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->
        <!-- jQuery -->
        <script src="{{asset('assets/admin/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('assets/admin/vendor/popper.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{asset('assets/admin/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{asset('assets/admin/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{asset('assets/admin/vendor/material-design-kit.js')}}"></script>

        <!-- App -->
        <script src="{{asset('assets/admin/js/toggle-check-all.js')}}"></script>
        <script src="{{asset('assets/admin/js/check-selected-row.js')}}"></script>
        <script src="{{asset('assets/admin/js/dropdown.js')}}"></script>
        <script src="{{asset('assets/admin/js/sidebar-mini.js')}}"></script>
        <script src="{{asset('assets/admin/js/app.js')}}"></script>

        <!-- App Settings (safe to remove) -->

        <!-- Flatpickr -->
        <script src="{{asset('assets/admin/vendor/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/flatpickr.js')}}"></script>

        <!-- Global Settings -->
        <script src="{{asset('assets/admin/js/settings.js')}}"></script>

        <!-- Moment.j -->
        <script src="{{asset('assets/admin/vendor/moment.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/moment-range.js')}}"></script>
        <!-- Vector Maps -->
        <script src="{{asset('assets/admin/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('assets/admin/js/vector-maps.js')}}"></script>
        <!-- Chart.js -->
        <script src="{{asset('assets/admin/vendor/Chart.min.js')}}"></script>
        <!-- App Charts JS -->
        <script src="{{asset('assets/admin/js/charts.js')}}"></script>
        <script src="{{asset('assets/admin/js/chartjs-rounded-bar.js')}}"></script>
        <!-- Chart Samples -->
        <script src="{{asset('assets/admin/js/page.dashboard.js')}}"></script>
        <script src="{{asset('assets/admin/js/progress-charts.js')}}"></script>
        <!-- @yield('add-course_subcourse')
        @yield('admin-college-script') -->
    </body>

</html>    