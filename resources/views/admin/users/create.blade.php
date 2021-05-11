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
                                    Add User
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
                                        <form action="{{ route('admin.users.store') }}" method="POST">
                                        @csrf
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Name</label>
                                                    <input class="form-control"  name = "name" id="exampleFormControlInput1" type="text"  required/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Email</label>
                                                    <input class="form-control"  name = "email" id="exampleFormControlInput1" type="email"  required/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Phone</label>
                                                    <input class="form-control"  name = "phone" id="exampleFormControlInput1" type="text"  required/>
                                                </div>

                                                <div class="form-group">
                                                    <label class="small mb-1" for="role">Role</label>
                                                        <select name="role" id="role" class="form-control">
                                                            <option value="">-- Select Role --</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="admin">Client</option>
                                                            <option value="officer">Runner</option>
                                                        </select>
                                                </div>

                                                <!-- Form Group (password)-->
                                                <div class="form-group">
                                                    <label for="password" class="small mb-1">{{ __('Password') }}</label>


                                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"required autocomplete="new-password">

                                                    {{-- @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror --}}

                                                </div>

                                                  <!-- Form Group (confirm password)-->
                                                 <div class="form-group">
                                                    <label for="password-confirm" class="small mb-1">{{ __('Confirm Password') }}</label>

                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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