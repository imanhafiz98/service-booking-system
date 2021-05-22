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
                                <div class="page-header-icon"><i data-feather="arrow-right-circle"></i></div>
                                Create Service
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
                                    <h3 class="text-primary">Create Service</h3>
                                    <h5 class="card-title">Enter service details</h5>
                                    <form method="POST" action="{{ route('client.services.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Name of Service</label>
                                            <input class="form-control" name="name" id="inputUsername" type="text" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Description</label>
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Category</label>
                                            <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                                                <option value="">--Select Category--</option>
                                                @foreach($categories as $category)

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingName">Date</label>
                                                <input class="form-control" name="date" id="exampleFormControlInput1" type="date" required />
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingCCNumber">Time</label>
                                                <input class="form-control" name="time" id="exampleFormControlInput1" type="time" required />
                                            </div>
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
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingCCNumber">State</label>
                                                <select class="form-control" id="exampleFormControlSelect1">

                                                    @foreach($states as $state)

                                                    <option value="{{ $city->state->id }}">{{ $state->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between">

                                            <button class="btn btn-primary" type="submit">Create</button>
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