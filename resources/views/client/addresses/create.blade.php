@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="nav-fixed">

    <main>

        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="arrow-right-circle"></i></div>
                                Add Address
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Wizard card example with navigation-->
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="cardTabContent">
                        <!-- Wizard tab pane item 1-->
                        <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-8">
                                    <h3 class="text-primary">Add Address</h3>
                                    <h5 class="card-title">Enter address details</h5>
                                    <form method="POST" action="{{ route('client.addresses.store', Auth::user()->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 1</label>
                                            <input class="form-control" name="line_1" id="inputUsername" type="text" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 2 (Optional)</label>
                                            <input class="form-control" name="line_2" id="inputUsername" type="text" required />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingName">City</label>
                                                <select class="form-control" name="city_id" id="exampleFormControlSelect1" required>
                                                    <option value="">--Select City--</option>
                                                    @foreach($cities as $city)

                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingCCNumber">State</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="">--Select State--</option>
                                                    @foreach($states as $state)

                                                    <option value="{{ $city->state->id }}">{{ $state->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingName">Postcode</label>
                                                <input class="form-control" name="postcode" id="exampleFormControlInput1" type="text" required />
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Notes</label><button class="btn btn-primary btn-xs btn-icon" ype="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="For example: Pick Up Address, Deliver Address"><i class="fas fa-flag"></i></button>
                                            <input class="form-control" name="notes" id="inputUsername" type="text" required />
                                        </div>

                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between">

                                            <button class="btn btn-primary" type="submit">Add</button>
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