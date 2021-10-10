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
     <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
     <!-- ico-font-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
     <!-- Themify icon-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
     <!-- Flag icon-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
     <!-- Feather icon-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
     <!-- App css-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
     <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
     <!-- Responsive css-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">


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
            <a href="index.html" class="brand-logo">
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
                                    <a href="{{ asset('app-profile.html') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
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
                        <ul aria-expanded="false">
                            <li><a href="index.html">Profile</a></li>
                        </ul>
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
                            <li><a href="{{ route('investment.index')}}">Add Investor Money</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i class="fas fa-piggy-bank"></i>
                            <span class="nav-text">Sales</span>
                        </a>
                    </li>
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

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    @stack('extended_scripts')
    @yield('extended_scripts_blade')

</body>

</html>
