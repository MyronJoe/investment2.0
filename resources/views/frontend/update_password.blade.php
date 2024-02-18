<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Account Section Starts Here -->
<div class="account-section padding-top padding-bottom">
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                <div class="section__thumb rtl me-5">
                    <img src="../assets/images/account/thumb.png" alt="account">
                </div>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="account__form__wrapper">
                    <h3 class="title">Change Password</h3>
                    <form class="form account__form" autocomplete="off" action="{{route('update_pass', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       

                        <div class="form-group">
                            <input type="password" name="old_password" class="form-control form--control" placeholder="Enter Old Password" value="{{ old('old_password') }}">
                            @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control form--control" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" name="confirm_password" class="form-control form--control" placeholder="Re-Password" value="{{ old('confirm_password') }}">
                            @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn cmn--btn mt-4" name="adduser">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account Section Ends Here -->

<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->

@include('frontend.include.footerlink')