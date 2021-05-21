@extends('admin.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="en">

<body class="nav-fixed">

    <main>

        <!-- Main page content-->
        <div class="container mt-5">
            <!-- Custom page header alternative example-->
            <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="mr-4 mb-3 mb-sm-0">
                    <h1 class="mb-0">Dashboard</h1>
                    <div class="small">
                        <span class="font-weight-500 text-primary">{{ $day }}</span>
                        &middot; {{ $todayDate }} &middot; {{ $todayTime }}
                    </div>
                </div>

            </div>
            <!-- Illustration dashboard card example-->
            <div class="card card-waves mb-4 mt-5">
                <div class="card-body p-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                            <p class="text-gray-700">Great job, your affiliate dashboard is ready to go! You can view sales, generate links, prepare coupons, and download affiliate reports using this dashboard.</p>
                            <a class="btn btn-primary p-3" href="{{ route('admin.dashboards.index') }}">
                                Get Started
                                <i class="ml-1" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <!-- Dashboard info widget 1-->
                    <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small font-weight-bold text-primary mb-1">Total All Users</div>
                                    <div class="h5">{{ $totalAllUsers }}</div>
                                    <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
                                        <a class="text-arrow-icon small" href="{{ route('admin.users.index') }}">
                                            View all
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ml-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <!-- Dashboard info widget 2-->
                    <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-secondary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small font-weight-bold text-secondary mb-1">Total Admins</div>
                                    <div class="h5">{{ $totalAdmins }}</div>
                                </div>
                                <div class="ml-2"><i class="fas fa-tag fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <!-- Dashboard info widget 3-->
                    <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small font-weight-bold text-success mb-1">Total Clients</div>
                                    <div class="h5">{{ $totalClients }}</div>
                                </div>
                                <div class="ml-2"><i class="fas fa-mouse-pointer fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <!-- Dashboard info widget 4-->
                    <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small font-weight-bold text-info mb-1">Total Runners</div>
                                    <div class="h5">{{ $totalRunners }}</div>
                                </div>
                                <div class="ml-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-xxl-12">
                    <!-- Team members / people dashboard card example-->
                    <div class="card mb-4">
                        <div class="card-header">List of Admins</div>
                        <div class="card-body">
                            <!-- Item 1-->
                            @foreach($users as $user)
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                    <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" alt="" /></div>
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a class="text-dark line-height-normal mb-1" href="#!">{{ $user->name }}</a>
                                        <div class="small text-muted line-height-normal">{{ $user->role }}</div>
                                    </div>
                                </div>
                                <div class="dropdown no-caret">
                                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople1">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                                    <h5>Total All Created Services</h5>
                                    <div class="text-muted small">There are {{ $totalServices }} total created services.</div>

                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                                    <h5>Total Today Created Services</h5>
                                    <div class="text-muted small">There are {{ $todayCreatedServices }} total created services.</div>

                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                                    <h5>Total Created Services</h5>
                                    <div class="text-muted small"></div>

                                </div>

                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">

                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 2-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                                    <h5>Total All Submit Requests</h5>
                                    <div class="text-muted small">There are {{ $totalReqs }} total submit requests.</div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 2-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                                    <h5>Total Today Submit Requests</h5>
                                    <div class="text-muted small">There are {{ $todaySubmitReqs }} total of today submit requests.</div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 2-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                                    <h5>Total All Submit Requests</h5>
                                    <div class="text-muted small"></div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">

                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 3-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                                    <h5>Total All Remarks</h5>
                                    <div class="text-muted small">There are {{ $totalRemarks }} total remarks.</div>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 3-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                                    <h5>Total Today Remarks</h5>
                                    <div class="text-muted small">There are {{ $todayRemarks }} total of today remarks.</div>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-xl-4 mb-4">
                    <!-- Dashboard example card 3-->
                    <a class="card lift h-100" >
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                                    <h5>Total Remarks</h5>
                                    <div class="text-muted small"></div>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>

            </div>
            
            

    </main>

</body>

</html>
@endsection