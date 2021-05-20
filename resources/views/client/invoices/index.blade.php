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
                                List of Invoices
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
                <div class="card-header">All Invoices</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Invoice Id</th>
                                    <th>Name of Service</th>
                                    <th>Date Generate</th>
                                    <th>Time Generate</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Invoice Id</th>
                                    <th>Name of Service</th>
                                    <th>Date Generate</th>
                                    <th>Time Generate</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($invoices as $invoice)
                                @if (auth()->user()->id == $invoice->req->client_id)
                                <tr>
                                    <td>{{ $invoice->id }}</td>
                                    <td>{{ $invoice->req->service->name }}</td>
                                    <td>{{ $invoice->date_generate }}</td>
                                    <td>{{ $invoice->time_generate }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('client.invoices.show', $invoice->id) }}" type="submit">View</a>
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