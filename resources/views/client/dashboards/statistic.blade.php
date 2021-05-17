@extends('client.main')

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
                                        <div class="small text-muted">Total all created services</div>
                                        <div class="h3">{{ $totalAllServices }}</div>
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
                                        <div class="h3">{{ $totalPendingServices }}</div>
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
                                        <div class="h3 d-flex align-items-center">{{ $totalOngoingServices }}</div>
                                        <a class="text-arrow-icon small text-success" href="{{ route('client.services.index', ['status'=>'Ongoing']) }}">
                                            View all
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Payment methods card-->
                        <div class="card card-header-actions mb-4">
                            <div class="card-header">
                                Payment Methods
                                <button class="btn btn-sm btn-primary" type="button">Add Payment Method</button>
                            </div>
                            <div class="card-body">
                                <!-- Payment method 1-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                                        <div class="ml-4">
                                            <div class="small">Visa ending in 1234</div>
                                            <div class="text-xs text-muted">Expires 04/2024</div>
                                        </div>
                                    </div>
                                    <div class="ml-4 small">
                                        <div class="badge badge-light mr-3">Default</div>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                                <hr />
                                <!-- Payment method 2-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                                        <div class="ml-4">
                                            <div class="small">Mastercard ending in 5678</div>
                                            <div class="text-xs text-muted">Expires 05/2022</div>
                                        </div>
                                    </div>
                                    <div class="ml-4 small">
                                        <a class="text-muted mr-3" href="#!">Make Default</a>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                                <hr />
                                <!-- Payment method 3-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                                        <div class="ml-4">
                                            <div class="small">American Express ending in 9012</div>
                                            <div class="text-xs text-muted">Expires 01/2026</div>
                                        </div>
                                    </div>
                                    <div class="ml-4 small">
                                        <a class="text-muted mr-3" href="#!">Make Default</a>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Billing history card-->
                        <div class="card mb-4">
                            <div class="card-header">List of Completed Services</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service ID</th>
                                                <th scope="col">Name of Service</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                @foreach($services as $service)
                                @if (auth()->user()->id == $service->user->id && $service->status == 'Completed')
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->category->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td><span class="badge badge-success">{{ $service->status }}</span></td>
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