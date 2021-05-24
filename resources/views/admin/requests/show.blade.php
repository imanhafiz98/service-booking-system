@extends('admin.main')

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
                                Requests
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.requests.index') }}">List of Requests</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.requests.show', $req->id) }}">View Request</a></li>
                    
                    </ol>
                </div>
            </div>
        </header>

            <div class="container mt-n10">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Default Bootstrap Form Controls-->
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">Please Enter All The Details Below</div>
                                <div class="card-body">
                                    <!-- Component Preview-->
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                            <form>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">ID</label>
                                                    <input class="form-control"  name = "id" id="exampleFormControlInput1" type="text" value="{{ $req->id }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Runner Name</label>
                                                    <input class="form-control"  name = "user_id" id="exampleFormControlInput1" type="text" value="{{ $req->user->name }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Price</label>
                                                    <input class="form-control"  name = "price" id="exampleFormControlInput1" type="text" value="{{ $req->price }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Notes</label>
                                                    <input class="form-control"  name = "notes" id="exampleFormControlInput1" type="text" value="{{ $req->notes }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Status</label>
                                                    <input class="form-control"  name = "description" id="exampleFormControlInput1" type="text" value="{{ $req->status }}" readonly/>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label for="exampleFormControlInput1">Client ID</label>
                                                    <input class="form-control"  name = "client_id" id="exampleFormControlInput1" type="text" value="{{ $req->client_id }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Service ID</label>
                                                    <input class="form-control"  name = "service_id" id="exampleFormControlInput1" type="text" value="{{ $req->service_id }}" readonly/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Runner ID</label>
                                                    <input class="form-control"  name = "user_id" id="exampleFormControlInput1" type="text" value="{{ $req->user_id }}" readonly/>
                                                </div> -->

                                                <div class="form-group">
                                                     <a href="{{ route('admin.requests.edit', $req->id) }}" type="submit" class="btn btn-primary">Edit</a>
                                                     <a href="{{ route('admin.requests.index') }}" class="btn btn-primary">Back</a>
                                                </div>

                                             </form>
                                        </div>

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