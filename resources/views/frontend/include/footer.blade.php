<!-- Star Footer
    ============================================= -->
<footer class="bg-dark">
    <div class="container">
        <div class="footer-content default-padding">
            <div class="row">

                <div class="equal-height col-md-4 col-sm-6 item">
                    <div class="f-item about">
                        <h4 class="widget-title">Who We Are</h4>
                        <p>
                            We have invented several unique strategies to help our clients grow and manage their
                            financial resources effectively. As rated by clients, we offer nothing short of the best
                            result.
                        </p>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul>
                            <li><a href="{{route('realestate')}}">Real Estate</a></li>
                            <li><a href="{{route('stock')}}">Stock &amp; Options</a></li>
                            <li><a href="{{route('forex')}}">Forex Trading</a></li>
                            <li><a href="{{route('cryptocurrency')}}">Crypto Investment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Sitemap</h4>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>

                            <li>
                                <a href="{{route('privacy')}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-4 col-sm-6 item">
                    <div class="f-item contact address">
                        <h4 class="widget-title">Contact Us</h4>
                        @foreach($utilities as $key => $data)
                        <ul>
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <span>{{$data->address}}</span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-email"></i> </div>
                                <span>{{$data->email}}</span>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom text-light">
        <div class="container">
            <div class="row">
                @foreach($utilities as $key => $item)
                <div class="col-md-12 text-center">
                    <p>Copyrigh © 2023 {{$item->site_name}}. All Rights Reserved.</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer-->

<script src="{{ asset('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>

<!-- jQuery Frameworks
    ============================================= -->
<script src="frontend/assets/js/jquery-1.12.4.min.js"></script>
<script src="frontend/assets/js/bootstrap.min.js"></script>
<script src="frontend/assets/js/equal-height.min.js"></script>
<script src="frontend/assets/js/jquery.appear.js"></script>
<script src="frontend/assets/js/jquery.easing.min.js"></script>
<script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
<script src="frontend/assets/js/modernizr.custom.13711.js"></script>
<script src="frontend/assets/js/owl.carousel.min.js"></script>
<script src="frontend/assets/js/wow.min.js"></script>
<script src="frontend/assets/js/progress-bar.min.js"></script>
<script src="frontend/assets/js/isotope.pkgd.min.js"></script>
<script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="frontend/assets/js/count-to.js"></script>
<script src="frontend/assets/js/YTPlayer.min.js"></script>
<script src="frontend/assets/js/circle-progress.js"></script>
<script src="frontend/assets/js/bootsnav.js"></script>
<script src="frontend/assets/js/main.js"></script>




</body>

@include('backend.includes.sweetalert')

</html>