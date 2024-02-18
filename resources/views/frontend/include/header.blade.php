<!-- Start Header Top 
    ============================================= -->
<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            @foreach($utilities as $key => $data)
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <span>Email</span> {{$data->email}}
                            </div>
                            @endforeach
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 social text-right">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="frontend/assets/images/logo.png" class="logo" alt="Logo"><b style="color: black;">MidasTouchExchange</b>
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li><a href="{{route('about')}}">Who We Are</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">What We Do</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('realestate')}}">Real Estate</a></li>
                            <li><a href="{{route('stock')}}">Stock &amp; Options</a></li>
                            <li><a href="{{route('forex')}}">Forex Trading</a></li>
                            <li><a href="{{route('cryptocurrency')}}">Crypto Investment</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('all-plans')}}">Plans &amp; Programs</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                    <li>
                        <a href="{{route('contact')}}">Support</a>
                    </li>

                    @if (Route::has('login'))
                    @auth
                    @if(Auth::user()->user_type == 0)
                    <li>
                        <a href="{{route('user_dashboard')}}">Dashboard</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('admin_dashboard')}}">Dashboard</a>
                    </li>
                    @endif
                    @endauth
                    @endif


                    @if (Route::has('login'))
                    @auth
                    <li class="dropdown">
                        <a href="{{url('logout')}}">Logout</a>
                    </li>
                    @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Started</a>
                        <ul class="dropdown-menu">

                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>

                        </ul>
                    </li>
                    @endauth
                    @endif

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fas fa-times"></i></a>
            <div class="widget">
                <img src="frontend/assets/images/logo.png" class="logo" alt="Logo"><b style="color: black;">MidasTouchExchange</b>
                <p>
                    Through our expertise and effective market tools, we pay constant attention to what happens in
                    the financial markets and we milk it week after week. This brings about satisfactory results for
                    our clients, enhanced value for both clients and this firm as well.
                </p>
            </div>
            <div class="widget contact address">
                <div>
                    <ul>
                        @foreach($utilities as $key => $data)
                        <li>
                            <div class="content">
                                <p>Location</p><strong>{{$data->address}}</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>EMAIL</p><strong>{{$data->email}}</strong>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="widget social">
                <ul class="link">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->

<!-- Whatsapp Starts Here -->

<!-- <div>
    <a href="https://wa.me/123456788?text=Welcome%20to%20Strongwise%20finance%2C%20your%20wealth%20is%20safe%20with%20us." class="whatsapp" target="_blank"><i class="lab la-whatsapp"></i></a>
</div> -->

@include('sweetalert::alert')