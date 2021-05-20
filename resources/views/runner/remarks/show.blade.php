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
                                Remarks
                            </h1>
                            <div class="page-header-subtitle">Wizard examples for step-by-step form submission content to use as part of an application</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container mt-n10">
            <!-- Wizard card example with navigation-->
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="cardTabContent">
                        <!-- Wizard tab pane item 1-->
                        <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-8">
                                    <h3 class="text-primary">Remarks</h3>
                                    <h5 class="card-title"></h5>
                                    <form>
                                        @csrf

                                        <h5 class="card-title">Request Details</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingName">Request ID</label>
                                                <input class="form-control" name="req_id" id="exampleFormControlInput1" type="text" value="{{ $req->id }}" readonly />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingCCNumber">Price (RM)</label>
                                                <input class="form-control" name="price" id="exampleFormControlInput1" type="text" value="{{ $req->price }}" readonly />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Notes</label>
                                            <input class="form-control" name="notes" id="exampleFormControlInput1" type="text" value="{{ $req->notes }}" readonly />
                                        </div>


                                        <a class="btn btn-primary" href="{{ route('runner.remarks.create', $req->id) }}">Add Remark</a>
                                        <a class="btn btn-primary" href="{{ route('runner.remarks.index', $req->id) }}">View Remark</a>



                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between">


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