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
                                Remarks
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
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    
                                    <th>Service ID</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Runner ID</th>
                                    <th>Runner Name</th>
                                    <th>Action</th>
     
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    
                                    <th>Service ID</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Runner ID</th>
                                    <th>Runner Name</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($reqs as $req)
                            
                            <tr>
                               
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->service->name }}</td>
                                <td>{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td>{{ $req->user_id }}</td>
                                <td>{{ $req->user->name }}</td>
                                <td>
                    
                                <a class="btn btn-primary" href="{{ route('client.remarks.create', $req->id) }}">Add Remark</a>
                                <a class="btn btn-primary" href="{{ route('client.remarks.index', $req->id) }}">View Remark</a>

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