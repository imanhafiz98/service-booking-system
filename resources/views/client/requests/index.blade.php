@extends('client.main')

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
                                List of Runners
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
                <div class="card-header">All Services</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Client ID</th>
                                    <th>Service ID</th>
                                    <th>User ID</th>
                                    <th>Action</th>
     
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Client ID</th>
                                    <th>Service ID</th>
                                    <th>User ID</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($reqs as $req)
                            
                            <tr>
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td><div class="badge badge-warning badge-pill">{{ $req->status }}</div></td>
                                <td>{{ $req->client_id }}</td>
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->user_id }}</td>
                                <td>
                                    <form method="post" action="{{ route('client.requests.update', $req) }}">
                                    @csrf
                                        <button class="btn btn-primary btn-sm" type="submit">Choose</button>
                                    </form>      
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