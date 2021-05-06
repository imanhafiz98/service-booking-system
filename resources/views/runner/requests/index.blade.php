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
                                List of Requests
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
                                    <th>Client ID</th>
                                    <th>Service ID</th>
                                    <th>User ID</th>
                                    <th>Action</th>
     
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Price (RM)</th>
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
                            @if (auth()->user()->id == $req->user_id)
                            <tr>
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td>
                                     @if($req->status == 'Requested')
                                        <div class="badge badge-warning badge-pill">Requested</div>

                                      @elseif($req->status == 'Accepted')
                                        <div class="badge badge-primary badge-pill">Accepted</div>

                                      @elseif($req->status == 'Cancelled')
                                        <div class="badge badge-danger badge-pill">Cancelled</div>

                                      @elseif($req->status == 'Completed')
                                        <div class="badge badge-success badge-pill">Completed</div>

                                  @endif
                                </td>
                                <td>{{ $req->client_id }}</td>
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->user_id }}</td>
                                <td>

                                    @if($req->status == 'Requested')     
                                    <form method="post" action="{{ route('runner.requests.update', $req->id) }}">
                                         @csrf
                                            <button class="btn btn-danger btn-sm" type="submit">Cancel</button>
                                    </form>

                                    @elseif($req->status == 'Accepted')
                                    <button class="btn btn-primary btn-sm" type="button">Done</button>

                                     @elseif($req->status == 'Cancelled')
                                       

                                    @elseif($req->status == 'Completed')
                                        

                                    @endif
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