@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <main>

        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Account Settings - Address
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main page content-->
        <div class="container mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link" href="{{ route('client.profiles.show', auth()->user()->id) }}">Profile</a>
                <a class="nav-link" href="{{ route('client.passwords.edit', auth()->user()->id) }}">Password</a>
                <a class="nav-link active ml-0" href="{{ route('client.addresses.index.test') }}">Address</a>

            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">

                <div class="col-xxl-8">
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
                                    <div class="datatable table-responsive">
                                        <table class="table table-bordered table-hover" id="dataTableActivity" width="100%" cellspacing="0">

                                            <thead>
                                                <tr>
                                                    <th>Notes</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach($addresses as $address)
                                                <tr>
                                                    <td>{{ $address->notes }}</td>
                                                    <td>{{ $address->line_1 }}, {{ $address->line_2 }},
                                                        {{ $address->city->name }}, {{ $address->city->state->name }},
                                                        {{ $address->postcode }}
                                                    </td>
                                                    <td>

                                                        <div class="row">

                                                            <a class="btn btn-primary btn-sm ml-2 mr-2" href="{{ route('client.addresses.edit', $address->id) }}">Edit</a>

                                                            <form action="{{ route('client.addresses.destroy', $address->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                            </form>

                                                        </div>

                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Dashboard Tab Pane 1-->
                                <div class="tab-pane fade show" id="overview" role="tabpanel" aria-labelledby="overview-pill">
                                    <form method="POST" action="{{ route('client.addresses.store', Auth::user()->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 1</label>
                                            <input class="form-control" name="line_1" id="inputUsername" type="text" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 2
                                                (Optional)</label>
                                            <input class="form-control" name="line_2" id="inputUsername" type="text" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="state">State :</label>
                                            <select name="state" id="state" class="form-control" required>
                                                <option value="">--Select State--</option>
                                                @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="city">City :</label>
                                            <select name="city_id" id="city" class="form-control" required>

                                            </select>
                                        </div>

                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                        <script>
                                            $(document).ready(function() {
                                                $('#state').on('change', function() {
                                                    var state_id = this.value;
                                                    $("#city").html('');
                                                    $.ajax({
                                                        url: "{{ route('get.cities') }}",
                                                        type: "POST",
                                                        data: {
                                                            state_id: state_id,
                                                            _token: '{{ csrf_token() }}'
                                                        },
                                                        dataType: 'json',
                                                        success: function(result) {
                                                            $('#city').html('<option value="">Select City</option>');
                                                            $.each(result.cities, function(key, value) {
                                                                $("#city").append('<option value="' + value.id +
                                                                    '">' + value.name + '</option>');
                                                            });

                                                        }
                                                    });
                                                });

                                            });
                                        </script>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="small mb-1" for="inputBillingName">Postcode</label>
                                                <input class="form-control" name="postcode" id="exampleFormControlInput1" type="text" required />
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Notes</label><button class="btn btn-primary btn-xs btn-icon" ype="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="For example: Pick Up Address, Deliver Address"><i class="fas fa-flag"></i></button>
                                            <input class="form-control" name="notes" id="inputUsername" type="text" required />
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