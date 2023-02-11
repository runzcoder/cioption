<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} | User Account Dashboard</title>
    <link rel="icon" href="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}" type="image/png" />
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('_eji/css/all.min.css') }}">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('_eji/css/fullcalendar.min.css') }}">
    <!-- Purpose CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.cs">
    <link rel="stylesheet" href="{{ asset('_eji/css/purpose.css') }}">
    <link rel="stylesheet" href="{{ asset('_eji/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_eji/css/sweetalert2.min.css') }}">
    <script src="{{ asset('_eji/js/sweetalert.min.js ') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('_eji/css/dash.css') }} " id="stylesheet">
    <link rel="stylesheet" href="{{ asset('_eji/css/style.css') }}">

    @include('layouts.include.head')

    <!-- Bootstrap Notify -->
    <script src="{{ asset('_eji/js/bootstrap-notify.min.js ') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



</head>

<body class="application application-offset">
    <!-- Application container -->
    <div class="container-fluid container-application">

        <!-- Sidenav -->
        <div class="sidenav" id="sidenav-main">
            <!-- Sidenav header -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}"
                        class="navbar-brand-img" alt="logo">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <img src="https://th.bing.com/th?id=OIP.q_TnnnFOL5COLu9zBn5MCQAAAA&w=28&h=29&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                style="z-index: 99999;" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- User mini profile -->
            <div class="text-center sidenav-user d-flex flex-column align-items-center justify-content-between">
                <!-- Avatar -->
                <div>
                    <a href="#" class="avatar rounded-circle avatar-xl">
                        <img src="{{asset("storage/avatars/".Auth::user()->avatar)  ?? asset("images/user.png")}}"
                            alt="" srcset="">
                    </a>
                    <div class="mt-4">
                        <h5 class="mb-0 text-white"> </h5>
                        <span class="mb-3 text-sm text-white d-block opacity-8">online</span>
                        <a href="#"
                            class="shadow bg-light btn btn-sm btn-white btn-icon rounded-pill hover-translate-y-n3">
                            <span class="btn-inner--icon">
                                <span class="btn-inner--text"> ${{ Auth::user()->balance }} </span>
                        </a>
                    </div>
                </div>
                <!-- User info -->
                <!-- Actions -->
                <div class="mt-4 w-100 actions d-flex justify-content-between">

                </div>
            </div>
            <!-- Application nav -->
            <div class="clearfix nav-application">
                @if (Auth::user()->level == 'admin' || Auth::user()->level == 'superadmin')
                    <a href="{{ route('admin') }}" class="text-sm btn btn-square">
                        <span class="btn-inner--icon d-block"><img src="{{ asset('images/admin.png') }}" width="30%"
                                alt="" srcset=""></span>
                        <span class="pt-2 btn-inner--icon d-block">Admin Dashboard</span>
                    </a>
                @endif

                <a href="{{ route('dashboard') }}" class="text-sm btn btn-square">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.aFUA62GXzSVCvoHZp8-wxwHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt="" srcset=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Home</span>
                </a>

                <a href="{{ route('dashboard.profile') }}" class="text-sm btn btn-square">
                    <span class="btn-inner--icon d-block"><img
                            src="{{ asset('images/user.png') }}"
                            width="30%" alt="" srcset=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Profile</span>
                </a>

                <a href="{{ route('dashboard.deposit_view') }}" class="text-sm btn btn-square  ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.l7xXyoS6qTNXDdJf36s5dwHaIj&w=232&h=268&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Deposit</span>
                </a>
                <a href="/dashboard/withdrawal" class="text-sm btn btn-square  ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.ulJoL56Bq2qzxj75nHz88AHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Withdraw</span>
                </a>
                <a href="/dashboard/profits" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.KW1aNE0LxEYaf1E8YdnoQgHaHZ&w=250&h=249&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Profit History</span>
                </a>
                <a href="/dashboard/trx" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"> <img
                            src="https://th.bing.com/th?id=OIP.iWUZBbpbKIK-h3qBKQQSQgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Transactions</span>
                </a>
                <a href="#" class="text-sm btn btn-square  ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.juZQV_nALijvCjplmd79CwHaJb&w=221&h=282&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></i></span>
                    <span class="pt-2 btn-inner--icon d-block">Swap Crypto</span>
                </a>
                <a href="#
                " class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.SVUBYZBBKB2AIW4041k1AgHaHa&w=249&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Transfer funds</span>
                </a>
                <a href="/dashboard" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.A1IYJRbQXDqs1a_X4ca-ggHaIP&w=236&h=263&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Managed Accounts</span>
                </a>
                <a href="/dashboard" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.cJU99M96-XhHwZYPvz7qvQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Profile</span>
                </a>

                <a href="/dashboard/plans" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.iUeEdr8rUZAhxhVcUSwIIQHaHZ&w=250&h=249&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Trading Plans</span>
                </a>

                <a href="dashboard/plans" class="text-sm btn btn-square  "><img
                        src="https://th.bing.com/th?id=OIP.iUeEdr8rUZAhxhVcUSwIIQHaHZ&w=250&h=249&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                        width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">My Plans</span>
                </a>
                <a href="/dashboard/referrals" class="text-sm btn btn-square ">
                    <span class="btn-inner--icon d-block"><img
                            src="https://th.bing.com/th?id=OIP.Zk159XGQ_yYUSjYf0K52mAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                            width="30%" alt=""></span>
                    <span class="pt-2 btn-inner--icon d-block">Referrals</span>
                </a>
            </div>
            <!-- Misc area -->
            <div class="card bg-primary">
                <div class="card-body">
                    <h5 class="text-white">Need Help!</h5>
                    <p class="mb-4 text-white">
                        Contact our 24/7 customer support center
                    </p>
                    <a href="/contact" class="btn btn-sm btn-block bg-gradient-warning btn-white rounded-pill">Contact
                        Us</a>
                </div>
            </div>
        </div> <!-- Content -->
        <div class="main-content position-relative">
            <!-- Main nav -->
            <!-- Main nav -->
            <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand + Toggler (for mobile devices) -->
                    <div class="pl-4 d-block d-md-none">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}"
                                class="navbar-brand-img" alt="...">
                        </a>
                    </div>

                    <!-- User's navbar -->
                    <div class="ml-auto navbar-user d-lg-none">
                        <ul class="flex-row navbar-nav align-items-center">
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon sidenav-toggler"
                                    data-action="sidenav-pin" data-target="#sidenav-main">
                                    <img src="https://th.bing.com/th?id=OIP.q_TnnnFOL5COLu9zBn5MCQAAAA&w=28&h=29&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                        width="30%" style="z-index: 99999;" alt=""></a>
                            </li>


                            <li class="nav-item dropdown dropdown-animate">
                                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="avatar avatar-sm rounded-circle"> <img
                                            src="{{asset("storage/avatars/".Auth::user()->avatar)  ?? asset("images/user.png")}}"
                                            width="30%" alt="" srcset="">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                    <h6 class="px-0 dropdown-header">Hi,</h6>
                                    <a href="{{route("/dashboard/profile")}}" class="dropdown-item">

                                        <span class="avatar avatar-sm rounded-circle"> <img
                                                src="{{asset("storage/avatars/".Auth::user()->avatar)  ?? asset("images/user.png")}}"
                                                width="30%" alt="" srcset="">
                                            <span>My profile</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item text-danger">
                                        <img src="https://th.bing.com/th?id=OIP.aUm0uqiQz8c0nhT_VEKqYwHaHq&w=245&h=254&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                            width="30%" alt="">
                                      <form action="{{route("logout")}}" method="post">
                                        @csrf
                                        <span><input type="submit" value="Logout"></span>
                                    </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Navbar nav -->
                    <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">

                        <!-- Right menu -->
                        <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon sidenav-toggler"
                                    data-action="sidenav-pin" data-target="#sidenav-main">
                                    <img src="https://th.bing.com/th?id=OIP.q_TnnnFOL5COLu9zBn5MCQAAAA&w=28&h=29&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                        width="30%" style="z-index: 99999;" alt=""></a>
                            </li>


                            <li class="nav-item dropdown dropdown-animate">
                                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="media media-pill align-items-center">
                                        <span class="avatar rounded-circle">
                                            <img src="{{asset("storage/avatars/".Auth::user()->avatar)  ?? asset("images/user.png")}}"
                                                width="30%" alt="" srcset="">
                                        </span>
                                        <div class="ml-2 d-none d-lg-block">
                                            <span
                                                class="mb-0 text-sm font-weight-bold">{{ Auth::user()->username }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                    <h6 class="px-0 dropdown-header">Hi, </h6>
                                    <a href="#" class="dropdown-item">

                                        <img src="{{asset("storage/avatars/".Auth::user()->avatar)  ?? asset("images/user.png")}}"
                                            width="30%" alt="" srcset="">
                                        <span>My profile</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item text-danger" onclick="document.getElementById('logoutbtn').click()">
                                        <img src="https://th.bing.com/th?id=OIP.aUm0uqiQz8c0nhT_VEKqYwHaHq&w=245&h=254&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                            width="30%" alt="">
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{route("logout")}}" method="POST" style="display:none">
                                        @csrf
                                        <input id="logoutbtn" type="submit" name="" value="Logout">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content -->
            <div class="page-content">

                <!-- Page title -->
                <div class="page-title">
                    <div class="row justify-content-between align-items-center">
                        <div class="mb-3 col-md-6 mb-md-0">
                            <h5 class="mb-0 text-white h3 font-weight-400">Welcome, {{ Auth::user()->name }}!</h5>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4">
                        <div class="alert alert-primary">

                            <span class="badge badge-primary badge-pill">
                                New
                            </span>
                            <span class="alert-content">
                                Welcome to Online
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                @include('messages.messages')
                @yield('content')

            </div>
        </div>
    </div>
    <script type="text/javascript" src="https//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Scripts -->
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="{{ asset('_eji/js/purpose.core.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('_eji/js/progressbar.min.js') }}"></script>
    <script src="{{ asset('_eji/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('_eji/js/moment.min.js') }}"></script>
    <script src="{{ asset('_eji/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('_eji/js/sweetalert.min.js') }}"></script>
    <!-- Purpose JS -->
    <script src="{{ asset('_eji/js/purpose.js') }}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('_eji/js/bootstrap-notify.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('_eji/js/dash.js') }}"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script></script>

</body>

</html>
