@extends('runner.main')

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
                            <a class="btn btn-primary p-3" href="{{ route('runner.dashboards.index') }}">
                                Get Started
                                <i class="ml-1" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="container mt-4">
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <!-- Billing card 1-->
                            <div class="card h-100 border-left-lg border-left-primary">
                                <div class="card-body">
                                    <div class="small text-muted">Total current requested requests</div>
                                    <div class="h3">{{ $totalRequestedReqs }}</div>
                                    <a class="text-arrow-icon small" href="{{ route('runner.requests.index', ['status'=>'Requested']) }}">
                                        View all
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <!-- Billing card 2-->
                            <div class="card h-100 border-left-lg border-left-secondary">
                                <div class="card-body">
                                    <div class="small text-muted">Total current accepted requests</div>
                                    <div class="h3">{{ $totalAcceptedReqs }}</div>
                                    <a class="text-arrow-icon small text-secondary" href="{{ route('runner.requests.index', ['status'=>'Accepted']) }}">
                                        View all
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <!-- Billing card 3-->
                            <div class="card h-100 border-left-lg border-left-success">
                                <div class="card-body">
                                    <div class="small text-muted">Total current completed requests</div>
                                    <div class="h3 d-flex align-items-center">{{ $totalCompletedReqs }}</div>
                                    <a class="text-arrow-icon small text-success" href="{{ route('runner.requests.index', ['status'=>'Completed']) }}">
                                        View all
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Billing history card-->
                    <div class="card mb-4">
                        <div class="card-header">List of Request Services</div>
                        <div class="card-body p-0">
                            <!-- Billing history table-->
                            <div class="table-responsive table-billing-history">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Req ID</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Notes</th>
                                            <th scope="col">Name of Service</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reqs as $req)
                                        @if (auth()->user()->id == $req->user->id && $req->status == 'Completed')
                                        <tr>
                                            <td>{{ $req->id }}</td>
                                            <td>{{ $req->price }}</td>
                                            <td>{{ $req->notes }}</td>
                                            <td>{{ $req->service->name }}</td>
                                            <td><span class="badge badge-success">{{ $req->status }}</span></td>
                                        </tr>
                                        @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>

</html>
@endsection