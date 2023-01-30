<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="//code.jivosite.com/widget/1GEO6kFpzo" async></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="9TZi5rnb1ORmOdDa9jWbbxoP9TmwNf80VYPedU3m">
    <title>{{ env('APP_NAME') }} | Welcome to Online {{ env('APP_NAME') }}</title>

    <meta name="description" content="We are online">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ env('APP_NAME') }} - Welcome to Online {{ env('APP_NAME') }}">
    <meta itemprop="description" content="We are online">
    <meta itemprop="image" content="{{ asset('_eji/images/meta.png') }}">

    <link rel="icon" href="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}"
        type="image/png" />
    <link href="https://dynamoinvestoptions.com/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href='{{ asset('_eji/css/materialdesignicons.min.css') }}' rel="stylesheet" type="text/css" />

    <!-- Magnific -->
    <link rel="stylesheet" href='{{ asset('_eji/css/line.css') }}'>
    <link href='{{ asset('_eji/css/flexslider.css') }}' rel="stylesheet" type="text/css" />
    <link href='{{ asset('_eji/css/magnific-popup.css') }}' rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" />

    <!-- Slider -->
    <link rel="stylesheet" href='{{ asset('_eji/css/owl.carousel.min.css') }}' />
    <link rel="stylesheet" href='{{ asset('_eji/css/owl.theme.default.min.css') }}' />
    <!-- Main Css -->
    <link href='{{ asset('_eji/css/style.css') }}' rel="stylesheet" type="text/css" />
    <link href='{{ asset('_eji/css/gallery-1.css') }}' rel="stylesheet">
    <!-- other links -->
</head>

<body>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        {
            tawk to codess
        }
    </script>


    <!-- Navbar STart -->
    <header id="topnav" class="sticky defaultscroll mb-5">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="/">
                    <img src="{{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }}" width="120"
                        alt="" class="mr-2">
                </a>
            </div>
            <div class="buy-button">

                @guest
                    <a href="/login" class="mr-3 btn btn-primary login-btn-success">login</a>
                    <a href="/register" class="btn btn-primary login-btn-success ">Get Started</a>  
                 @endguest 
                 @auth
                  <form action="{{route("logout")}}" method="post">
                    @csrf
                    <a href="/dashboard" target="" class="mr-3 btn btn-primary login-btn-success">Dashboard</a>
                    <input type="submit" value="logout" class="btn btn-danger login-btn-danger " />   
                </form>
               @endauth

            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li><a href="about.html">About us</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contact.html">Contact</a></li>

                </ul>


                </ul>
                <!-- end navigation menu -->
        
                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <br>
    <div class="py-4 mt-5">
        @include('messages.messages')
        @yield('content')
    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="pb-0 mb-0 col-lg-4 col-12 mb-md-4 pb-md-2">
                    <h5 class="text-light footer-head">{{ env('APP_NAME') }}</h5>
                    <p class="mt-4">We are online</p>

                    <ul class="mt-4 mb-0 list-unstyled social-icon social">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->

                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-4 mt-sm-0 pt-sm-0">
                    <h5 class="text-light footer-head">Useful Links</h5>
                    <ul class="mt-4 list-unstyled footer-list">
                        <li><a href="" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Home</a></li>
                        <li><a href="about.html" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                About us</a></li>
                        <li><a href="contact.html" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Contact Us</a></li>
                        <li><a href="faq.html" class="text-foot"><i class="mr-1 mdi mdi-chevron-right"></i>
                                Faq</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-4 mt-sm-0 pt-sm-0">
                    <h5 class="text-light footer-head">Contact Details</h5>
                    <div class="mt-2">
                        <h6 class="text-foot"><i class="mr-1 mdi mdi-home"> </i>
                            Head Office</h6>
                        <p>Watchmoor Park, Building Eight, Camberley GU15 3YL, United Kingdom</p>
                        <h6><i class="mr-1 mdi mdi-email"> </i>Email Address</h6>
                        <p>support@dynamoinvestoptions.com</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">
                            © Copyright {{ date('Y') }} {{ env('APP_NAME') }} All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->



    <!-- javascript -->
    <script src='{{ asset('_eji/js/jquery-3.5.1.min.js') }}'></script>
    <script src='{{ asset('_eji/js/bootstrap.bundle.min.js') }}'></script>

    <!-- SLIDER -->
    <script src='{{ asset('_eji/js/owl.carousel.min.js') }}'></script>
    <script src='{{ asset('_eji/js/owl.init.js') }}'></script>
    <!-- Icons -->
    <script src='{{ asset('_eji/js/feather.min.js') }}'></script>
    <script src="https://dynamoinvestoptions.com/temp/js/bundle.js"></script>

    <script src='{{ asset('_eji/js/app.js') }}'></script>
    <script src='{{ asset('_eji/js/widget.js') }}'></script>


</body>

</html>
