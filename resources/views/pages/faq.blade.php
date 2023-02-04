@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-dark d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title">Hello!, How can we help you? </h4>

                        <div class="pt-2 mt-4 subcribe-form">

                        </div>

                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{env("APP_NAME")}}</a>
                                    </li>

                                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
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

    <!-- Start Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4">Find the help you need</h4>
                        <p class="mx-auto para-desc text-muted">Launch your campaign and benefit from our expertise on
                            designing and managing conversion centered bootstrap4 html page.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-question-circle"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="/faq" class="title h5 text-dark">FAQs</a>
                                <p class="mt-3 mb-0 text-muted">Due to its widespread use as filler text for layouts,
                                    non-readability is of great importance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-file-bookmark-alt"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="/login" class="title h5 text-dark">Guides / Support</a>
                                <p class="mt-3 mb-0 text-muted">Due to its widespread use as filler text for layouts,
                                    non-readability is of great importance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                403 500 419 255 405

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-cog"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="/contact" class="title h5 text-dark">Support Request</a>
                                <p class="mt-3 mb-0 text-muted">Due to its widespread use as filler text for layouts,
                                    non-readability is of great importance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4">Get Started</h4>
                        <p class="mx-auto para-desc text-muted">Launch your campaign and benefit from our expertise on
                            designing and managing conversion centered bootstrap4 html page.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-9">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <div class="mb-2 border-0 rounded card">
                                <a data-toggle="collapse" href="#collapse1" class="faq position-relative"
                                    aria-expanded="true" aria-controls="collapse1">
                                    <div class="p-3 border-0 shadow card-header bg-light" id="heading1">
                                        <h6 class="mb-0 title">How can i withdraw</h6>
                                    </div>
                                </a>
                                <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0 text-muted faq-ans"> This is how to withdraw </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="p-4 rounded shadow media align-items-center features feature-clean">
                        <div class="text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope-check d-block h3"></i>
                        </div>
                        <div class="ml-4 content">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Get in Touch !</a></h5>
                            <p class="mb-0 text-muted">This is required when, for text is not yet available.</p>
                            <div class="mt-2">
                                <a href="contact.html" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->


                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section -->
@endsection
