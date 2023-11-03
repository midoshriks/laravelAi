<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        {{-- @dd(auth()->user()->hasPermission('profile_read')) --}}
        {{-- @dd(auth()->user()->hasRole('super_admin')) --}}
        {{-- @if (auth()->user()->hasPermission('users_create')) --}}
        @if (auth()->user()->hasRole('super_admin'))
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                    <li class="nav-item active">
                        <a class="nav-link pl-3" href="{{ route('dashboard.admins.index') }}"><span
                                class="ml-1 item-text">{{ display('Admin') }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./dashboard-system.html"><span
                                class="ml-1 item-text">Systems</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        @endif

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Future Ai</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data
                                Tables</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Apps</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profile</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                    <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
                    <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
                    <a class="nav-link pl-3" href="./profile-notification.html"><span
                            class="ml-1">Notifications</span></a>
                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">File Manager</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                    <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
                    <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
                </ul>
            </li> --}}
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Extra</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Authentication</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                    <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                    <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login 2</span></a>
                    <a class="nav-link pl-3" href="./auth-register.html"><span class="ml-1">Register</span></a>
                    <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset
                            Password</span></a>
                    <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm
                            Password</span></a>
                </ul>
            </li>
        </ul>

        {{-- <p class="text-muted nav-heading mt-4 mb-1">
            <span>Documentation</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="../docs/index.html">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">Getting Start</span>
                </a>
            </li>
        </ul> --}}

    </nav>
</aside>
