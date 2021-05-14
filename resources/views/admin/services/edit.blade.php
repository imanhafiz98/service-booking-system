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
                                <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                Edit Service
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
                                        <form action="{{ route('admin.services.update', $service) }}" method="post">
                                            @csrf


                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Service ID</label>
                                                <input class="form-control" name="id" id="exampleFormControlInput1" type="text" value="{{ $service->id }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Name</label>
                                                <input class="form-control" name="name" id="exampleFormControlInput1" type="text" value="{{ $service->name }}" required />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputUsername">Category</label>
                                                <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                                                    <option value="{{ $service->category->id }}">{{ $service->category->name }}</option>
                                                    @foreach($categories as $category)

                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Description</label>
                                                <input class="form-control" name="description" id="exampleFormControlInput1" type="text" value="{{ $service->description }}" required />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputBillingName">City</label>
                                                <select class="form-control" name="city_id" id="exampleFormControlSelect1" required>
                                                    <option value="{{ $service->city->id }}">{{ $service->city->name }}</option>
                                                    @foreach($cities as $city)

                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Date</label>
                                                <input class="form-control" name="date" id="exampleFormControlInput1" type="date" value="{{ $service->date }}" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Time</label>
                                                <input class="form-control" name="time" id="exampleFormControlInput1" type="time" value="{{ $service->time }}" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Client ID</label>
                                                <input class="form-control" name="user_id" id="exampleFormControlInput1" type="text" value="{{ $service->user_id }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputBillingName">Status</label>
                                                <select class="form-control" name="status" id="exampleFormControlSelect1" required>
                                                    <option value="{{ $service->status }}">{{ $service->status }}</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Ongoing">Ongoing</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Update</button>
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