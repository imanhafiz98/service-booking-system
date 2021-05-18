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
                                List of Services
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
                                    <th>Id</th>
                                    <th>Name of Service</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Time</th> 
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
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($services as $service)
                                @if (auth()->user()->id == $service->user->id)
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

                                        @if($service->status == 'Pending')

                                        <a class="btn btn-primary btn-sm" href="{{ route('client.requests.index', $service->id) }}" type="submit">View Runners</a>

                                        <form method="post" action="{{ route('client.services.update', $service->id) }}">
                                            @csrf
                                            <!-- <button class="btn btn-danger btn-sm" type="submit">Cancel</button> -->
                                            <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#staticBackdrop">Cancel</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Confirm Cancel Service</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">Your request service will be cancel.</div>
                                                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Confirm</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                        @elseif($service->status == 'Ongoing')

                                        <a class="btn btn-primary btn-sm" href="" type="submit">Remarks</a>

                                        @elseif($service->status == 'Cancelled')


                                        @elseif($service->status == 'Completed')


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