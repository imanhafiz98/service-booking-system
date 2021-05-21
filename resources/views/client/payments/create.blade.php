@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="en">

<body class="nav-fixed">

    <main>

        <!-- Main page content-->
        <div class="container mt-5">
            <!-- Custom page header alternative example-->
            <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="mr-4 mb-3 mb-sm-0">
                    <h1 class="mb-0">Payment</h1>
                    <div class="small">
                        <span class="font-weight-500 text-primary">{{ $day }}</span>
                        &middot; {{ $todayDate }} &middot; {{ $todayTime }}
                    </div>
                </div>

            </div>


            <div class="row">
                <!-- Main page content-->
                <div class="container mt-n10">
                    <!-- Wizard card example with navigation-->

                    <!-- Wizard tab pane item 1-->
                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
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

    </main>

</body>

</html>
@endsection