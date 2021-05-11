@extends('runner.main')

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
                                            Submit Request
                                        </h1>
                                        <div class="page-header-subtitle">Wizard examples for step-by-step form submission content to use as part of an application</div>
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
                                                <h3 class="text-primary">Submit Request</h3>
                                                <h5 class="card-title"></h5>
                                                <form method="POST" action="{{ route('runner.requests.store') }}">
                                                @csrf

                                                <h5 class="card-title">Service Details</h5>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Service ID</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->id }}" readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Service Name</label>
                                                            <input class="form-control" name="name" id="exampleFormControlInput1" type="text" value="{{ $service->name }}" disabled />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Description</label>
                                                        <input class="form-control" name="description" id="exampleFormControlInput1" type="text" value="{{ $service->description }}" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Category</label>
                                                        <input class="form-control" name="category" id="exampleFormControlInput1" type="text" value="{{ $service->category->name }}" disabled />
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Date</label>
                                                            <input class="form-control" name="date" id="exampleFormControlInput1" type="date" value="{{ $service->date }}" disabled />
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Time</label>
                                                            <input class="form-control" name="time" id="exampleFormControlInput1" type="time" value="{{ $service->time }}" disabled />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">State</label>
                                                            <input class="form-control" name="region" id="exampleFormControlInput1" type="text" value="{{ $service->location->region }}" disabled />
                                                            </select>
                                                        </div>
                                                        
                                                    </div>

                                                    

                                                    <h5 class="card-title">Client Details</h5>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Client ID</label>
                                                            <input class="form-control" name="client_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->id }}" readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Client Name</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->name }}" disabled />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Client Email</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->email }}" disabled />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Client Phone</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->phone }}" disabled />
                                                        </div>
                                                    </div>
                                                    
                                                    <h5 class="card-title">Please Enter The Details Below</h5>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Price (RM)</label>
                                                        <input class="form-control" name="price" id="exampleFormControlInput1" type="text" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Notes to Client</label>
                                                        <input class="form-control" name="notes" id="exampleFormControlInput1" type="text" required/>
                                                    </div>
        
                                                    
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        
                                                        <button class="btn btn-primary" type="submit" >Submit</button>
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