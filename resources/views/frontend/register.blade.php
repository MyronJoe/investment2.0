<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from app.assetcapholdings.com/user/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 09:33:17 GMT --><!-- Added by HTTrack -->

<head><!-- /Added by HTTrack -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MidasTouchExchange - Register</title>

    <link rel="shortcut icon" href="frontend/assets/images/pfavi.png" type="image/x-icon">

    <!-- font  -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&amp;family=Maven+Pro:wght@400;500;600&amp;display=swap" rel="stylesheet">


    <link href="frontend/assets/css/register/bootstrap.min.css" rel="stylesheet">

    <link href="frontend/assets/css/register/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="frontend/assets/css/register/line-awesome.min.css">

    <link rel="stylesheet" href="frontend/assets/css/register/animate.css">

    <!-- Plugin Link -->
    <link rel="stylesheet" href="frontend/assets/css/register/slick.css">
    <link rel="stylesheet" href="frontend/assets/css/register/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/register/apexcharts.css">

    <!-- Main css -->
    <link rel="stylesheet" href="frontend/assets/css/register/main.css">


    <link rel="stylesheet" href="frontend/assets/css/register/custom.css">

    <link rel="stylesheet" href="https://app.assetcapholdings.com/assets/templates/invester/css/color.php?color=5e8cf1">
    <script src="frontend/assets/js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>

    <style>
        .pb-120 {
            padding-bottom: clamp(40px, 4vw, 40px);
        }

        .pt-120 {
            padding-top: clamp(40px, 4vw, 40px);
        }

        .container {
            max-width: 1140px;
        }
    </style>
    <script src="#" async=""></script>

</head>

<body>
    <!-- Account Section -->
    <section class="account-section position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <a href="/" class="text-center d-block mb-3 mb-sm-4 auth-page-logo">
                        <h3 style="color: black;">MidasTouchExchange</h3>
                    </a>
                    <form id="register-form" class="verify-gcaptcha account-form" autocomplete="off" action="{{route('addUser')}}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <h4 class="mb-2">Create an Account</h4>
                            <p>You can create account using email or username and the registration is fully free</p>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">First name</label>
                                    <input id="first-name" type="text" class="form-control form--control checkUser h-45" name="name" value="{{ old('name') }}">

                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Last name</label>
                                    <input id="last-name" type="text" class="form-control form--control checkUser h-45" name="lname" value="{{ old('lname') }}">

                                    @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control form--control h-45 checkUser" name="email" value="{{ old('email') }}">

                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control form--control h-45" name="password" value="{{ old('password') }}">

                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input id="confirm_password" type="password" class="form-control form--control h-45" name="confirm_password" value="{{ old('confirm_password') }}">

                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Referral code (Optional)</label>
                                    <input id="ref_code" type="text" class="form-control form--control h-45 checkUser" name="ref_code" value="{{ old('ref_code') }}">
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="d-flex flex-wrap gap-2 justify-content-between">
                                    <div class="form-group custom--checkbox">
                                        <input type="checkbox" id="agree" name="agree" class="form-check-input" required="">
                                        <label for="agree">I agree with <a class="link-color">Privacy Policy</a>
                                            ,
                                            <a class="link-color">Terms and Service</a></label> <span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">

                                <button type="submit" id="register-btn" class="btn btn--base w-100">Create
                                    Account</button>
                            </div>
                            <div class="col-12 mt-4">
                                <p class="text-center">Already have an account? <a href="{{route('login')}}" class="fw-bold text--base">Login Account</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>

    <!-- Account Section -->
    <script src="frontend/assets/js/jquery-3.6.0.min.js"></script>
    <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Pluglin Link -->
    <script src="frontend/assets/js/slick.min.js"></script>
    <script src="frontend/assets/js/magnific-popup.min.js"></script>
    <script src="frontend/assets/js/apexcharts.min.js"></script>


    <!-- Main js -->
    <script src="frontend/assets/js/main.js"></script>


    <link rel="stylesheet" href="frontend/assets/css/register/iziToast.min.css">

    <script src="frontend/assets/js/auth-register.js"></script>

</body>

@include('backend.includes.sweetalert')

</html>