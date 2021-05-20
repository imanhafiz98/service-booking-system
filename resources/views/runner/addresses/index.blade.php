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
                                <div class="page-header-icon"><i data-feather="filter"></i></div>
                                List of Address
                            </h1>
                            <div class="page-header-subtitle">An extended version of the DataTables library, customized for SB Admin Pro</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Address</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Notes</th>
                                    <th>Address Line 1</th>
                                    <th>Address Line 2</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Postcode</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Notes</th>
                                    <th>Address Line 1</th>
                                    <th>Address Line 2</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Postcode</th>                                   
                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($addresses as $address)
                            
                            <tr>
                                <td>{{ $address->notes }}</td>
                                <td>{{ $address->line_1 }}</td>
                                <td>{{ $address->line_2 }}</td>
                                <td>{{ $address->city->state->name }}</td>
                                <td>{{ $address->city->name }}</td>
                                <td>{{ $address->postcode }}</td>
                            </tr>
                           
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>



@endsection