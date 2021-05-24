@extends('admin.main')

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
                                Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.services.index') }}">List of Services</a></li>
                       
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Services</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($services as $service)
                            
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->category->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->city->state->name }}</td>
                                <td>{{ $service->city->name }}</td>
                                <td>
                                   @if($service->status == 'Pending')
                                        <div class="badge badge-warning badge-pill">Pending</div>

                                        @elseif($service->status == 'Ongoing')
                                        <div class="badge badge-primary badge-pill">Ongoing</div>

                                        @elseif($service->status == 'Cancelled')
                                        <div class="badge badge-danger badge-pill">Cancelled</div>

                                        @elseif($service->status == 'Completed')
                                        <div class="badge badge-success badge-pill">Completed</div>

                                    @endif
                                </td>
                                <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.services.show', $service->id) }}">View</a>

                                </td>
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