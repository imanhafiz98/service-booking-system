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
                                List of Requests
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('runner.requests.index') }}">Requests</a></li>

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
                                    <th>Name of Service</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Name of Service</th>
                                    <th>Price (RM)</th>
                                    <th>Notes</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
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
                                    <td>{{ $req->payment->type }}</td>
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

                                        <div class="row">
                                            @if($req->status == 'Requested')

                                            <a class="btn btn-info btn-sm ml-2 mr-2" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>

                                            <form method="post" action="{{ route('runner.requests.update', $req->id) }}">
                                                @csrf

                                                <button class="btn btn-danger btn-sm ml-2 mr-2" type="submit">Cancel</button>

                                            </form>


                                            @elseif($req->status == 'Accepted')
                                            <form method="post" action="{{ route('runner.requests.update', $req->id) }}">
                                                @csrf

                                                <button class="btn btn-primary btn-sm ml-2 mr-2" type="submit">Done</button>

                                            </form>

                                            <a class="btn btn-info btn-sm ml-2 mr-2" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>

                                            <a class="btn btn-warning btn-sm ml-2 mr-2" href="{{ route('runner.remarks.index', $req->service_id) }}">Remarks</a>

                                            @elseif($req->status == 'Cancelled')

                                            <a class="btn btn-info btn-sm ml-2 mr-2" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>


                                            @elseif($req->status == 'Completed')

                                            <a class="btn btn-info btn-sm ml-2 mr-2" href="{{ route('runner.requests.show', $req->id) }}">More Details</a>


                                            @endif

                                        </div>
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