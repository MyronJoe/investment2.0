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
                <h1>Real Estate</h1>
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
                    <li class="active">Real Estate</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services Single
    ============================================= -->
<div class="services-single-area default-padding">
    <div class="container">
        <div class="row">
            <div class="services-info col-md-8">
                <div class="thumb">
                    <img src="frontend/assets/images/dope.jpg" alt="Thumb">
                </div>
                <div class="info">

                    <p>Real Estate Investment Trusts (REITs) are a fantastic investment opportunity that combines
                        the potential for substantial returns with built-in diversification and consistent income.
                        These investment vehicles allow you to gain exposure to the real estate market without the
                        hassle of property management. REITs typically invest in a wide range of income-producing
                        real estate assets, such as office buildings, shopping centers, apartments, schools,
                        hospitals, warehouses and hotels.</p>

                    <h4>Here's why you should consider REITs:</h4>


                    <p>1. <b>Steady Income:</b> REITs are required by law to distribute at least 90% of their
                        taxable
                        income to shareholders in the form of dividends. This means you can enjoy a regular stream
                        of income, making them a great choice for income-focused investors
                    </p>


                    <p>2. <b>Diversification:</b> REITs offer a simple way to diversify your investment portfolio.
                        You can invest in various types of properties and geographical locations, reducing the risk
                        associated with individual real estate investments.
                    </p>

                    <p>3. <b>Liquidity:</b> Unlike owning physical real estate, REIT shares are traded on stock
                        exchanges, providing liquidity and flexibility. You can buy or sell REIT shares as easily as
                        any other stock.
                    </p>

                    <p>4. <b>Capital Appreciation:</b> In addition to income, REITs can also offer capital
                        appreciation as the value of their underlying assets appreciates over time. This can lead to
                        significant gains in the long run.
                    </p>

                    <p>5. <b>Professional Management:</b> REITs are managed by experienced professionals who make
                        property acquisition and management decisions. You don't have to worry about the day-to-day
                        responsibilities of property ownership.
                    </p>

                    <p>6. <b>Tax Advantages:</b> REITs enjoy certain tax benefits, and they can be a tax-efficient
                        way to invest in real estate.

                    <p>7. <b>Accessibility:</b> You can start investing in REITs with a relatively small amount of
                        capital, making them accessible to a wide range of investors.

                    </p>

                    <p>In summary, REITs offer the potential for both regular income and capital appreciation, all
                        while providing diversification and professional management. They're a compelling choice for
                        investors looking to enter the real estate market without the complexities of direct
                        property ownership.

                    </p>


                </div>


                <div class="row">
                    <div class="col-sm-12 col-md-4">

                        <img src="frontend/assets/images/gh.jpg" alt="realestate">

                    </div>

                    <div class="col-sm-12 col-md-4">

                        <img src="frontend/assets/images/gh3.jpg" alt="realestate">

                    </div>

                    <div class="col-sm-12 col-md-4">

                        <img src="frontend/assets/images/gh2.jpg" alt="realestate">

                    </div>

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