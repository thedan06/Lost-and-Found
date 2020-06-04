<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex" href="index.html">
        <div class="sidebar-brand-icon">
            {{--<i class="fas fa-laugh-wink"></i>--}}
            <i class="fas fa-hard-hat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'LCH') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Departments
    </div>

    <!-- <li class="nav-item">
        <a class="nav-link" href="#"
           data-toggle="collapse"
           data-target="#collapsePages"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>List of Departments:</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/departments/sales-and-marketing">Sales & Marketing</a>
                <a class="collapse-item" href="/departments/architecture">Architecture</a>
                <a class="collapse-item" href="/departments/qs">QS</a>
                <a class="collapse-item" href="/departments/engineering">Engineering</a>
                <a class="collapse-item" href="/departments/finance">Finance & Accounting</a>
                <a class="collapse-item" href="/departments/procurement">Procurement</a>
                <a class="collapse-item" href="/departments/administration">Administration</a>
            </div>
        </div>
    </li> -->

   {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesSales"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sales & Marketing:</span>
        </a>
        <div id="collapsePagesSales" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/clients">Clients List</a>
                <a class="collapse-item" href="/project">Incoming Projects</a>
                <a class="collapse-item" href="/allproject">All Projects</a>
                <a class="collapse-item" href="/safundrequest">Fund Requestes</a>
            </div>
        </div>
    </li>--}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesSales"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sales & Marketing:</span>
        </a>
        <div id="collapsePagesSales" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/sales_and_marketing_project">Incoming Projects</a>
                <a class="collapse-item" href="/sales_and_marketing_all_project">All Projects</a>
            </div>
        </div>
    </li>

    {{--<li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesQs"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quantity Survey:</span>
        </a>
        <div id="collapsePagesQs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/qsproject">Incoming Projects</a>
                <a class="collapse-item" href="/qsallproject">All Projects</a>
            </div>
        </div>
    </li>--}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesQs"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quantity Survey:</span>
        </a>
        <div id="collapsePagesQs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/quantity_survey_project">Incoming Projects</a>
                <a class="collapse-item" href="/quantity_survey_all_project">All Projects</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesArc"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Architecture:</span>
        </a>
        <div id="collapsePagesArc" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/architecture_project">Incoming Projects</a>
                <a class="collapse-item" href="/architecture_all_project">All Projects</a>
                <a class="collapse-item" href="/qsfundrequest">Fund Requestes</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesEn"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Engineering:</span>
        </a>
        <div id="collapsePagesEn" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/engineering_project">Incoming Projects</a>
                <a class="collapse-item" href="/engineering_all_project">All Projects</a>
                <a class="collapse-item" href="/enfundrequest">Fund Requestes</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesFa"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Finance & Accounts:</span>
        </a>
        <div id="collapsePagesFa" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/faproject">Financial Reports (Pending)</a>
                <a class="collapse-item" href="/fafundrequest">Fund Requestes (Pending)</a>

                <a class="collapse-item" href="/finance_and_accounting_project">Incoming Projects</a>
                <a class="collapse-item" href="/finance_and_accounting_project">All Projects</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesAdm"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Administration:</span>
        </a>
        <div id="collapsePagesAdm" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/staffs">Staffs</a>
                <a class="collapse-item" href="/administration_project">Incoming Projects</a>
                <a class="collapse-item" href="/administration_all_project">All Projects</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        KYC Databases
    </div>

    <!-- Nav Item - KYC DBs -->
    {{--<li class="nav-item">
        <a class="nav-link" href="/staffs">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Staffs</span></a>
    </li>--}}

    <li class="nav-item">
        <a class="nav-link" href="/clients">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Clients</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/stakeholders">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Stakeholders</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>User Management</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    {{-- George --}}

    {{--<!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Project Management:</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Project Management:</h6>
                <a class="collapse-item" href="#">Sales & Marketing</a>
                <a class="collapse-item" href="#">Architecture</a>
                <a class="collapse-item" href="#">QS</a>
                <a class="collapse-item" href="#">Engineering</a>
                <a class="collapse-item" href="#">Finance & Accounting</a>
                <a class="collapse-item" href="#">Procurement</a>
                <a class="collapse-item" href="#">Administration</a>
            </div>
        </div>
    </li>--}}

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reports</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
