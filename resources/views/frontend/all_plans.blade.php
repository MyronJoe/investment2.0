<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<body>
    <!-- HEADER -->
    @include('frontend.include.header')
    <!-- /HEADER -->

    <!-- Start Page Title 
    ============================================= -->
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend/assets/images/breadcum.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Investment Plans &amp; Solutions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Investment Plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area solid default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row item-flex center">
                    <div class="col-md-6 thumb-box">
                        <div class="thumb">
                            <img src="frontend/assets/images/investment-plan.jpg" alt="Thumb">
                            <img src="frontend/assets/images/investplan.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h2>Investment and Platform Soultions for You</h2>
                        <p>
                            Creating new ways to help clients achieve their investment goals can be costly and time
                            consuming. That is why MidasTouchExchange provides wealth managers and advisers with a wide
                            range of services, tools and tax-efficient products. We can help you offer innovative wealth
                            management solutions that positions you to drive efficiency across your business.
                        </p>
                        <p>
                            The entire MidasTouchExchange team is committed to delivering nothing short of excellent
                            result following the financial plan and structure of our partners and clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area text-center bg-gray default-padding carousel-shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                </div>
            </div>
        </div>
        <div class="container-medium">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-analysis"></i>
                            </div>
                            <h4>Retirement Solutions</h4>
                            <p>
                                Use MidasTouchExchange's Self-Invested Personal Pension (SIPP) alongside ISAs and other
                                tax-efficient products for retirement planning.
                            </p>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <h4>Investor Reporting </h4>
                            <p>
                                Access superior investor valuation reports, bringing clarity to clients and help to
                                differentiate you from other wealth managers and advisers.
                            </p>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <h4>Investor Portal</h4>
                            <p>
                                Provide clients with online access to their portfolios, giving them secure online access
                                to their investments.
                            </p>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->
    <br><br>
    <!-- Start Process
    ============================================= -->
    <div id="process" class="process-area default-padding bg-cover shadow dark text-light" style="background-image: url(frontend/assets/images/plan.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>How it works</h4>
                        <h2>Become a member in just a few steps</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <h4>Get An Adviser</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Get Registered</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <h4>Start Investment</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->


    <!-- plans Section Starts Here -->
    @include('frontend.include.plans')
    <!-- plans Section Ends Here -->




    <!-- Footer Section Starts Here -->
    @include('frontend.include.footer')
    <!-- Footer Section Ends Here -->