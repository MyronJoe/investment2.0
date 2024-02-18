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
                <h1>Crypto Currency Investment</h1>
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
                    <li class="active">Crypto Currency</li>
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
                    <img src="frontend/assets/images/crypto.jpg" alt="Thumb">
                </div>
                <div class="info">
                    <p>Cryptocurrency is typically decentralized digital money designed for internet usage. After
                        Bitcoin was launched in 2009 as the first cryptocurrency, other cryptocurrencies emerged.
                    </p>
                    <p>Similar to Forex patterns, we take advantage of the dips and moons in numerous
                        cryptocurrencies to advance the financial interests of our clients worldwide. With our
                        experienced team of experts, We utilize trending strategies and available softwares in the
                        market to maximize profits year after year.</p>
                    <p><!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"> </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "350",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    <p></p>
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