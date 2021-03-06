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
                                List of Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item active"><a href="{{ route('client.services.index') }}">Services</a></li>
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
                                    <th>Id</th>
                                    <th>Name of Service</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Address Details</th>
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
                                    <th>Address Details</th>
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
                                        <a class="btn btn-primary btn-sm" href="{{ route('client.services.addresses.index', $service->id) }}">View</a>
                                   </td>
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

                                        <div class="row">

                                            @if($service->status == 'Pending')

                                            <a class="btn btn-primary btn-sm ml-2 mr-2" href="{{ route('client.requests.index', $service->id) }}" type="submit">View Runners</a>

                                            <form method="post" action="{{ route('client.services.update', $service->id) }}">
                                                @csrf
                                                <button class="btn btn-danger btn-sm ml-2 mr-2" type="submit">Cancel</button>

                                            </form>

                                            @elseif($service->status == 'Ongoing')

                                            <a class="btn btn-primary btn-sm ml-2 mr-2" href="{{ route('client.remarks.index', $service->id) }}" type="submit">Remarks</a>

                                            @elseif($service->status == 'Cancelled')


                                            @elseif($service->status == 'Completed')


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