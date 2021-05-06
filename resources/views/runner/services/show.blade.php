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
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    Submit Request
                                </h1>
                                <div class="page-header-subtitle">Dynamic form components to give your users informative and intuitive inputs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container mt-n10">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Default Bootstrap Form Controls -->
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">Please Enter All The Details Below</div>
                                <div class="card-body">
                                    <!-- Component Preview -->
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                        
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Name of Service</label>
                                                    <input class="form-control" name="name" id="exampleFormControlInput1" type="text" value="{{ $service->name }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Category</label>
                                                    <input class="form-control" name="category" id="exampleFormControlInput1" type="text" value="{{ $service->category->name }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Description</label>
                                                    <input class="form-control" name="description" id="exampleFormControlInput1" type="text" value="{{ $service->description }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Date</label>
                                                    <input class="form-control" name="date" id="exampleFormControlInput1" type="date" value="{{ $service->date }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Time</label>
                                                    <input class="form-control" name="time" id="exampleFormControlInput1" type="time" value="{{ $service->time }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Location</label>
                                                    <input class="form-control" name="region" id="exampleFormControlInput1" type="text" value="{{ $service->location->region }}" disabled/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Client Name</label>
                                                    <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->name }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Client Email</label>
                                                    <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->email }}" disabled/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Client Phone</label>
                                                    <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->phone }}" disabled/>
                                                </div> 

                                            <form method="POST" action="{{ route('runner.requests.store') }}">
                                                 @csrf 

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Price (RM)</label>
                                                    <input class="form-control" name="price" id="exampleFormControlInput1" type="text" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Notes</label>
                                                    <input class="form-control" name="notes" id="exampleFormControlInput1"  type="text"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Service Id</label>
                                                    <input class="form-control" name="service_id" id="exampleFormControlInput1" type="text" value="{{ $service->id }}" readonly/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Client Id</label>
                                                    <input class="form-control" name="client_id" id="exampleFormControlInput1" type="text" value="{{ $service->user->id }}" readonly/>
                                                </div>

                                                <button class="btn btn-primary" type="submit">Submit</button>
                                             </form>
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