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
                <h1>Who We Are</h1>
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
                    <li class="active">About Us</li>
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
                        <img src="frontend/assets/images/gggg.jpg" alt="Thumb">
                        <img src="frontend/assets/images/about5.jpg" alt="Thumb">
                    </div>
                </div>
                <div class="col-md-6 info">
                    <h2>We've been consistent from inception. Consult us for Real Estate management and profitable
                        financial advisory. </h2>
                    <p>
                        <strong>With over 7 years of working in the financial industry, MidasTouchExchange has
                            constantly proven to be reliable and trusted globally.</strong>
                    </p>
                    <p>
                        Through our expertise and effective market tools, we pay constant attention to what happens
                        in the financial markets and we milk it week after week. This brings about satisfactory
                        results for our clients, enhanced value for both clients and this firm as well.
                    </p>
                    <p>
                        MidasTouchExchange is also a real estate and property company with properties for sale, rent
                        and lease. We offer property seekers an easy way to find details of property like homes,
                        houses, lands, shops, office spaces and other commercial properties to buy or rent.
                        MidasTouchExchange provides a platform for advertising property from organisations and
                        private property owners
                    </p>
                    <p>
                        Moreover, we have the services of seasoned and experienced financial advisors that are keen
                        to assist you in achieving long term goals and a greater level of financial security.
                    </p>
                    <p>MidasTouchExchange is under the regulation of the UK Companies House and is rightly
                        registered with the COMPANY HOUSE</p>
                    <a class="btn circle btn-theme effect btn-md" href="{{route('all-plans')}}">What We Offer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our About -->

<!-- Star Why Chose Us
    ============================================= -->
<div class="why-chose-us-area bg-dark full text-light bg-cover" style="background-image: url(frontend/assets/images/home2.png);">
    <div class="container-full">
        <div class="row">
            <div class="item-box">
                <div class="col-md-6 col-md-offset-6 info">
                    <div class="heading">
                        <h4>WHAT WE STAND FOR</h4>
                        <p>Year in year out, we work together to bring about great performances. This has given
                            already existing clients renewed reasons to keep trusting and banking on us for a lead
                            in the financial markets.</p>
                        <p>This makes us outstanding! We constantly grow and maintain the level of relationship we
                            hold with our clients and associates keeping in mind the aim and objectives alongside
                            the mode of operation that makes us naturally outstanding.</p>
                    </div>
                    <a class="btn circle btn-theme effect btn-md" href="{{route('contact')}}">Need A Consultant?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Why Chose Us -->

<!-- Start Our Services
    ============================================= -->
<div class="services-area text-center bg-gray carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h4>Professional Consultant</h4>
                    <h2>Meet The Experts</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-medium">
        <div class="row">


            <!-- Single Item -->
            <div class="item col-sm-12 col-md-4">
                <div class="icon">
                    <img src="frontend/assets/images/tm1.png" alt="Thumb">
                </div>
                <h4>Aidan Lewis Hodgson</h4>
                <p>Consultant</p>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item col-sm-12 col-md-4">
                <div class="icon">
                    <img src="frontend/assets/images/tm2.png" alt="Thumb">
                </div>
                <h4>Ruby J. Rolston</h4>
                <p>Manager</p>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item col-sm-12 col-md-4">
                <div class="icon">
                    <img src="frontend/assets/images/tm3.png" alt="Thumb">
                </div>
                <h4>Marcus Wyatt O</h4>
                <p>Co-Founder</p>
            </div>
            <!-- End Single Item -->


        </div>
    </div>
</div>
<!-- End Our Services -->



<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->