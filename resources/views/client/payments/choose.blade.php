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
                    </ol>
                </div>
            </div>
        </header>

        <div class="container mt-n10">
            <div class="card mb-4">

                <div class="card-header">
                    Payment Method
                </div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (default email)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputNotificationEmail">Default notification email</label>
                            <input class="form-control" id="inputNotificationEmail" type="email" value="name@example.com" disabled />
                        </div>
                        <!-- Form Group (email updates checkboxes)-->
                        <div class="form-group mb-0">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Cash on Delivery</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Credit/Debit Card</label><br>
                        </div>

                        <button class="btn btn-primary" type="submit">Proceed</button>
                    </form>
                </div>

            </div>
        </div>

    </main>

</body>

</html>
@endsection