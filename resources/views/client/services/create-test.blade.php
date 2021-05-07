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
                            <div class="card-header border-bottom">
                                <!-- Wizard navigation-->
                                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                                    <!-- Wizard navigation item 1-->
                                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-icon">1</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Service Details</div>
                                            <div class="wizard-step-text-details">Basic details and information</div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 2-->
                                    <a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-toggle="tab" role="tab" aria-controls="wizard2" aria-selected="true">
                                        <div class="wizard-step-icon">2</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Location Details</div>
                                            <div class="wizard-step-text-details">Location information</div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 3-->
                                    <a class="nav-item nav-link" id="wizard3-tab" href="#wizard3" data-toggle="tab" role="tab" aria-controls="wizard3" aria-selected="true">
                                        <div class="wizard-step-icon">3</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Preferences</div>
                                            <div class="wizard-step-text-details">Notification and account options</div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 4-->
                                    <a class="nav-item nav-link" id="wizard4-tab" href="#wizard4" data-toggle="tab" role="tab" aria-controls="wizard4" aria-selected="true">
                                        <div class="wizard-step-icon">4</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Review &amp; Submit</div>
                                            <div class="wizard-step-text-details">Review and submit changes</div>
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
                                                <h3 class="text-primary">Step 1</h3>
                                                <h5 class="card-title">Enter your account information</h5>
                                                <form>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Name of Service</label>
                                                        <input class="form-control" name="service" id="inputUsername" type="text" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Description</label>
                                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Category</label>
                                                        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                                        @foreach($categories as $category)

                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Date</label>
                                                            <input class="form-control"  name = "date" id="exampleFormControlInput1" type="date"/>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Time</label>
                                                            <input class="form-control"  name = "time" id="exampleFormControlInput1" type="time"/>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light disabled" type="button" disabled>Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard tab pane item 2-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 2</h3>
                                                <h5 class="card-title">Enter your billing details</h5>
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">State</label>
                                                            <select class="form-control" name= "location_id" id="exampleFormControlSelect1">
                                                            
                                                                @foreach($locations as $location)

                                                                <option value="{{ $location->id }}">{{ $location->region }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">City</label>
                                                            <select class="form-control" name= "location_id" id="exampleFormControlSelect1">
                                                            
                                                                @foreach($locations as $location)

                                                                <option value="{{ $location->id }}">{{ $location->region }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard tab pane item 3-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel" aria-labelledby="wizard3-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 3</h3>
                                                <h5 class="card-title">Choose when you want to receive email notifications</h5>
                                                <form>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkAccountChanges" type="checkbox" checked />
                                                        <label class="custom-control-label" for="checkAccountChanges">Changes made to your account</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkAccountGroups" type="checkbox" checked />
                                                        <label class="custom-control-label" for="checkAccountGroups">Changes are made to groups you're part of</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkProductUpdates" type="checkbox" checked />
                                                        <label class="custom-control-label" for="checkProductUpdates">Product updates for products you've purchased or starred</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkProductNew" type="checkbox" checked />
                                                        <label class="custom-control-label" for="checkProductNew">Information on new products and services</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkPromotional" type="checkbox" />
                                                        <label class="custom-control-label" for="checkPromotional">Marketing and promotional offers</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="checkSecurity" type="checkbox" checked disabled />
                                                        <label class="custom-control-label" for="checkSecurity">Security alerts</label>
                                                    </div>
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard tab pane item 4-->
                                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel" aria-labelledby="wizard4-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 4</h3>
                                                <h5 class="card-title">Review the following information and submit</h5>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Username:</em></div>
                                                    <div class="col">username</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Name:</em></div>
                                                    <div class="col">Valerie Luna</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Organization Name:</em></div>
                                                    <div class="col">Start Bootstrap</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Location:</em></div>
                                                    <div class="col">San Francisco, CA</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Email Address:</em></div>
                                                    <div class="col">name@example.com</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Phone Number:</em></div>
                                                    <div class="col">555-123-4567</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Birthday:</em></div>
                                                    <div class="col">06/10/1988</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Credit Card Number:</em></div>
                                                    <div class="col">**** **** **** 1111</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Credit Card Expiration:</em></div>
                                                    <div class="col">06/2024</div>
                                                </div>
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