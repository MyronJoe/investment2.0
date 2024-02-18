<footer class="main-footer">
    <div class="footer-left">
        <a href="/">MidasTouchExchange Admin</a></a>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>

<div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logout Notification</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-black">Do you really wish to logout from MetaCoin?</h5>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <form id="logout-modal">
                            <!-- <input type="hidden" name="_token" value="VElmUHzfyiAN5xvj9YXGYON0rGI0Cef7zJho0Md4">                       -->
                            <button class="btn btn-primary" type="submit">Log Me Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>

<!-- General JS Scripts -->
<script src="../frontend/dashboard/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- <script src="../frontend/dashboard/js/page/index.js"></script> -->
<!-- Template JS File -->
<script src="../frontend/dashboard/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../frontend/dashboard/js/custom.js"></script>
<script src="backend/js/dashboard.js"></script>
</body>
<!-- /  21 Nov 2019 03:47:04 GMT -->


@include('backend.includes.sweetalert')

</html>