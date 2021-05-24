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
                <div class="sidenav-menu-heading">Main</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="{{ route('client.dashboards.index') }}">Default</a>
                        <a class="nav-link" href="{{ route('client.dashboards.statistic') }}">Statistics</a>
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
                        <a class="nav-link" href="{{ route('client.profiles.show', auth()->user()->id) }}">Profile</a>
                        <a class="nav-link" href="{{ route('client.passwords.edit', auth()->user()->id) }}">Password</a>
                        <a class="nav-link" href="{{ route('client.addresses.index.test') }}">Address</a>
                    </nav>
                </div>

                <!-- Sidenav Heading (Service)-->
                <div class="sidenav-menu-heading">Service</div>
                <!-- Sidenav Accordion (Layout)-->
                <a class="nav-link" href="{{ route('client.services.create') }}">
                    <div class="nav-link-icon"><i data-feather="layout"></i></div>
                    Create Service
                </a>

                <!-- Sidenav Accordion (Components)-->

                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    View Service
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('client.services.index', ['status'=>'Pending']) }}">Pending</a>
                        <a class="nav-link" href="{{ route('client.services.index', ['status'=>'Ongoing']) }}">Ongoing</a>
                        <a class="nav-link" href="{{ route('client.services.index', ['status'=>'Cancelled']) }}">Cancelled</a>
                        <a class="nav-link" href="{{ route('client.services.index', ['status'=>'Completed']) }}">Completed</a>
                        <a class="nav-link" href="{{ route('client.services.index') }}">All</a>
                    </nav>
                </div>


                <!-- <div class="sidenav-menu-heading">E-Wallet</div>
                             Sidenav Accordion (Layout)
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseWallet" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                E-Wallet
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseWallet" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                     Nested Sidenav Accordion (Layout -> Navigation)
                                    <a class="nav-link" href="tables.html">View Wallet</a>
                                    <a class="nav-link" href="tables.html">Add Wallet</a>
                                </nav>
                            </div> -->

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
                        <!-- <a class="nav-link" href="{{ route('client.invoices.generate', ['status'=>'Completed']) }}">Generate Invoice</a> -->
                        <a class="nav-link" href="{{ route('client.invoices.index') }}">List of Invoices</a>
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