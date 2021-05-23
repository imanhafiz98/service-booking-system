<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
        <div class="col-lg-5">
            <!-- Basic login form-->
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                    <h3 class="font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <!-- Login form-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Form Group (email address)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" required />
                        </div>
                        <!-- Form Group (password)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter password" required />
                        </div>
                        <!-- Form Group (remember password checkbox)-->
                        <div class="form-group">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>
                        <!-- Form Group (login box)-->
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    @if (Route::has('register'))
                    <div class="small">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Need an account? Sign up!') }}</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection