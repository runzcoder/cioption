<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} | User Account Dashboard</title>
    <link rel="icon"
        href="https://dynamoinvestoptions.com/storage/app/public/photos/4uqMp6F8srvXHwjUAUEp47JoMiQadStJa6bBCQBR.png"
        type="image/png" />
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
    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="{{ asset('_eji/js/sweetalert.min.js ') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <!-- Bootstrap Notify -->
    <script src="{{ asset('_eji/js/bootstrap-notify.min.js ') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="{{ asset('_eji/css/style.css') }}">

    <style>
        /* .btn-square{
            border-radius: 100%;
            width: 30px;
            background-color:rgb(59, 55, 55);
        } */
    </style>


</head>

<body class="application application-offset">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">

                    <div class="container-fluid">
                        <!-- Brand + Toggler (for mobile devices) -->
                        <div class="pl-4 d-block">
                            <a class="navbar-brand" href="{{route("dashboard")}}">
                                <img width="100px" height="150px"
                                    src="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}"
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
                                                src="https://th.bing.com/th/id/OIP.NVgDAkBBANO4lnKq3Xqg1wHaHa?w=209&h=209&c=7&r=0&o=5&pid=1.7"
                                                width="30%" alt="" srcset="">
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                        <h6 class="px-0 dropdown-header">Hi,</h6>
                                        <a href="{{route("dashboard")}}" class="dropdown-item">

                                            <span class="avatar avatar-sm rounded-circle"> <img
                                                    src="https://th.bing.com/th/id/OIP.NVgDAkBBANO4lnKq3Xqg1wHaHa?w=209&h=209&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="" srcset="">
                                                <span>My profile</span>
                                        </a>
                                        <div class="dropdown-divider"></div>

                                       <form action="{{route("logout")}}" method="post">
                                        @csrf
                                        <button class="dropdown-item text-danger">
                                            <img src="https://th.bing.com/th?id=OIP.aUm0uqiQz8c0nhT_VEKqYwHaHq&w=245&h=254&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                                width="30%" alt="">
                                            <span>Logout</span>
                                        </button>
                                       </form>
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
                                                <img src="https://th.bing.com/th/id/OIP.NVgDAkBBANO4lnKq3Xqg1wHaHa?w=209&h=209&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="" srcset="">
                                            </span>
                                            <div class="ml-2 d-none d-lg-block">
                                                <span
                                                    class="mb-0 text-sm font-weight-bold">{{ Auth::user()->username }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                        <h6 class="px-0 dropdown-header">Hi, </h6>
                                        <a href="{{route("dashboard")}}" class="dropdown-item">

                                            <img src="https://th.bing.com/th/id/OIP.NVgDAkBBANO4lnKq3Xqg1wHaHa?w=209&h=209&c=7&r=0&o=5&pid=1.7"
                                                width="30%" alt="" srcset="">
                                            <span>My profile</span>
                                        </a>
                                        <div class="dropdown-divider"></div>

                                        
                                        <a class="dropdown-item text-danger" style="display:flex; flex-direction: row" >
                                            <img src="https://th.bing.com/th?id=OIP.aUm0uqiQz8c0nhT_VEKqYwHaHq&w=245&h=254&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                                width="30%" alt="">
                                                <form id="logout-form" action="{{route("logout")}}" method="POST"
                                                
                                                    style=""> <input type="submit" value="Logout">
                                                    @csrf
                                        
                                            <input type="hidden" name="" value="">
                                        </form>
                                    </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-3 p-5" style="border: 2px solid gray">
                <div class="clearfix nav-application">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                 
                                <a href="{{ route('admin.users') }}" class="text-sm btn  ">
                                    <button class="btn btn-primary">
                                        
                                        <span class="">Users</span>
                                    </button>
                                </a>

                                <a href="{{ route('currency') }}" class="text-sm btn  ">
                                    <button class="btn btn-primary">
                                        
                                        <span class="">Currency</span>
                                    </button>
                                </a>
                                
                                <a href="{{ route('payoption') }}" class="text-sm btn  ">
                                    <button class="btn btn-primary">
                                        
                                        <span class="">Payment Option</span>
                                    </button>
                                </a>
            
                               
                            
                                <a href="{{ route('admin.investment_type') }}" class="text-sm btn  ">
                                    <button class="btn btn-primary">
                                        
                                        <span class="">Investment Type</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('messages.messages')
                @yield('content')

            </div>
        </div>
    </div>


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
    <script src="//code.jivosite.com/widget/1GEO6kFpzo" async></script>

</body>

</html>
