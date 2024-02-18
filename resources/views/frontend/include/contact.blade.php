<!-- Start Contact Area
    ============================================= -->
<div class="contact-area default-padding-top bottom-half">
    <div class="container">
        <div class="contact-items">
            <div class="row">
                <div class="col-md-6 address">
                    <div class="address-items text-center text-light" style="background-image: url(frontend/assets/images/contact-bg.png);">
                        @foreach($utilities as $key => $data)
                        <ul class="info">
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <h4>Office Location</h4>
                                <span>{{$data->address}}</span>
                            </li>
                            <li>

                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-email"></i> </div>
                                <h4>Email</h4>
                                <span>{{$data->email}}</span>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 form-box">
                    <h2>Let's lalk about your Plans</h2>
                    <p>
                        Talk to our team of expert and consultants about any proposed plan and idea towards making a
                        better living, in turn inmproving and growing your assets.
                    </p>
                    <form action="" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Your Plan *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->