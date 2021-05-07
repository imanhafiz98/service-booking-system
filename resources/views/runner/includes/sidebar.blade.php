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
                        <a class="nav-link" href="{{ route('runner.dashboard') }}">Default</a>
                        <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                        <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                    </nav>
                </div>
                <!-- Sidenav Heading (App Views)-->
                <div class="sidenav-menu-heading">Profile</div>
                <!-- Sidenav Accordion (Pages)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Account
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                        <!-- Nested Sidenav Accordion (Pages -> Account)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                            Account
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAccount" data-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="dashboard-2.html">Profile</a>
                                <a class="nav-link" href="dashboard-2.html">Billing</a>
                                <a class="nav-link" href="dashboard-2.html">Security</a>
                            </nav>
                        </div>
                        
                    </nav>
                </div>
                <!-- Sidenav Heading (UI Toolkit)-->
                <div class="sidenav-menu-heading">Service</div>
                <!-- Sidenav Accordion (Layout)-->
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

                    <a class="nav-link" href="{{ route('runner.services.index', ['status'=>'Pending']) }}">Submit Request</a>

                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                            View Request
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutContainers" data-parent="#accordionSidenavLayout">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Requested']) }}">Requested</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Accepted']) }}">Accepted</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Cancelled']) }}">Cancelled</a>
                                <a class="nav-link" href="{{ route('runner.requests.index', ['status'=>'Completed']) }}">Completed</a>
                                <a class="nav-link" href="{{ route('runner.requests.index') }}">All</a>
                            </nav>
                        </div>

                    </nav>
                </div>

                <!-- Sidenav Heading (Addons)
                <div class="sidenav-menu-heading">History</div>
                 Sidenav Link (Charts)
                <a class="nav-link" href="dashboard-2.html">
                    <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    List of History
                </a> -->

                <div class="sidenav-menu-heading">Invoice</div>
                            <!-- Sidenav Accordion (Layout)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseInvoice" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                Invoice
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseInvoice" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                                    <a class="nav-link" href="tables.html">View Invoice</a>
                                    
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

