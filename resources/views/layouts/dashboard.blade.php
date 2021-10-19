<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    @stack('extended_css')

    {{-- Globally required --}}
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



</head>

<body>

    {{-- Preloader start --}}
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    {{-- Preloader end --}}
    {{-- Main wrapper start --}}

    <div id="main-wrapper">
        {{-- Nav header start --}}
        <div class="nav-header">
            <a href="{{ route('home') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/favicon.png') }}" alt="Company Logo">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>
        {{-- Nav header end --}}
        {{-- Header start --}}
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="input-group search-area d-lg-inline-flex d-none">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i
                                                    class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button"
                                    data-toggle="dropdown">
                                    <img src="{{ asset('images/profile/17.jpg') }}" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    {{-- <a href="{{ asset('/') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a> --}}
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                  document.getElementById('logout-form').submit();"
                                        class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        {{-- Header end ti-comment-alt --}}
        {{-- Sidebar start --}}

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('home') }}">Home</a></li>
                        </ul>
                        {{-- <ul aria-expanded="false">
                            <li><a href="index.html">Profile</a></li>
                        </ul> --}}
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fad fa-user-hard-hat"></i>
                            <span class="nav-text">Worker Area</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.index') }}">Workers Details</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.borrow.index') }}">Borrow/Return Money</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.bricksDone.index') }}">Add Work History</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-money-check-alt"></i>
                            <span class="nav-text">Investor Area</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('investor.index') }}">Investors Details</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('investment.index') }}">Add Investor Money</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-funnel-dollar    "></i>
                            <span class="nav-text">Expenses</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('expenses.index') }}">Expenses Details</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('expenses.create') }}">Add Expense(s)</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('khata-types.index') }}">New expense/khata type</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-piggy-bank"></i>
                            <span class="nav-text">Sales</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.index') }}">Workers Details</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.borrow.index') }}">Borrow/Return Money</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('worker.bricksDone.index') }}">Add Work History</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->id == 1 || Auth::user()->id == 2)
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <span class="nav-text">Acces Restrictions</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('restrictions.index') }}">View Details</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }}</strong> © <span class="year"></span> All Rights
                        Reserved</p>
                    <p>Made with ♥ by FastDevs</p>
                </div>
            </div>
        </div>
        {{-- Sidebar end --}}

        @yield('content')

        {{-- Footer start --}}
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://revobp.com/" target="_blank">FastDevs</a>
                    <span class="year"></span>
                </p>
            </div>
        </div>
        {{-- Footer end --}}
    </div>

    {{-- Scripts --}}
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/main.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('js/ajaxCall.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/formula.js') }}"></script>
    @stack('extended_scripts')
    @yield('extended_scripts_blade')

</body>

</html>
