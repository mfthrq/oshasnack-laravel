<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Login</title>
    <meta name="robots" content="noindex" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="theme-style-mode" content="1" />
    <!-- 0 == light, 1 == dark -->

    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/assets_customer/images/logo_oshasnack.jpg') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/plugins/gordita.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/plugins/fontawesome-pro-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/vendor/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/vendor/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/assets_customer/css/style.css') }}">
</head>

<body class="rt_bg-secondary">

    @include('layouts.navbar-customer')

    <!-- Start Log-In area -->
    <div class="rts-login-area mt--35 rts-section-gapBottom">
        <h3 align="center" >Login</h3>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <form class="login-wrapper" action="{{ route('pelanggan.login') }}" method="POST">
                        @csrf
                        @if ($errors->has('loginError'))
                            <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
                        @endif
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" id="exampleInputEmail1" name="emailSignIn" class="form-control" required>
                        </div>
                        <div class="mb--15">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" id="exampleInputPassword1" name="loginPassword"  class="form-control" required>
                        </div>
                        <p class="mb-4">Belum punya akun? <a class="fw-bold" href="/signup-pelanggan">Signup</a></p>
                        <button type="submit" class="fw-bold rts-btn btn-primary radious-5 mr--15 mb--15" style="color: #771E56;">Login</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
    <!-- End Log-In area -->

    <!-- The cursor elements -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->

    <!-- all scripts are hear -->
    <script src="assets/assets_customer/js/vendor/jquery.min.js"></script>
    <script src="assets/assets_customer/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/assets_customer/js/plugins/nice-select.js"></script>
    <script src="assets/assets_customer/js/vendor/waypoint.js"></script>
    <script src="assets/assets_customer/js/vendor/swiper.js"></script>
    <script src="assets/assets_customer/js/vendor/count-down.js"></script>
    <script src="assets/assets_customer/js/vendor/isotop.min.js"></script>
    <script src="assets/assets_customer/js/vendor/counterup.min.js"></script>
    <script src="assets/assets_customer/js/plugins/sal.min.js"></script>
    <script src="assets/assets_customer/js/plugins/paper-core.js"></script>
    <script src="assets/assets_customer/js/plugins/simplex-nois.js"></script>
    <script src="assets/assets_customer/js/plugins/contact-form.js"></script>

    <script src="assets/assets_customer/js/vendor/imageloded.js"></script>
    <script src="assets/assets_customer/js/vendor/bootstrap.min.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>