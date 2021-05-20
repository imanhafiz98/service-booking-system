@extends('admin.main')

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
                            <div class="page-header-subtitle"></div>
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
                            <div class="small text-muted">Total Users</div>
                            <div class="h3">{{ $totalAllUsers }}</div>
                            <a class="text-arrow-icon small" href="">
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
                            <div class="h3"></div>
                            <a class="text-arrow-icon small text-secondary" href="">
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
                            <div class="h3 d-flex align-items-center">}</div>
                            <a class="text-arrow-icon small text-success" href="">
                                View all
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <h4 class="mb-0 mt-5">Other Topics</h4>
                <hr class="mt-2 mb-4" />
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="mr-2" data-feather="edit-2"></i>
                                    Brand Guidelines
                                </h5>
                                <p class="card-text">Information about what you can and can't do when using our logos and other assets</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">3 articles in this category</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 2-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-yellow mb-2">
                                    <i class="mr-2" data-feather="credit-card"></i>
                                    Billing Information
                                </h5>
                                <p class="card-text">Troubleshoot billing issues, subscriptions, and updating payment information</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">2 articles in this category</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 3-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-teal mb-2">
                                    <i class="mr-2" data-feather="code"></i>
                                    API
                                </h5>
                                <p class="card-text">Documentation and integration instructions for our API</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">15 articles in this category</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 4-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-orange mb-2">
                                    <i class="mr-2" data-feather="layers"></i>
                                    Integration
                                </h5>
                                <p class="card-text">App integration policies and related content on connecting to our database</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">5 articles in this category</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 5-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-secondary mb-2">
                                    <i class="mr-2" data-feather="lock"></i>
                                    Privacy &amp; Content
                                </h5>
                                <p class="card-text">Our privacy policy and information on how we track and utilize user data</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">2 articles in this category</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 6-->
                        <a class="card lift lift-sm h-100" href="knowledge-base-category.html">
                            <div class="card-body py-5">
                                <h5 class="card-title text-red mb-2">
                                    <i class="mr-2" data-feather="map"></i>
                                    Miscellaneous
                                </h5>
                                <p class="card-text">Other troubleshooting, help, and support articles related to our products and services</p>
                            </div>
                            <div class="card-footer">
                                <div class="small text-muted">2 articles in this category</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
@endsection