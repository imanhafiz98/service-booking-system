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
                                List of Remarks
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('runner.requests.index') }}">Requests</a></li>
                        <li class="breadcrumb-item active">Remarks</li>
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Remarks <a class="btn btn-primary" href="{{ route('runner.remarks.create', $service) }}">Add Remark</a></div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>Service Name</th>
                                    <th>Notes</th>
                                    <th>Attachment</th>
                                    <th>Date Added</th>
                                    <th>Time Added</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>From</th>
                                    <th>Service Name</th>
                                    <th>Notes</th>
                                    <th>Attachment</th>
                                    <th>Date Added</th>
                                    <th>Time Added</th>

                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($remarks as $remark)

                                <tr>
                                    <td>{{ $remark->user_name }}</td>
                                    <td>{{ $remark->service->name }}</td>
                                    <td>{{ $remark->notes }}</td>
                                    <td>
                                        @if ( $remark->attachment != null)
                                        <a href="{{ env('APP_URL')}}/storage/{{ $remark->attachment }}" target="_blank">Open Attachment</a>
                                        @else
                                        No Attachment
                                        @endif
                                    </td>
                                    <td>{{ $remark->date_generate }}</td>
                                    <td>{{ $remark->time_generate }}</td>

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