@extends('runner.main')

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
                                            <div class="wizard-step-text-name">Pick Up Address Details</div>
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
                                                <h3 class="text-primary">Pick Up Address Details</h3>
                                                <h5 class="card-title">Enter your account information</h5>
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Address ID</label>
                                                            <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text"  value="{{ $service->addresses->id }}" readonly />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Address Line 1</label>
                                                            <input class="form-control" name="line_1" id="exampleFormControlInput1" type="text"  value="{{ $service->addresses->line_1}}" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Address Line 2</label>
                                                        <input class="form-control" name="line_2" id="exampleFormControlInput1" type="text" value="{{ $service->addresses->line_2 }}" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">City</label>
                                                        <input class="form-control" name="city" id="exampleFormControlInput1" type="text"  value="{{ $service->addresses->city->name }}" readonly />
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">State</label>
                                                            <input class="form-control" name="state" id="exampleFormControlInput1" type="text" value="{{ $service->addresses->city->state->name }}" disabled />
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Postcode</label>
                                                            <input class="form-control" name="postcode" id="exampleFormControlInput1" type="text" value="{{ $service->addresses->postcode }}" disabled />
                                                        </div>
                                                    </div>

                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        <a class="btn btn-primary btn-sm" href="{{ route('runner.services.index') }}">Back</a>
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