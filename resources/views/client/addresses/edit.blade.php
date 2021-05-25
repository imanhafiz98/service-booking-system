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

<body class="nav-fixed">

    <main>

        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="arrow-right-circle"></i></div>
                                Update Address
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
                                    <h3 class="text-primary">Update Address</h3>
                                    <h5 class="card-title">Enter address details</h5>
                                    <form method="POST" action="{{ route('client.addresses.update', $address->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 1</label>
                                            <input class="form-control" name="line_1" id="inputUsername" type="text" value="{{ $address->line_1 }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Address Line 2 (Optional)</label>
                                            <input class="form-control" name="line_2" id="inputUsername" type="text" value="{{ $address->line_2 }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="state">State :</label>
                                            <select name="state" id="state" class="form-control" required>
                                                <option value="{{ $address->city->state->id }}">{{ $address->city->state->name }}</option>
                                                @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="city">City :</label>
                                            <select name="city_id" id="city" class="form-control" required>
                                                <option value="{{ $address->city->id }}">{{ $address->city->name }}</option>

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
                                                <input class="form-control" name="postcode" id="exampleFormControlInput1" type="text" value="{{ $address->postcode }}" required />
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUsername">Notes</label><button class="btn btn-primary btn-xs btn-icon" ype="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="For example: Pick Up Address, Deliver Address"><i class="fas fa-flag"></i></button>
                                            <input class="form-control" name="notes" id="inputUsername" type="text" value="{{ $address->notes }}" required />
                                        </div>

                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between">

                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a class="btn btn-primary" href="{{ route('client.addresses.index.test') }}">Back</a>
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