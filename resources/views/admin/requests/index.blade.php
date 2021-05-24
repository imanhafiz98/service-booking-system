@extends('admin.main')

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
                                Requests
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.requests.index') }}">List of Requests</a></li>
                    
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Requests</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Status</th>              
                                    <th>Action</th>
     
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($reqs as $req)         
                            <tr>
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td>
                                    @if($req->status == 'Requested')
                                        <div class="badge badge-warning badge-pill">Requested</div>

                                    @elseif($req->status == 'Accepted')
                                        <div class="badge badge-primary badge-pill">Accepted</div>

                                    @elseif($req->status == 'Rejected')
                                        <div class="badge badge-danger badge-pill">Rejected</div>

                                    @elseif($req->status == 'Cancelled')
                                        <div class="badge badge-danger badge-pill">Cancelled</div>

                                    @elseif($req->status == 'Completed')
                                        <div class="badge badge-success badge-pill">Completed</div>

                                    @endif

                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.requests.show', $req->id) }}">View</a>
                                    
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