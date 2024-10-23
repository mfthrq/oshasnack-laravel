<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Profile</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="rt_bg-secondary">

    @include('layouts.navbar-customer')

    <!-- team details about area -->
    <div class="rts-team-details-area rts-section-gapBottom mt--35 about-shape">
        <div class="container">
            <div class="row g-5 align-items-xxl-center align-items-lg-start">
                <!-- start details arae -->
                <div class="col-xl-12 col-lg-12 col-md-12 ml--30 mt_sm--50 mt_md--50 mt_lg--50 ml_sm--0">
                    <div class="team-details-wrapper">
                        <h3 class="title" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">Profile</h3>
                        @if(session('username'))
                            <h6 class="fw-light">Halo, Selamat Datang <span class="fw-bold"> {{ session('username') }}!</span></h6>
                        @endif

                            <h6> Nama Lengkap </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ session('username') }}</p>
                            </div>

                            <h6> Email </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ session('email') }}</p>
                            </div>

                            <h6> Nomor Telepon </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ session('no_telp') }}</p>
                            </div>

                            <h6> Alamat </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ session('alamat') }}</p>
                            </div>
                        
                    </div>
                    
                    <div class="d-flex gap-4">
                        <a href="#" class="rts-btn btn-primary fw-bold" style="color: #771e56">Edit Data</a>
                        <form id="logout-form" action="{{ route('pelanggan.logout') }}" method="POST" >
                            @csrf
                            <button type="submit" class="rts-btn btn-danger fw-bold">Logout</button>
                        </form>
                    </div>
                </div>
                <!-- start details arae End -->
            </div>
        </div>
    </div>
    <!-- team details about area End -->


    @include('layouts.footer-customer')


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
    <script src="assets/assets_customer/js/main.js"></script>

</body>

</html>