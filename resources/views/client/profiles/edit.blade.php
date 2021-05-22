@extends('client.main')

@section('title')
Dashboard :: Service Booking System
@endsection

@section('content')


<html lang="en">

<body>

    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Account Settings - Profile
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
                <a class="nav-link active ml-0" href="{{ route('client.profiles.show', auth()->user()->id) }}">Profile</a>
                <a class="nav-link" href="{{ route('client.passwords.edit', auth()->user()->id) }}">Password</a>
                <a class="nav-link" href="{{ route('client.addresses.index.test') }}">Address</a>

            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Profile Details</div>
                        <div class="card-body">
                            <form action="{{ route('client.profiles.update', Auth::user()->id) }}" method="POST">
                                @csrf
                                <!-- Form Group (username)-->

                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Name</label>
                                    <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}" required />
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" name="email" type="email" value="{{ Auth::user()->email }}" required />
                                </div>
                                <!-- Form Group (phone)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Phone Number</label>
                                    <input class="form-control" name="phone" type="text" value="{{ Auth::user()->phone }}" required />
                                </div>


                                <!-- Navigate to edit page-->
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>


@endsection