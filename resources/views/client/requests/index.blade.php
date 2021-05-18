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
                                    <th>Request ID</th>
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
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->service_id }}</td>
                                <td>{{ $req->service->name }}</td>
                                <td>{{ $req->price }}</td>
                                <td>{{ $req->notes }}</td>
                                <td>{{ $req->user_id }}</td>
                                <td>{{ $req->user->name }}</td>
                                <td>
                                    <form method="post" action="{{ route('client.requests.update', $req) }}">
                                    @csrf
                                        <!-- <button class="btn btn-primary btn-sm" type="submit">Accept</button> -->
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#staticBackdrop">Accept</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Confirm Accept Runner</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">Once you accept the runner, you cannot cancel service or change runner.</div>
                                                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Confirm</button></div>
                                                    </div>
                                                </div>
                                            </div>
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