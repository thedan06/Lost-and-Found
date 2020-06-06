<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex" href="index.html">
        <div class="sidebar-brand-icon">
            {{--<i class="fas fa-laugh-wink"></i>--}}
            <i class="fas fa-hard-hat"></i>
        </div>
        {{--<div class="sidebar-brand-text mx-3">{{ config('app.name', 'LoFo') }}</div>--}}
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'LoFo') }}</div>
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
        Settings
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapsePagesConfigurations"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Configurations:</span>
        </a>
        <div id="collapsePagesConfigurations" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/events">Events</a>
                <a class="collapse-item" href="/items-categories">Items-Categories</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrations
    </div>

    {{--<li class="nav-item">
        <a class="nav-link" href="/clients">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Clients</span></a>
    </li>--}}

    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>User Management</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

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
