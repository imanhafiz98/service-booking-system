<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Knowledge Base - SB Admin Pro</title>
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="nav-fixed">

    <main>
        <!-- Main page content-->
        <div class="container mt-10">
            <!-- Knowledge base home header option-->
            <header class="card card-waves">
                <div class="card-body px-5 pt-5 pb-0">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                        @auth
                        <h1 small class="text-primary">Hi {{ Auth::user()->name }},</h1>
                        @endauth
                            <h1 class="text-primary">How can we help?</h1>
                            <p class="lead mb-4">Search our knowledge base to find answers, or contact us directly if you're having issues!</p>
                            <div class="shadow rounded">
                                <div class="input-group input-group-joined input-group-joined-xl border-0">
                                    <input class="form-control" type="text" placeholder="Search..." aria-label="Search" autofocus />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i data-feather="search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"><img class="img-fluid" src="{{ asset('admin/assets/img/illustrations/problem-solving.svg') }}" /></div>
                    </div>

                    <div class="row">

                        @auth

                        @if(Auth::user()->isAdmin())
                        <a class="btn btn-primary btn-sm lift" href="{{ route('admin.dashboards.index') }}">Dashboard</a>
                        
                        @elseif(Auth::user()->isClient())
                        <a class="btn btn-primary btn-sm lift" href="{{ route('client.dashboards.index') }}">Dashboard</a>
                        

                        @elseif(Auth::user()->isRunner())
                        <a class="btn btn-primary btn-sm lift" href="{{ route('runner.dashboards.index') }}">Dashboard</a>
                        

                        @endif

                        @endauth

                        @guest

                        <a class="btn btn-primary btn-sm lift" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-primary btn-sm lift" href="{{ route('register') }}">Register</a>

                        @endguest

                    </div>
                </div>


            </header>

    </main>

</body>

</html>