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
                <h1>Forex Trading</h1>
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
                    <li class="active">Forex Trading</li>
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
                    <img src="frontend/assets/images/forex.jpg" alt="Thumb">
                </div>
                <div class="info">
                    <h2>We Help to Utilize Your Assets into Automation</h2>
                    <p>The foreign exchange market is a global marketplace for exchanging national currencies
                        against one another.</p>
                    <p>Exploring the Forex (foreign exchange) market with the MidasTouchExchange trading team
                        enables clients to take advantage of the increases and decreases in currency value
                        worldwide. The foreign exchange market remains the most liquid market in the world with a
                        daily trading volume of over $5 trillion. Getting the best out of it all with us depends on
                        individual permissive will and we’re proud to have a great number of already existing
                        clients who are genuinely satisfied so far.</p>
                    <br>
                    <p><!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"> </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                            {
                                "width": 100 % ,
                                "height": 400,
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
                                "isTransparent": false,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END --></p>
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