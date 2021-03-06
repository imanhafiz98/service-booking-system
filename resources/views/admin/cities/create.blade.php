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
                                Add City
                            </h1>
                            <div class="page-header-subtitle"></div>
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
                                        <form action="{{ route('admin.cities.store') }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label class="small mb-1" for="state">Choose a State</label>
                                                <select name="state_id" id="state" class="form-control" required>
                                                    <option value="">--Select State--</option>
                                                    @foreach ($states as $state)
                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Name of City</label>
                                                <input class="form-control" name="name" id="exampleFormControlInput1" type="text" required />
                                            </div>

                                            <button class="btn btn-primary" type="submit">Add</button>
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