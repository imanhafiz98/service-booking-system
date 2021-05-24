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
                        <li class="breadcrumb-item"><a href="{{route('client.services.index')}}">Services</a></li>
                        <li class="breadcrumb-item"><a href="{{route('client.requests.index', $req->service_id)}}">List of Runners</a></li>
                        <li class="breadcrumb-item active">Confirm Choose Runners</li>
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Wizard card example with navigation-->
            <div class="card mb-4">
                <div class="card-header">
                    Confirmation Choose Runners
                </div>
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <h3 class="text-primary">Runner Details</h3>
                            <h5 class="card-title">Please Check The Details</h5>
                            <form>
                                @csrf
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Runner Name</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" value="{{$req->user->name}}" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Price (RM)</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" value="{{$req->price}}" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Notes</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" value="{{$req->notes}}" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Payment Methods</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" value="{{$req->payment->type}}" readonly />
                                </div>

                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">

                                    <a class="btn btn-primary" href="{{ route('client.payments.create', $req->id) }}">Proceed to Payment</a>
                                </div>
                            </form>
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