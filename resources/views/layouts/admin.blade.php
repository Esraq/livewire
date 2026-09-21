<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'University Admin')</title>

    <link rel="icon" href="{{ asset('admin/img/logo/logo.png') }}">

    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- RuangAdmin -->
    <link href="{{ asset('admin/css/ruang-admin.min.css') }}" rel="stylesheet">

    <!-- GREEN UNIVERSITY THEME -->
    <style>
        :root {
            --university-green: #006633;
            --university-dark-green: #004d26;
            --university-light-green: #e6f4ea;
            --university-hover-green: #008044;
        }

        body { background-color: #f5f8f6; }

        /* SIDEBAR */
        .sidebar { background-color: var(--university-green) !important; }
        .sidebar .sidebar-brand { background-color: var(--university-dark-green) !important; }
        .sidebar .sidebar-brand-text { color: #fff !important; font-weight: 700; }
        .sidebar .sidebar-brand-icon img { max-height: 45px; max-width: 45px; }

        .sidebar .nav-item .nav-link { color: #fff !important; padding: 12px 20px; }
        .sidebar .nav-item .nav-link i { color: #fff !important; margin-right: 8px; }
        .sidebar .nav-item .nav-link:hover,
        .sidebar .nav-item.active .nav-link { background-color: var(--university-dark-green) !important; color: #fff !important; }
        .sidebar .nav-item.active .nav-link { font-weight: 600; }

        .sidebar .sidebar-heading { color: #cce8d6 !important; font-weight: 700; }
        .sidebar-divider { border-top: 1px solid rgba(255,255,255,.20) !important; }

        /* TOPBAR */
        .topbar { background-color: var(--university-green) !important; }
        .topbar .nav-link { color: #fff !important; }
        .topbar .nav-link:hover { color: #d9f2e3 !important; }
        .topbar-divider { border-left: 1px solid rgba(255,255,255,.30) !important; }
        .topbar .text-white { color: #fff !important; }

        /* DROPDOWN */
        .dropdown-menu { border: none; box-shadow: 0 5px 20px rgba(0,0,0,.15); }
        .dropdown-item:hover { background-color: var(--university-light-green) !important; color: var(--university-dark-green) !important; }
        .dropdown-item i { color: var(--university-green) !important; }

        /* BUTTONS */
        .btn-primary, .btn-success { background-color: var(--university-green) !important; border-color: var(--university-green) !important; }
        .btn-primary:hover, .btn-success:hover { background-color: var(--university-dark-green) !important; border-color: var(--university-dark-green) !important; }

        /* LINKS & TEXT */
        a { color: var(--university-green); }
        a:hover { color: var(--university-dark-green); text-decoration: none; }
        .text-primary, .text-success { color: var(--university-green) !important; }
        .border-left-primary { border-left: .25rem solid var(--university-green) !important; }
        .border-bottom-primary { border-bottom: .25rem solid var(--university-green) !important; }
        .border-top-success { border-top: .25rem solid var(--university-green) !important; }

        /* COMPONENTS */
        .progress-bar, .badge-success { background-color: var(--university-green) !important; }
        .form-control:focus { border-color: var(--university-green) !important; box-shadow: 0 0 0 .2rem rgba(0,102,51,.20) !important; }
        .custom-control-input:checked ~ .custom-control-label::before { background-color: var(--university-green) !important; border-color: var(--university-green) !important; }
        .card-header, .modal-header { border-bottom: 2px solid var(--university-green); }
        .table thead th { background-color: var(--university-green); color: #fff; border-color: var(--university-green); }
        .table-hover tbody tr:hover { background-color: var(--university-light-green); }
        .alert-success { background-color: var(--university-light-green); border-color: #b7dec5; color: var(--university-dark-green); }
        .page-item.active .page-link { background-color: var(--university-green) !important; border-color: var(--university-green) !important; }
        .page-link { color: var(--university-green); }
        .page-link:hover { color: var(--university-dark-green); }
        .nav-tabs .nav-link.active { color: var(--university-green) !important; border-color: var(--university-green) var(--university-green) #fff; }

        .scroll-to-top { background-color: var(--university-green) !important; }
        .scroll-to-top:hover { background-color: var(--university-dark-green) !important; }
        .sticky-footer { border-top: 3px solid var(--university-green); }
        .sticky-footer .copyright { color: #555; }

        @media (max-width: 768px) {
            .sidebar .sidebar-brand-text { font-size: 12px; }
            .topbar .img-profile { max-width: 40px !important; }
        }
    </style>
</head>


<body id="page-top">

@php
    /*
     |----------------------------------------------------------------
     | SIDEBAR MENU
     |----------------------------------------------------------------
     | label  => text shown in the sidebar
     | icon   => Font Awesome class
     | route  => route name (falls back to "#" if the route is not defined yet)
     | active => pattern(s) used with request()->routeIs()
     */
    $sidebarMenu = [
        'Content' => [
            ['label' => 'Banner',           'icon' => 'fas fa-image',            'route' => 'banners.index',          'active' => 'banners.*'],
            ['label' => 'Notice',           'icon' => 'fas fa-bullhorn',         'route' => 'notices.index',          'active' => 'notices.*'],
            ['label' => 'Alumni',           'icon' => 'fas fa-user-graduate',    'route' => 'alumni.index',           'active' => 'alumni.*'],
            ['label' => 'Convocation',      'icon' => 'fas fa-scroll',           'route' => 'convocations.index',     'active' => 'convocations.*'],
            ['label' => 'News & Events',    'icon' => 'fas fa-newspaper',        'route' => 'news-events.index',      'active' => 'news-events.*'],
        ],
        'Administration' => [
            ['label' => 'Board of Trustees','icon' => 'fas fa-users-cog',        'route' => 'bots.index',             'active' => 'bots.*'],
            ['label' => 'Syndicate',        'icon' => 'fas fa-gavel',            'route' => 'syndicates.index',       'active' => 'syndicates.*'],
            ['label' => 'Academic Council', 'icon' => 'fas fa-university',       'route' => 'academic-councils.index','active' => 'academic-councils.*'],
        ],
        'System' => [
            ['label' => 'Users',            'icon' => 'fas fa-user-plus',        'route' => 'users.index',            'active' => 'users.*'],
        ],
    ];

    $authUser = Auth::user();
@endphp

<div id="wrapper">

    <!-- =====================================================
         SIDEBAR
         ===================================================== -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

        <!-- BRAND -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="{{ route('admin.home') }}">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('admin/img/logo/logo2.png') }}" alt="University Logo">
            </div>
            <div class="sidebar-brand-text mx-3">University</div>
        </a>

        <hr class="sidebar-divider my-0">

        <!-- DASHBOARD -->
        <li class="nav-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- MENU GROUPS -->
        @foreach ($sidebarMenu as $heading => $items)

            <hr class="sidebar-divider">

            <div class="sidebar-heading">{{ $heading }}</div>

            @foreach ($items as $item)
                <li class="nav-item {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ Route::has($item['route']) ? route($item['route']) : '#' }}">
                        <i class="{{ $item['icon'] }} fa-fw"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach

        @endforeach

    </ul>
    <!-- END SIDEBAR -->


    <!-- =====================================================
         CONTENT WRAPPER
         ===================================================== -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">

                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="navbar-nav ml-auto">

                    <!-- NOTIFICATION -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger badge-counter">3</span>
                        </a>
                    </li>

                    <!-- MESSAGES -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-warning badge-counter">2</span>
                        </a>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- USER -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">

                            {{-- Dynamic avatar: uploaded photo, or first letter of the name --}}
                            @if ($authUser->image)
                                <img class="img-profile rounded-circle"
                                     src="{{ asset($authUser->image) }}"
                                     style="width:40px;height:40px;object-fit:cover;"
                                     alt="{{ $authUser->name }}">
                            @else
                                <span class="img-profile rounded-circle d-inline-flex align-items-center justify-content-center bg-white font-weight-bold"
                                      style="width:40px;height:40px;color:var(--university-green);">
                                    {{ strtoupper(mb_substr($authUser->name ?? 'A', 0, 1)) }}
                                </span>
                            @endif

                            <span class="ml-2 d-none d-lg-inline text-white small">
                                {{ $authUser->name ?? 'Administrator' }}
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow">

                            <a class="dropdown-item" href="/profile">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <a class="dropdown-item" href="{{ route('change-password.edit') }}">
                                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                Change Password
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                            <form id="admin-logout-form"
                                  action="{{ route('admin.logout') }}"
                                  method="POST" style="display:none">
                                @csrf
                            </form>

                        </div>
                    </li>

                </ul>
            </nav>
            <!-- END TOPBAR -->


            <!-- ONLY MIDDLE CONTENT CHANGES -->
            @yield('content')

        </div>


        <!-- FOOTER -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; {{ date('Y') }} University Management System</span>
                </div>
            </div>
        </footer>

    </div>

</div>


<!-- SCROLL TO TOP -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- JAVASCRIPT -->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin/js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page-specific scripts -->
@yield('scripts')

</body>

</html>