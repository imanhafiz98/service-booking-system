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
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('client.services.index') }}">Services</a></li>
                        <li class="breadcrumb-item active">List of Runners</li>
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Runners</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <!-- <th>Request ID</th> -->
                                    <!-- <th>Service ID</th> -->
                                    <th>Service Name</th>
                                    <th>Runner Name</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Payment Method</th>
                                    <!-- <th>Runner ID</th> -->
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <!-- <th>Request ID</th> -->
                                    <!-- <th>Service ID</th> -->
                                    <th>Service Name</th>
                                    <th>Runner Name</th>
                                    <th>Price</th>
                                    <th>Notes</th>
                                    <th>Payment Method</th>
                                    <!-- <th>Runner ID</th> -->
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($reqs as $req)

                                <tr>
                                    <!-- <td>{{ $req->id }}</td> -->
                                    <!-- <td>{{ $req->service_id }}</td> -->
                                    <td>{{ $req->service->name }}</td>
                                    <td>{{ $req->user->name }}</td>
                                    <td>{{ $req->price }}</td>
                                    <td>{{ $req->notes }}</td>
                                    <td>{{ $req->payment->type }}</td>
                                    <!-- <td>{{ $req->user_id }}</td> -->
                                    <td>
                                        <!-- <form method="post" action="{{ route('client.requests.update', $req->id) }}">
                                            @csrf
                                            <button class="btn btn-primary btn-sm" type="submit">Accept 1</button>

                                            <input type="text" name="req_id" value="{{ $req->id }}" hidden>
                                            <input type="text" name="user_id" value="{{ $req->user_id }}" hidden>
                                            <input type="text" name="service_id" value="{{ $req->service_id }}" hidden>
                                           
                                        </form> -->

                                        <a class="btn btn-primary btn-sm" href="{{ route('client.requests.show', $req->id) }}" type="submit">Accept</a>

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