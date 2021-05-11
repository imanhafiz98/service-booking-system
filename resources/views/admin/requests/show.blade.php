@extends('admin.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')


<html lang="en">

<body>

    <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="arrow-right-circle"></i></div>
                                            More Details
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
                            <div class="card-header border-bottom">
                                <!-- Wizard navigation-->
                                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                                    <!-- Wizard navigation item 1-->
                                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-icon">1</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Service Details</div>
                                            <div class="wizard-step-text-details"></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 2-->
                                    <a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-toggle="tab" role="tab" aria-controls="wizard2" aria-selected="true">
                                        <div class="wizard-step-icon">2</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Client Details</div>
                                            <div class="wizard-step-text-details"></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 3-->
                                    <a class="nav-item nav-link" id="wizard3-tab" href="#wizard3" data-toggle="tab" role="tab" aria-controls="wizard3" aria-selected="true">
                                        <div class="wizard-step-icon">3</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Request Details</div>
                                            <div class="wizard-step-text-details"></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 4-->
                                    <a class="nav-item nav-link" id="wizard4-tab" href="#wizard4" data-toggle="tab" role="tab" aria-controls="wizard4" aria-selected="true">
                                        <div class="wizard-step-icon">4</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Payment Details &amp; Submit</div>
                                            <div class="wizard-step-text-details"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Service Details</h3>
                                                <h5 class="card-title">Enter your account information</h5>
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Service ID</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text"  value="{{ $req->id }}"readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Service Name</label>
                                                            <input class="form-control" name="name" id="exampleFormControlInput1" type="text"  value="{{ $req->service->name }}" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Description</label>
                                                        <input class="form-control" name="description" id="exampleFormControlInput1" type="text" value="{{ $req->service->description }}" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Category</label>
                                                        <input class="form-control" name="category" id="exampleFormControlInput1" type="text"  value="{{ $req->service->category->name }}" readonly />
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Date</label>
                                                            <input class="form-control" name="date" id="exampleFormControlInput1" type="date"  value="{{ $req->service->date }}"readonly />
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Time</label>
                                                            <input class="form-control" name="time" id="exampleFormControlInput1" type="time"  value="{{ $req->service->time }}" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">State</label>
                                                            <input class="form-control" name="region" id="exampleFormControlInput1" type="text" value="{{ $req->service->location->region }}" readonly />
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Wizard tab pane item 2-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Client Details</h3>
                                                <h5 class="card-title">Enter your billing details</h5>
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Client ID</label>
                                                            <input class="form-control" name="client_id" id="exampleFormControlInput1" type="text" value="{{ $req->client_id }}" readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Client Name</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $req->service->user->name }}" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Client Email</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text"  value="{{ $req->service->user->email }}" readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Client Phone</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $req->service->user->phone }}" readonly />
                                                        </div>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Wizard tab pane item 3-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel" aria-labelledby="wizard3-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Request Details</h3>
                                                <h5 class="card-title">Choose when you want to receive email notifications</h5>
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Price (RM)</label>
                                                        <input class="form-control" name="price" id="exampleFormControlInput1" type="text" value="{{ $req->price }}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Notes to Client</label>
                                                        <input class="form-control" name="notes" id="exampleFormControlInput1" type="text" value="{{ $req->notes }}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Status</label>
                                                        <input class="form-control" name="status" id="exampleFormControlInput1" type="text" value="{{ $req->status }}" readonly/>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <!-- Wizard tab pane item 4-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel" aria-labelledby="wizard4-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Payment Details</h3>
                                                <h5 class="card-title">Review the following information and submit</h5>
                                                
        
                                                <hr class="my-4" />
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-light" type="button">Previous</button>
                                                    <button class="btn btn-primary" type="button">Submit</button>
                                                </div>
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