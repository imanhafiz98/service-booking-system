<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Account)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <div class="sidenav-menu-heading d-sm-none">Account</div>
                <!-- Sidenav Link (Alerts)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Alerts
                    <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
                </a>
                <!-- Sidenav Link (Messages)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Messages
                    <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
                </a>
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="{{ route('runner.dashboards.index') }}">Default</a>
                        <a class="nav-link" href="{{ route('runner.dashboards.statistic') }}">Statistic</a>
                    </nav>
                </div>
                <!-- Sidenav Heading (Account)-->
                <div class="sidenav-menu-heading">Account</div>
                <!-- Sidenav Accordion (Account)-->

                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseAccount" aria-expanded="false" aria-controls="collapseComponents">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Account
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAccount" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('runner.profiles.show', auth()->user()->id) }}">Profile</a>
                        <a class="nav-link" href="{{ route('runner.passwords.edit', auth()->user()->id) }}">Password</a>
                    </nav>
                </div>

                <!-- Sidenav Heading (Service)-->
                <div class="sidenav-menu-heading">Service</div>
                <!-- Sidenav Accordion (Service)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseService" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                    Service
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseService" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="{{ route('runner.services.index') }}">View Available Services</a>

                    </nav>
                </div>

                <!-- Sidenav Heading (UI Toolkit)-->
                <div class="sidenav-menu-heading">Request</div>
                <!-- Sidenav Accordion (Layout)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseRequest" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                    Request
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseRequest" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">

                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                            View Request
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutContainers" data-parent="#accordionSidenavLayout">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Requested']) }}">Requested</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Accepted']) }}">Accepted</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Rejected']) }}">Rejected</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Cancelled']) }}">Cancelled</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Completed']) }}">Completed</a>
                                <a class="nav-link" href="{{ route('runner.requests.index') }}">All</a>
                            </nav>
                        </div>

                    </nav>
                </div>



                <div class="sidenav-menu-heading">Invoice</div>
                <!-- Sidenav Link (Charts)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseInvoice" aria-expanded="false" aria-controls="collapseInvoice">
                    <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    Invoice
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseInvoice" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                        <a class="nav-link" href="{{ route('runner.invoices.generate', ['status'=>'Completed']) }}">Generate Invoice</a>
                        <a class="nav-link" href="{{ route('runner.invoices.index') }}">View Invoice</a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>