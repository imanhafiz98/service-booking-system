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
                                Generate Invoice
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
                <div class="card-header">All Completed Services</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name of Service</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name of Service</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($reqs as $req)
                            @if (auth()->user()->id == $req->user_id)
                            <tr>
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->service->name }}</td>
                                <td>{{ $req->service->category->name }}</td>
                                <td>{{ $req->service->description }}</td>
                                <td>{{ $req->service->date }}</td>
                                <td>{{ $req->service->time }}</td>
                                <td>{{ $req->service->city->state->name }}</td>
                                <td>{{ $req->service->city->name }}</td>
                                <td>RM{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td>
                                    <div class="badge badge-success badge-pill">Completed</div> 
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('runner.invoices.store', $req->id) }}" type="submit">Generate Invoice</a>    
                                </td>
                            </tr>
                            @endif
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