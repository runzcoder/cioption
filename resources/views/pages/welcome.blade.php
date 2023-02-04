@extends('layouts.app')

@section('content')


    <!-- Hero Start -->
    <section class="bg-warning bg-soft-primary d-table w-100 mt-5">
        <div class="container">
            <div class="row align-items-center" >
                <div class="col-lg-6 col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <div class="mt-4 title-heading" data-aos="fade-left" data-aos-delay="200">
                        <div class="shadow alert alert-primary-light alert-pills " role="alert" >
                            <span class="content ">Trade Invest stock, and Bond</span>
                        </div>
                        <h1 class="mb-3 heading">The Better Way to Trade &amp; Invest</h1>
                        <p class="para-desck text-dark">{{ env('APP_NAME') }} helps over 2 million customers achieve their financial goals by helping them trade and invest with ease.Join our mission for sustainable forest management and trade by investing in our company. Purchase shares on the stock market or explore private investment options for long-term returns and impact.</p>
                        <div class="mt-4">
                            <a href="/register" class="pt-3 pb-3 pl-4 pr-4 btn btn-primary">Create Free
                                Account
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-6 col-md-5 mt-sm-0 pt-sm-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="position-relative" data-aos="fade-right" data-aos-delay="400">
                        <img src="{{asset('_eji/images/W2vg1OXzLHaouHP965IktxyEHCHu2Zhw6xdVLR55.jpg')}}" width="100%" class="mx-auto roundedd img-fluid d-block"
                            alt="">
                    </div>
                </div> <!-- TradingView Widget BEGIN -->
            <center>
                <div class="caption-title"><strong>Forex Cross </strong> Rates</div>
            </center>
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="" rel="noopener" target="_blank"><span
                            class="blue-text"></span></a></div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": "100%",
                                "height": "600",
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD",
                                        "CNY"
                                    ],
                                        "isTransparent": true,
                                            "colorTheme": "light",
                                                "locale": "en"
                        }
                    </script>
            </div>
           
            <center>
                <div class="caption-title"><strong>Forex Heat </strong> Map</div>
            </center>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="" rel="noopener" target="_blank"><span
                            class="blue-text"></span></a></div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                        {
                            "width": "100%",
                                "height": "600",
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD",
                                        "CNY"
                                    ],
                                        "isTransparent": true,
                                            "colorTheme": "light",
                                                "locale": "en"
                        }
                    </script>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- TradingView Widget BEGIN -->
    <div
        style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #FFFFFF; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px; width: 100%;">
        <div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe
                src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover="
                width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"
                style="border:0;margin:0;padding:0;"></iframe></div>
        <div
            style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
        </div>
    </div>
    <!-- TradingView Widget END -->

    <!-- Security Section Start -->
    <section class="overflow-hidden section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">

                        <h4 class="mb-4 title">Security Comes First</h4>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="pt-2 mt-4 col-md-6 col-12">
                    <div class="text-center bg-primary border-0 rounded card">
                        <div class="card-body">
                            <div class="p-3 shadow bg-secondary roundedd d-inline-block">
                                <img src="{{asset('_eji/images/key.jpeg')}}" class="avatar avatar-small"
                                    alt="">
                            </div>
                            <div class="mt-4">
                                <h5><a href="javascript:void(0)" class="text-light">Security</a></h5>
                                <p class="mt-3 mb-0 text-light">{{ env('APP_NAME') }} uses the highest levels of Internet Security, and Trading with a reputable, regulated forex broker ensures safety through compliance with strict regulations and secure technology such as SSL encryption. Choose trustworthy partners and keep an eye on market activity to maintain security while trading forex, which carries a high level of risk. Consult with a financial advisor before making any investment decisions..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->



                <div class="pt-2 mt-4 col-md-6 col-12">
                    <div class="text-center bg-primary border-0 rounded card">
                        <div class="card-body">
                            <div class="p-3 shadow bg-secondary roundedd d-inline-block">
                                <img src="{{asset('_eji/images/key2.jpeg')}}" class="avatar avatar-small"
                                    alt="">
                            </div>
                            <div class="mt-4">
                                <h5><a href="javascript:void(0)" class="text-light">Two Factor Auth</a></h5>
                                <p class="mt-3 mb-0 text-light">Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- End Security Section Start -->

    <!-- Features Section Start -->
    <section class="overflow-hidden section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-7 col-md-7">
                    <div class="pb-2 mb-4 section-title">

                        <h4 class="mb-4 title "> Explore Our Services</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">{{ env('APP_NAME') }} trading company offers professional and reliable services for trading in the foreign exchange market. We use secure technology and comply with regulations to ensure the safety of your trades, and offer assistance from experienced professionals to help you make informed investment decisions.p>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->


            <!--end col-->

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="pt-2 mt-4 row">
                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="activity" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title"> Powerful Trading Platforms</h4>
                                    <p class="mb-0 text-muted para">{{ env('APP_NAME') }} company provides powerful trading platforms with advanced features for efficient and effective forex trading. Our platforms are user-friendly, customizable, and equipped with real-time market data and analysis tools. They also offer fast execution, flexible trading options, and available in different devices..</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="credit-card" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">High leverage</h4>
                                    <p class="mb-0 text-muted para">Our company offers high leverage options for forex trading, allowing you to potentially maximize your returns. With high leverage, you can trade with a higher capital than what you actually have, but it also increases the risk of losses, so it's important to use it with caution and understand the risks.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="zap" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Fast execution</h4>
                                    <p class="mb-0 text-muted para">Our company's trading platform provides fast execution of trades, allowing you to act quickly on market opportunities. This means that you can enter or exit positions almost instantly, which can be beneficial in a fast-moving market.
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="shield" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Ultimate Security</h4>
                                    <p class="mb-0 text-muted para">We prioritizes security in all aspects of forex trading. We use top-notch security technologies, comply with regulations and regularly monitor the system to ensure the safety of your account and trades. Your personal and financial information is also kept confidential and safe with us..</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="message-circle" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">24/7 live chat Support</h4>
                                    <p class="mb-0 text-muted para">Our company offers 24/7 live chat support to our clients, providing assistance and answering any questions you may have about forex trading. This means that you can reach out to us at any time, and our team of experts will be there to help you. This is a great feature for clients who trade in different time zones or have urgent queries.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->


                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 text-center col-lg-4 col-md-4 col-12 text-md-right">
                    <img src="{{asset('_eji/images/phonr.jpeg')}}" width="100%" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- End Features Section Start -->


    <!-- INv Section Start -->
    <section class="overflow-hidden section bg-soft-primary">
        <div class="container mt-100 mt-60 ">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('_eji/images/crpoto.jpeg')}}" width="100%" class="img-fluid " alt="">
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-6 col-md-6 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-5">
                        <h4 class="mb-4 title text-primary">Always on the go? Mobile trading is easier than ever with Online Trade!
                        </h4>
                        <p class="text-muted">Get your hands on our customized Trading Platform with the comfort of freely trading on the move, to experience truly liberating trading sessions.</p>

                        <a href="about.html" class="mt-3 h6 text-primary">Find Out More <i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- INv Section Start -->


    <!-- Pricing Section Start -->
    <section class="mt-4 overflow-hidden section bg-dark" id="pricing">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4 title"><span class="text-primary">Our Investment Packages</span></h4>
                        <p class="mx-auto mb-0 para-desc text-muted">Choose how you want to invest with us</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">

                                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">BASIC</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">$ 500
                                </h2>
                                <p class="text-muted">7 Days</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        $500</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        $12000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$100
                                        Minimum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$1200
                                        Maximum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$0
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="/dashboard/create_investment/" class="btn btn-block btn-primary">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">STANDARD</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">$ 1000
                                </h2>
                                <p class="text-muted">1 Week</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        $1000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        $27000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$2000
                                        Minimum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$57000
                                        Maximum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$0
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="/dashboard/create_investment/" class="btn btn-block btn-primary">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">EXCLUSIVE</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">$ 5000
                                </h2>
                                <p class="text-muted">1 Months</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        $5000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        $74000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$10000
                                        Minimum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$140000
                                        Maximum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$0
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="/dashboard/create_investment/" class="btn btn-block btn-primary">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">ENTERPRISE</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">$ 10000
                                </h2>
                                <p class="text-muted">1 Months</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        $10000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        $116000</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$20000
                                        Minimum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$240000
                                        Maximum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>$0
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="/dashboard/create_investment/" class="btn btn-block btn-primary">Buy Now</a>

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
    <!-- End Pricing Section Start -->


    <!-- Crypto price Section Start -->

    <section class="mt-5 overflow-hidden section bg-primary text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">
                        <h4 class="mb-4 title">Cryptocurrency</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">
                            Trade and invest Top Cryptocurrency</p>
                    </div>
                </div>
                <!--end col-->
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="market-box ">
                        <div class="market-content">
                            <coingecko-coin-ticker-widget coin-id="bitcoin" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>

                        <!--pattern end-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="market-box">
                        <div class="market-content">
                            </script>
                            <coingecko-coin-ticker-widget coin-id="ethereum" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>
                        <!--pattern start-->

                        <!--pattern end-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="market-box">
                        <div class="market-content">
                            <coingecko-coin-ticker-widget coin-id="litecoin" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>
                        <!--pattern start-->

                        <!--pattern end-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crypto price Section Start  End-->


    <!-- Testimonial Section Start -->
    <section class="mt-5 overflow-hidden section">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">
                        <h4 class="mb-4 title">What our Customer says!</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">Don&#039;t take our word for it, here&#039;s what some of our clients have to say about us</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="mt-4 row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div id="single-owl" class="owl-carousel owl-theme">
                        
                        <!-- Review Start -->

                    </div>
                    <!-- Review End -->
                </div>
                <!--end owl-fade-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--End Testimonial Section  -->

    <!-- Sign up Section Start -->
    <section class="overflow-hidden section mt-60 bg-soft-primary">
        <div class="container">
            <div class="p-4 roundedd bg-primary p-lg-5">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="text-center section-title text-md-left">
                            <h4 class="mb-3 text-white title title-dark">The Better Way to Trade &amp; Invest</h4>
                            <p class="mb-0 text-white">{{ env('APP_NAME') }} offers a better way to trade and invest in the forex market by providing powerful trading platforms, high leverage options, fast execution, ultimate security and 24/7 live chat support. With our professional and reliable services, you can make informed decisions and potentially maximize your returns while minimizing risk</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="mt-4 col-md-4 mt-sm-0">
                        <div class="text-center text-md-right">
                            <a href="/register" class="pt-3 pb-3 pl-4 pr-4 btn btn-light">Create Free
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
