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
                                Payment Method
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('client.services.index') }}">Services</a></li>
                        <li class="breadcrumb-item active">Payment Method</li>
                        <li class="breadcrumb-item active">Complete Payment</li>
                    </ol>
                </div>
            </div>
        </header>
        


            
                <!-- Main page content-->
                <div class="container mt-n10">
                    <!-- Wizard card example with navigation-->
                    <div class="card mb-4">
                    <div class="card-header">
                    Complete Payment
                    </div>
                    <div class="card-body">
                    
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">Payment Information</h3>
                                <h5 class="card-title">Enter payment details</h5>
                                <form method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputUsername">NAME ON CARD</label>
                                        <input class="form-control" name="name" id="inputUsername" type="text" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputUsername">CARD NUMBER</label>
                                        <input class="form-control" name="name" id="inputUsername" type="text" placeholder="card number" data-mask="0000 0000 0000 0000" required />
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1" for="inputUsername">EXPIRY DATE</label>
                                            <input class="form-control" name="month" id="exampleFormControlInput1" type="text" placeholder="MM / YY" data-mask="00 / 00" required />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1" for="inputUsername">CVC</label>
                                            <input class="form-control" name="month" id="exampleFormControlInput1" type="text" placeholder="3 or 4 digit number" data-mask="000" required />
                                        </div>

                                    </div>


                                    <hr class="my-4" />
                                    <div class="d-flex justify-content-between">

                                        <button class="btn btn-primary" type="submit">Pay</button>
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