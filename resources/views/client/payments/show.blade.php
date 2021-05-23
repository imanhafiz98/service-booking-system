@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="en">

<body class="nav-fixed">

    <main>

        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('client.services.index') }}">Services</a></li>
                        <li class="breadcrumb-item active">Payment Successful</li>
                    </ol>
                </div>
            </div>
        </header>

        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Wizard card example with navigation-->
            <div class="card mb-4">
                <div class="card-header">
                    Payment Successfully
                </div>
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                                
                            <h3 class="text-primary">Payment Successfully</h3>
                            <h5 class="card-title">Your service is ongoing.</h5>

                            <a class="btn btn-primary" href="{{ route('client.services.index', ['status'=>'Ongoing']) }}" type="submit">View Services</a>
                                                     
                        </div>

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