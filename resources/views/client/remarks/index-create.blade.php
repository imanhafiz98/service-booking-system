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
                                Remarks
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('client.services.index') }}">Services</a></li>
                        <li class="breadcrumb-item active">Remarks</li>
                    </ol>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header border-bottom">
                    <!-- Dashboard card navigation-->
                    <ul class="nav nav-tabs card-header-tabs" id="dashboardNav" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="activities-pill" href="#activities" data-toggle="tab" role="tab" aria-controls="activities" aria-selected="true">List</a></li>
                        <li class="nav-item mr-1"><a class="nav-link" id="overview-pill" href="#overview" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="false">Add</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="dashboardNavContent">
                        <!-- Dashboard Tab Pane 2-->
                        <div class="tab-pane fade show active" id="activities" role="tabpanel" aria-labelledby="activities-pill">

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

                        <!-- Dashboard Tab Pane 1-->
                        <div class="tab-pane fade show" id="overview" role="tabpanel" aria-labelledby="overview-pill">
                            <form method="POST" action="{{ route('client.remarks.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input class="form-control" name="service_id" id="inputUsername" type="text" value="{{ $service }}" hidden />
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Notes</label>
                                    <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="10" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Attachment</label>
                                    <input type="file" class="form-control" name="attachment" />
                                </div>

                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">

                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

    </main>
</body>

</html>


@endsection