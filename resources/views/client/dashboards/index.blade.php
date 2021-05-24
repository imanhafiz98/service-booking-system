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
                                Dashboard
                            </h1>
                            <div class="page-header-subtitle">This is your dashboard {{ Auth::user()->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container">
            <div class="text-center mb-5">
                <div class="display-4 text-primary mb-2">Create your service now.</div>
                <div class="display-4">Anywhere & Anytime.</div>
            </div>
            <!-- Detailed pricing example-->
            <div class="pricing-detailed">
                <div class="row align-items-center no-gutters">
                    <!-- Detailed pricing column 1-->
                    <div class="col-lg-6 z-1 mb-4 mb-lg-0">
                        <div class="card text-center border-0">
                            <div class="card-header bg-transparent justify-content-center py-4">
                                <h5 class="text-primary mb-0">Service</h5>
                            </div>
                            <div class="card-body p-5">
                                <p class="lead">Create any services that you wanted.</p>
                                <div class="mb-5">
                                    <div class="display-3 text-dark">RM</div>
                                    from
                                </div>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center justify-content-center mb-3">
                                        <i class="text-primary mr-2" data-feather="check-circle"></i>
                                        Unlimited amount of services
                                    </li>
                                    <li class="d-flex align-items-center justify-content-center mb-3">
                                        <i class="text-primary mr-2" data-feather="check-circle"></i>
                                        Create services for free
                                    </li>
                                    <li class="d-flex align-items-center justify-content-center mb-3">
                                        <i class="text-primary mr-2" data-feather="check-circle"></i>
                                        Choose your runner and pay them only
                                    </li>
                                    <li class="d-flex align-items-center justify-content-center">
                                        <i class="text-primary mr-2" data-feather="check-circle"></i>
                                        Dedicated customer support
                                    </li>
                                </ul>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-center" href="{{ route('client.services.create') }}">
                                Create your service now
                                <i class="ml-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Detailed pricing column 2-->
                    <div class="col-lg-6">
                        <div class="card bg-dark text-center pricing-detailed-behind">
                            <div class="card-header justify-content-center py-4">
                                <h5 class="mb-0 text-white">Custom</h5>
                            </div>
                            <div class="card-body text-white-50 p-5">Need something more? We offer customized, enterprise level plans for specific implementations. Contact our sales team to learn more about custom licensing!</div>
                            <a class="card-footer bg-gray-800 text-white d-flex align-items-center justify-content-center" href="#!">
                                Contact sales
                                <i class="ml-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-10" />

        <hr class="my-10" />

    </main>

</body>

</html>
@endsection