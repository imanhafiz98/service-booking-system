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
                                            Pick Up Address
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

                                                @foreach( $addresses as $address)
                                                @if( $service->id == $address->service_id && $address->type == "Pick Up")
                                                <h3 class="text-primary">Create Service - Add Deliver Address</h3>
                                                <h5 class="card-title">Enter address details</h5>
                                                <form>
                                                @csrf

                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Service ID</label>
                                                        <input class="form-control" name="service_id" id="inputUsername" type="text" value="{{ $service->id }}" hidden/>
                                                    </div>

                                                    <div class="form-group">
                                                    <label class="small mb-1" for="inputBillingName">Address ID</label>
                                                    <input class="form-control" name="id" id="inputUsername" type="type" value="{{ $address->id }}" readonly/>
                                                    </div>

                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputBillingName">Type of Address</label>
                                                    <input class="form-control" name="line_1" id="inputUsername" type="type"  value="{{ $address->type }}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Address Line 1</label>
                                                        <input class="form-control" name="line_1" id="inputUsername" type="text"  value="{{ $address->line_1 }}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputUsername">Address Line 2</label>
                                                        <input class="form-control" name="line_2" id="inputUsername" type="text" value="{{ $address->line_2 }}" readonly/>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">City</label>
                                                            <input class="form-control" name="city_id" id="inputUsername" type="text" value="{{ $address->city->name }}" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">State</label>
                                                            <input class="form-control" name="" id="inputUsername" type="text" value="{{ $address->city->state->name }}" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="small mb-1" for="inputUsername">Postcode</label>
                                                            <input class="form-control" name="postcode" id="inputUsername" type="text" value="{{ $address->postcode }}" readonly/>
                                                        </div>     
                                                    </div>
                                            
                                                    <hr class="my-4" />
                                                    <div class="d-flex justify-content-between">
                                                        
                                                    <a class="btn btn-primary btn-sm" href="{{ route('client.services.index') }}">Back</a>
                                                    </div>
                                                </form>
                                                
                                                @endif
                                                @endforeach

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