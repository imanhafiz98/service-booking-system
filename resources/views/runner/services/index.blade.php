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
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                List of Available Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('runner.services.index') }}">Services</a></li>
                    </ol>
                </div>
            </div>
        </header>

        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Available Services</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name of Service</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Address Details</th>
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
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Address Details</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($services as $service)
                                @if ($service->status == "Pending")
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->category->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->city->state->name }}</td>
                                    <td>{{ $service->city->name }}</td>
                                    <td>{{ $service->date }}</td>
                                    <td>{{ $service->time }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('runner.addresses.index', $service->id) }}">View</a>

                                    </td>
                                    <td>
                                        <div class="badge badge-warning badge-pill"> {{ $service->status }}</div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('runner.services.show', $service->id) }}">Request</a>
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