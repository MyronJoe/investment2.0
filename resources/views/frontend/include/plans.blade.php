<br><br>
<h1 style="text-align:center">MidasTouchExchange Investment Plan</h1>
    <br>
    <!-- Star Pricing Area
    ============================================= -->
    <div class="pricing-area">
        <div class="container">
            <div class="pricing text-center">
                <div class="row">

                @foreach($plans as $key => $plan)
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-5 single-item">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <h4>{{$plan->name}}</h4>
                                </li>
                                <h4 style="color:Tomato;">${{$plan->min}} - ${{$plan->max}}</h4>
                                <li>Earn {{$plan->RIO}}% ROI</li>
                                <li>Trade {{$plan->duration}} Days<i class="fas fa-check-circle"></i></li>
                                <li>Live Support <i class="fas fa-check-circle"></i></li>
                                <li>{{$plan->payout}} <i class="fas fa-check-circle"></i></li>
                                <li class="footer">
                                    <a class="btn circle btn-dark border btn-sm" href="{{route('invest-now', $plan->id)}}">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->
    <br><br>