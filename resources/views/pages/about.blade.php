@extends("layouts.app")

@section("content")

<!-- Hero Start -->
<section class="bg-half bg-dark d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center col-lg-12">
                <div class="page-next-level">
                    <h4 class="title">About Us</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{env("APP_NAME")}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="overflow-hidden text-white shape">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- About Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="pt-2 mt-4 col-lg-5 col-md-5 mt-sm-0 pt-sm-0">
                <div class="position-relative">
                    <img src="{{asset("_eji/images/1ImfKLfTzEvhJfQuSKnH90ikaMWuCN8gcl9MYZxQ.jpg")}}" width="100%" class="mx-auto rounded img-fluid d-block"
                        alt="">
                    <div class="play-icon">
                        <!-- <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">
                            <i class="bg-white shadow mdi mdi-play text-primary rounded-circle"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="pt-2 mt-4 col-lg-7 col-md-7 mt-sm-0 pt-sm-0">
                <div class="section-title ml-lg-4">
                    <h4 class="mb-4 title">Who we are</h4>
                    <p class="text-muted">Dynamo Vest
                        is a solution for creating an investment management platform.We are a forex trading company that specializes in providing professional and reliable services for trading in the foreign exchange market. Our company has a team of experienced professionals who are dedicated to help our clients make informed decisions and potentially maximize their returns while minimizing risk. We pride ourselves on our powerful trading platforms that are user-friendly, customizable, and equipped with real-time market data and analysis tools, offering fast execution, flexible trading options and available in different devices. We also offer high leverage options for forex trading, allowing you to potentially maximize your returns, but it is important to use it with caution and understand the risks. Moreover, we prioritize security in all aspects of forex trading by using top-notch security technologies, comply with regulations and regularly monitor the system to ensure the safety of your account and trades. We also have a 24/7 live chat support to help our clients with any questions or concerns they may have.</p>
                    <a href="login.html" class="mt-3 btn btn-primary">Invest now<i
                            class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<!-- About End -->

<!-- Team Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="pb-2 mb-4 text-center section-title">
                    <h6 class="text-primary">Get Started</h6>
                    <h4 class="mb-4 title">How to get started ?</h4>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="pt-2 mt-4 col-md-4">
                <div
                    class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-user-check d-block h3"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="text-dark">Create an Account</h5>
                        <p class="mb-0 text-muted">Create an account with us using your preffered email/username</p>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-3">
                <div
                    class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-transaction d-block h3"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="text-dark">Make a Deposit</h5>
                        <p class="mb-0 text-muted">Make A deposit with any of your preffered currency</p>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-5">
                <div
                    class="text-center bg-transparent border-0 card features feature-clean work-process d-none-arrow">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-analysis d-block h3"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="text-dark">Start Trading/Investing</h5>
                        <p class="mb-0 text-muted">Start trading with Indices commodities e.tc</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Team End -->

<!-- Sign up Section Start -->
<section class="overflow-hidden section mt-60 bg-soft-primary">
    <div class="container">
        <div class="p-4 roundedd bg-primary p-lg-5">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <div class="text-center section-title text-md-left">
                        <h4 class="mb-3 text-white title title-dark">The Better Way to Trade &amp; Invest</h4>
                        <p class="mb-0 text-white">Dynamo Vest offers a better way to trade and invest in the forex market by providing powerful trading platforms, high leverage options, fast execution, ultimate security and 24/7 live chat support. With our professional and reliable services, you can make informed decisions and potentially maximize your returns while minimizing risk.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="mt-4 col-md-4 mt-sm-0">
                    <div class="text-center text-md-right">
                        <a href="register.html" class="pt-3 pb-3 pl-4 pr-4 btn btn-light">Create Free
                            Account</a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end container-->
</section>
<!-- End Sign up Section  -->




@endsection