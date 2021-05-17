@extends('runner.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="en">

    <body class="nav-fixed">

        <main>

        <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-5">
                        <div class="container">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="package"></i></div>
                                            Statistics
                                        </h1>
                                        <div class="page-header-subtitle">This is your statistics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="container mt-4">                       
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <!-- Billing card 1-->
                                <div class="card h-100 border-left-lg border-left-primary">
                                    <div class="card-body">
                                        <div class="small text-muted">Total all request services</div>
                                        <div class="h3">{{ $totalCompletedReqs }}</div>
                                        <a class="text-arrow-icon small" href="{{ route('client.services.index') }}">
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
                                        <div class="small text-muted">Total pending services</div>
                                        <div class="h3">{{ $totalRequestedReqs }}</div>
                                        <a class="text-arrow-icon small text-secondary" href="{{ route('client.services.index', ['status'=>'Pending']) }}">
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
                                        <div class="small text-muted">Total ongoing services</div>
                                        <div class="h3 d-flex align-items-center">{{ $totalAcceptedReqs }}</div>
                                        <a class="text-arrow-icon small text-success" href="{{ route('client.services.index', ['status'=>'Ongoing']) }}">
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




                                         
        </main>
    
    </body>

</html>
@endsection