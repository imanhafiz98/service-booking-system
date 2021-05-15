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
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    Show Request
                                </h1>
                                <div class="page-header-subtitle">Dynamic form components to give your users informative and intuitive inputs</div>
                            </div>
                        </div>
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
                                            <form action="{{ route('admin.requests.store') }}" method="POST">
                                            @csrf

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Price</label>
                                                    <input class="form-control"  name = "price" id="exampleFormControlInput1" type="text" value="" required/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Notes</label>
                                                    <textarea class="form-control" name="notes" id="exampleFormControlInput1" rows="10" value="" required></textarea>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label class="small mb-1" for="inputUsername">Status</label>
                                                    <select class="form-control" name="status" id="exampleFormControlSelect1" value="" required>
                                                        <option value="">--Select Status--</option>
                                                        <option value="Requested">Requested</option>
                                                        <option value="Accepted">Accepted</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div> -->

                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputBillingName">Client</label>
                                                        <select class="form-control" name="client_id" id="exampleFormControlSelect1" required>
                                                            <option value="">--Select Client--</option>
                                                                @foreach($users as $user)

                                                                @if($user->role == "client")
                                                                    <option value="{{ $user->id }}">ID.{{ $user->id }} | Name.{{ $user->name }}</option>
                                                                @endif

                                                                 @endforeach
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputBillingName">Service</label>
                                                        <select class="form-control" name="service_id" id="exampleFormControlSelect1" required>
                                                            <option value="">--Select Service--</option>
                                                                @foreach($services as $service)

                                                                    <option value="{{ $service->id }}">ID.{{ $service->id }} | Name.{{ $service->name }}</option>

                                                                 @endforeach
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputBillingName">Runner</label>
                                                        <select class="form-control" name="user_id" id="exampleFormControlSelect1" required>
                                                            <option value="">--Select Runner--</option>
                                                                @foreach($users as $user)

                                                                @if($user->role == "runner")
                                                                    <option value="{{ $user->id }}">ID.{{ $user->id }} | Name.{{ $user->name }}</option>
                                                                @endif

                                                                @endforeach
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary" type="submit">Create</button>
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