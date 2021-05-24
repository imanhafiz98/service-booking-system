@extends('admin.main')

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
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                Services
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item "><a href="{{ route('admin.services.index') }}">List of Services</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.services.show', $service->id) }}">View Service</a></li>
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
                                                <input class="form-control" name="id" id="exampleFormControlInput1" type="text" value="{{ $service->id }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Name</label>
                                                <input class="form-control" name="name" id="exampleFormControlInput1" type="text" value="{{ $service->name }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Category</label>
                                                <input class="form-control" name="category" id="exampleFormControlInput1" type="text" value="{{ $service->category->name }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Description</label>
                                                <input class="form-control" name="description" id="exampleFormControlInput1" type="text" value="{{ $service->description }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">City</label>
                                                <input class="form-control" name="city" id="exampleFormControlInput1" type="text" value="{{ $service->city->name }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Date</label>
                                                <input class="form-control" name="date" id="exampleFormControlInput1" type="date" value="{{ $service->date }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Time</label>
                                                <input class="form-control" name="time" id="exampleFormControlInput1" type="time" value="{{ $service->time }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Client ID</label>
                                                <input class="form-control" name="user_id" id="exampleFormControlInput1" type="text" value="{{ $service->user_id }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Status</label>
                                                <input class="form-control" name="status" id="exampleFormControlInput1" type="text" value="{{ $service->status }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <a href="{{ route('admin.services.edit', $service->id) }}" type="submit" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.services.index') }}" class="btn btn-primary">Back</a>
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