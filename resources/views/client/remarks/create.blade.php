@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')

<html lang="en">

<body class="nav-fixed">

    <main>

        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="arrow-right-circle"></i></div>
                                Add Remarks
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Wizard card example with navigation-->
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="cardTabContent">
                        <!-- Wizard tab pane item 1-->
                        <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-8">
                                    <h3 class="text-primary">Add Remark</h3>
                                    <h5 class="card-title">Enter remark details</h5>
                                    <form method="POST" action="{{ route('client.remarks.store', $service->id) }}">
                                        @csrf

                                        <div class="form-group">
                                            <input class="form-control" name="service_id" id="inputUsername" type="text" value="{{ $service->id }}" hidden />
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
                </div>
            </div>
        </div>
    </main>

</body>

</html>
@endsection