<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->


<!-- Start Page Title 
    ============================================= -->
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend/assets/images/breadcum.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Privacy Policy</h1>
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
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Privacy Policy</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- Start Our About
    ============================================= -->
<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <!-- Start About Content -->
            <div class="col-sm-12 about-content content-left">
                <div class=" info">
                    <h3>Manage Execution and Risk. Drive Operational Efficiency. Cut Costs.</h3>
                    <p>
                        In the face of increasing market complexity and regulation, trading has become a sophisticated task that requires regulatory and technological expertise that is both time consuming and expensive to maintain.<br><br>To address this, investment managers are increasingly looking to outsource their dealing desks in order to focus their time on their core services.<br><br>MidasTouchExchange combines access to liquidity with seamless high touch execution services, all backed up by leading technology and great expertise. From global execution to settlement and custody services and through our international reach, we bring you expertise and operational simplicity and efficiency.<br><br>Our services are available in the following asset classes: Funds, Global Equities, ETFs, Bonds, Fixed Income and Currencies.
                    </p>
                    <div class="author">

                    </div>
                </div>

            </div>
            <!-- End About -->

        </div>
    </div>
</div>
<!-- End Our About -->

<!-- Start Expertise Area
    ============================================= -->
<div class="expertise-area text-light default-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 info">
                <h2>Global Electronic Equities, Trading and Investments</h2>
                <p>
                    Many of the world’s largest financial organisations use our direct market access, algorithms and smart order routing capabilities to execute in all major international markets.
                </p>
                <!-- Progress Bar Start -->
                <div class="skill-items">
                    <!-- Progress Bar Start -->
                    <div class="progress-box">
                        <h5>Market Research <span class="pull-right">95%</span></h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-width="95"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5>Trading Outcome <span class="pull-right">93%</span></h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-width="93"></div>
                        </div>
                    </div>
                    <!-- End Progressbar -->
                </div>
                <!-- End Progressbar -->
            </div>
            <div class="col-md-6 our-expertise text-light">
                <div class="expertise-items expertise-carousel owl-theme">
                    <!--Single Item  -->
                    <div class="item">
                        <h2>Execution Services for Wealth Managers & Advisers</h2>
                        <p>
                            MidasTouchExchange provides wealth managers and advisers with the whole of market, multi-currency trading platform, offering a single access point to Equities, ETFs, Fixed Income, and Funds dealing.
                        </p>
                        <ul>
                            <li>
                                <h4>Completed Projects</h4>
                                <span>130K</span>
                            </li>
                            <li>
                                <h4>Success Rate</h4>
                                <span>98%</span>
                            </li>
                        </ul>
                        <a class="btn btn-theme theme btn-md" href="login">Get Started</a>
                    </div>
                    <!-- End Single Item  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Expertise Area -->

<!-- Start Services Single
    ============================================= -->
<div class="services-single-area default-padding">
    <div class="container">
        <div class="row">
            <div class="services-info col-md-8">
                <div class="info">
                    <h2>Global Execution Services for Wealth Managers and Advisers</h2>
                    <p>
                        MidasTouchExchange provides 24-hour global execution services to multiple asset classes across the United States, Europe and Asia. MidasTouchExchange trading desks in San Fransico, New York and Asia can access multiple pools of liquidity via electronic and voice execution channels.
                    </p>
                    <h4>RELATIONSHIPS THAT COUNT</h4>
                    <p>
                        MidasTouchExchange Trading Services takes pride in building long term relationships with investment managers. Getting to know you and your business is a core value to us providing efficient execution services.
                    </p>
                    <h4>UNCONFLICTED</h4>
                    <p>
                        Our agency-only model means we are completely independent, allowing us to avoid proprietary conflicts and put your interests first.
                    </p>
                    <h4>COST EFFECTIVE</h4>
                    <p>
                        Our wide asset class coverage and integrated “execution to settlement” services help you make significant savings on middle and back office administrative costs.
                    </p>
                    <h4>BEST EXECUTION</h4>
                    <p>
                        Our dedicated Transaction Cost Analysis (TCA) desk provides regular best execution reports for all orders executed on your behalf.
                    </p>
                    <h4>STREAMLINED OPERATIONS</h4>
                    <p>
                        Enhanced straight-through processing protects data integrity, reduces data transfer risks and provides you with much greater visibility of your trading activities.
                    </p>
                </div>

            </div>
            <div class="sidebar col-md-4">
                <!-- side_bar Section Starts Here -->
                @include('frontend.include.side_bar')
                <!-- side_bar Section Ends Here -->
            </div>
        </div>
    </div>
</div>
<!-- End Services Single -->

<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->