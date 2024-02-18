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
                <h1>Stock &amp; Options</h1>
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
                    <li class="active">Stock &amp; Options</li>
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
                    <img src="frontend/assets/images/stock1.jpg" alt="Thumb">
                </div>
                <div class="info">
                    <h2>Stock and Options</h2>
                    <p>From time to time, corporations issue stocks to raise funds to expand and operate their
                        businesses more efficiently. Investors buy these stocks predominantly on stock exchanges. A
                        stock is a form of security that indicates the holder has proportionate ownership in the
                        issuing corporation. This is the typical definition of a traditional stock market investor
                        operating with long-term ambitions.</p>
                    <p>Stock trading is another side of the coin. It involves buying and selling shares in
                        corporations in an effort to make money on daily changes in price. This short-term approach
                        is exactly what differentiates stock traders from traditional stock market investors who go
                        into it for the long haul. Our involvement and specialty in this short-term approach of
                        stock trading doesn’t mean that We discourage long-term stock investments in the stock
                        markets.</p>
                    <p>We diversify our approach with valuable and inevitably needed Options in the category of
                        agriculture, energy and metals. Most traded Options like gold, natural gas and sugar remain
                        evergreen avenues for profits in the commodity markets. We focus more on Options during
                        periods of high market volatility.</p>
                    <br>
                    <li>
                        <h5>Global Market Exchange Flow Chart.</h5>
                    </li>
                    <li>
                        <h5>Cash Flow and Control In Stock Exchange</h5>
                    </li>
                    <li>
                        <h5>Internation and Global Stock Market Rates</h5>
                    </li>
                    <br>
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