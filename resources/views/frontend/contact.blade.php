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
                <h1>Contact Us</h1>
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
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- contact Section Starts Here -->
@include('frontend.include.contact')
<!-- contact Section Ends Here -->

<!-- Star Google Maps
    ============================================= -->
<div class="maps-area">
    <div class="container-full">
        <div class="row">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.202444676559!2d-0.1930599844786717!3d51.54618671568787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761077813a69b7%3A0x4a16d8066061f410!2s98%20W%20End%20Ln%2C%20London%20NW6%202LU%2C%20UK!5e0!3m2!1sen!2sng!4v1668079044532!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Google Maps -->


<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->