<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" required autocomplete="phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            
                            <div class="col-md-6">
                            <select class="form-control" name="role" id="exampleFormControlSelect1">
                                <option value="Client">Client</option>
                                <option value="Runner">Runner</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->



@extends('layouts.user')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <!-- Basic registration form-->
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                    <h3 class="font-weight-light my-4">Create Account</h3>
                </div>
                <div class="card-body">
                    <!-- Registration form-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Form Group (name)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputName">Name</label>
                            <input class="form-control" name="name" id="inputName" type="text" aria-describedby="emailHelp" placeholder="Enter full name" required />
                        </div>
                        <!-- Form Group (email address)            -->
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                        </div>
                        <!-- Form Group (phone)            -->
                        <div class="form-group">
                            <label class="small mb-1" for="inputPhone">Phone Number</label>
                            <input class="form-control" name="phone" id="inputPhone" type="text" aria-describedby="emailHelp" placeholder="Enter phone number" required />
                        </div>
                        <!-- Form Row    -->
                        <div class="form-row">
                            <div class="col-md-6">
                                <!-- Form Group (password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (confirm password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control" name="password_confirmation" id="inputConfirmPassword" type="password" placeholder="Confirm password" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="small mb-1">{{ __('Role') }}</label>
                            <select class="form-control" name="role" id="exampleFormControlSelect1" required>
                                <option value="">Select Role</option>
                                <option value="Client">Client</option>
                                <option value="Runner">Runner</option>
                            </select>

                        </div>
                        <!-- Form Group (create account submit)-->
                        <div class="form-group mt-4 mb-0">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    @if (Route::has('login'))
                    <div class="small">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Have an account? Go to login') }}</a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection