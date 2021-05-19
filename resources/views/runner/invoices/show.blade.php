@extends('runner.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')


<html lang="en">

<body>

    <main>
        <!-- Main page content-->
        <div class="container mt-4">
                        <!-- Invoice-->
                        <div class="card invoice">
                            <div class="card-header p-4 p-md-5 border-bottom-0 bg-gradient-primary-to-secondary text-white-50">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-lg-auto mb-5 mb-lg-0 text-center text-lg-left">
                                        
                                        <div class="h2 text-white mb-0">{{ $invoice->req->service->name }}</div>
                                        {{ $invoice->req->service->status }}
                                    </div>
                                    <div class="col-12 col-lg-auto text-center text-lg-right">
                                        <!-- Invoice details-->
                                        <div class="h3 text-white">Invoice</div>
                                        # {{ $invoice->id }}
                                        <br />
                                        Date Generated: {{ $invoice->date_generate }}
                                        <br />
                                        Time Generated: {{ $invoice->time_generate }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4 p-md-5">
                                <!-- Invoice table-->
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead class="border-bottom">
                                            <tr class="small text-uppercase text-muted">
                                                <th class="text-left" scope="col">Service ID</th>
                                                <th class="text-left" scope="col">Name of Service</th>
                                                <th class="text-left" scope="col">Category</th>
                                                <th scope="col">Description</th>
                                                <th class="text-right" scope="col">Price</th>
                                                <th class="text-right" scope="col">Date</th>
                                                <th class="text-right" scope="col">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Invoice item 1-->
                                            <tr class="border-bottom">
                                                <td class="text-left font-weight-bold">{{ $invoice->req->service->id }}</td>
                                                <td class="text-left font-weight-bold">{{ $invoice->req->service->name }}</td>
                                                <td class="text-left font-weight-bold">{{ $invoice->req->service->category->name }}</td>
                                                <td>
                                                    <div class="font-weight-bold">{{ $invoice->req->service->description }}</div>
                                                    <!-- <div class="small text-muted d-none d-md-block">A professional UI toolkit for designing admin dashboards and web applications</div> -->
                                                </td>

                                                <td class="text-left font-weight-bold">RM{{ $invoice->req->price }}</td>
                                                <td class="text-right font-weight-bold">{{ $invoice->req->service->date }}</td>
                                                <td class="text-right font-weight-bold">{{ $invoice->req->service->time }}</td>
                                            </tr>
                                            
                        
                                            <!-- Invoice total-->
                                            <tr>
                                                <td class="text-right pb-0" colspan="6"><div class="text-uppercase small font-weight-700 text-muted">Total Amount Due:</div></td>
                                                <td class="text-right pb-0"><div class="h5 mb-0 font-weight-700 text-green">RM{{ $invoice->req->price }}</div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer p-4 p-lg-5 border-top-0">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <!-- Invoice - sent to info-->
                                        <div class="small text-muted text-uppercase font-weight-700 mb-2">Runner Details</div>
                                        <div class="h6 mb-1">{{ Auth::user()->name }}</div>
                                        <div class="small">{{ Auth::user()->email }}</div>
                                        <div class="small">{{ Auth::user()->phone }}</div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <!-- Invoice - sent from info-->
                                        <div class="small text-muted text-uppercase font-weight-700 mb-2">Client Details</div>
                                        <div class="h6 mb-0">{{ $invoice->req->service->user->name }}</div>
                                        <div class="small">{{ $invoice->req->service->user->email }}</div>
                                        <div class="small">{{ $invoice->req->service->user->phone }}</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Invoice - additional notes-->
                                        <div class="small text-muted text-uppercase font-weight-700 mb-2">Note</div>
                                        <div class="small mb-0">Payment is due 15 days after receipt of this invoice. Please make checks or money orders out to Company Name, and include the invoice number in the memo. We appreciate your business, and hope to be working with you again very soon!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
</body>

</html>


@endsection