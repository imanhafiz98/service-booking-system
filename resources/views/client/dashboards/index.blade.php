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
                                        <div class="page-header-subtitle">This is your dashboard</div>
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
                                        <div class="card-header bg-transparent justify-content-center py-4"><h5 class="text-primary mb-0">Service</h5></div>
                                        <div class="card-body p-5">
                                            <p class="lead">Create any services that you wanted.</p>
                                            <div class="mb-5">
                                                <div class="display-3 text-dark">RM1</div>
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
                                        <div class="card-header justify-content-center py-4"><h5 class="mb-0 text-white">Custom</h5></div>
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
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="display-4 text-primary mb-2">Choose a pricing plan</div>
                            <div class="display-4">Pick what's right for you</div>
                        </div>
                        <!-- Pricing columns example-->
                        <div class="pricing-columns">
                            <div class="row justify-content-center">
                                <!-- Pricing column 1-->
                                <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                                    <div class="card h-100">
                                        <div class="card-header bg-transparent">
                                            <span class="badge badge-primary-soft text-primary badge-pill py-2 px-3 mb-2">Individual</span>
                                            <div class="pricing-columns-price">
                                                $9
                                                <span>/month</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    1 user account
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Remove ads
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Premium assets
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Saved projects
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="card-footer d-flex align-items-center justify-content-between text-decoration-none bg-primary-soft" href="#!">
                                            Get started!
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Pricing column 2-->
                                <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                                    <div class="card h-100">
                                        <div class="card-header bg-transparent">
                                            <span class="badge badge-secondary-soft text-secondary badge-pill py-2 px-3 mb-2">Team</span>
                                            <div class="pricing-columns-price">
                                                $39
                                                <span>/month</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Up to 5 user accounts
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Remove ads
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Premium assets
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Saved projects
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Team collaboration tools
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="card-footer d-flex align-items-center justify-content-between text-secondary bg-secondary-soft text-decoration-none" href="#!">
                                            Get started!
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Pricing column 3-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-table">
                                        <div class="card h-100">
                                            <div class="card-header bg-transparent">
                                                <span class="badge badge-success-soft text-success badge-pill py-2 px-3 mb-2">Organization</span>
                                                <div class="pricing-columns-price">
                                                    $249
                                                    <span>/month</span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Up to 50 user accounts
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Remove ads
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Premium assets
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Saved projects
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Team collaboration tools
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Create teams &amp; groups
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Priority customer support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="card-footer d-flex align-items-center justify-content-between text-success bg-success-soft text-decoration-none" href="#!">
                                                Get started!
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-10" />
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="display-4 text-primary mb-2">Compare our pricing plans</div>
                            <div class="display-4">Pick what's right for you</div>
                        </div>
                        <!-- Pricing table example-->
                        <div class="card mb-5">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th class="py-4" scope="col"></th>
                                                <th class="py-4" scope="col">Individual</th>
                                                <th class="py-4" scope="col">Team</th>
                                                <th class="py-4" scope="col">Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Price per month</th>
                                                <td>$9</td>
                                                <td>$39</td>
                                                <td>$249</td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">User accounts</th>
                                                <td>1</td>
                                                <td>Up to 5</td>
                                                <td>Up to 50</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ad free</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Premium assets</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Saved projects</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Team collaboration tools</th>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Create teams &amp; groups</th>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Customer support</th>
                                                <td>Email only</td>
                                                <td>Email &amp; phone</td>
                                                <td>Dedicated account manager</td>
                                            </tr>
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