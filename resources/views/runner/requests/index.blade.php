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
                                    <th>Name of Service</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <!-- <th>Client ID</th>
                                    <th>Service ID</th>
                                    <th>User ID</th> -->
                                    <th>Action</th>
     
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Name of Service</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <!-- <th>Client ID</th>
                                    <th>Service ID</th>
                                    <th>User ID</th> -->
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach($reqs as $req)
                            @if (auth()->user()->id == $req->user_id)
                            <tr>
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->service->name }}</td>
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
                                <!-- <td>{{ $req->client_id }}</td>
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->user_id }}</td> -->
                                <td>

                                    @if($req->status == 'Requested')
                                    <form method="post" action="{{ route('runner.requests.update', $req->id) }}">
                                         @csrf
                                            <!-- <button class="btn btn-danger btn-sm" type="submit">Cancel</button> -->

                                            <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#staticBackdrop">Cancel</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Confirm Cancel Request Service</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">Your request service will be cancelled.</div>
                                                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Confirm</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>

                                    <a class="btn btn-primary btn-sm" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>
                                    

                                    @elseif($req->status == 'Accepted')
                                    <form method="post" action="{{ route('runner.requests.update', $req->id) }}">
                                         @csrf
                                         <!-- <button class="btn btn-primary btn-sm" type="submit">Done</button> -->

                                         <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#staticBackdrop">Done</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Confirm Done Service</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">Your service has been done.</div>
                                                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Confirm</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>

                                    <a class="btn btn-primary btn-sm" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>
                                    

                                     @elseif($req->status == 'Cancelled')

                                     <a class="btn btn-primary btn-sm" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>
                                       

                                    @elseif($req->status == 'Completed')

                                    <a class="btn btn-primary btn-sm" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>
                                        

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