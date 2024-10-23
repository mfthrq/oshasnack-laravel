<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Keranjang</title>
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

    <!-- rts card area start -->
    <div class="rts-card-area rts-section-gapBottom mt--35">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="title-text-start">
                        Keranjang <span style="color: #FEC10E;">Produk</span>
                    </h4>
                </div>
            </div>
            <div class="row mt--10 g-5">
                <!-- card left area start -->
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <!-- start single product cart -->
                    <div class="row align-items-center transition single-cart-inner">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                            <div class="thumbnail">
                                <img src="assets/assets_customer/images/cart/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="discription">
                                <span class="name">Nighty</span>
                                <p class="details">Shimmer</p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                            <p class="product-price pr--15">$69.00</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="cart-counter" id="product-5">
                                <button class="button pl--0">-</button>
                                <input type="text" class="input" value="1" />
                                <button class="button pr--0">+</button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 remove">
                            <a class="rts-btn btn-secondary radious-5 " href="#">Hapus</a>
                        </div>
                    </div>
                </div>
                <!-- card area left end -->
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <!-- shipping check start -->
                            <div class="shipping-check">
                                <span class="title">Pengiriman</span>
                            </div>

                            <div class="shipping-location">
                                <span class="shipping-to">Pengiriman Ke <br> 
                                <span class="change-address"><i class="fal fa-map-marker-alt mr--5"></i>[alamat pelanggan]</span>
                            </div>

                            <div class="total-area">
                                <span class="title">Total</span>
                                <span class="total-price">$364.00</span>
                            </div>
                            <!-- total amount area end -->
                        </div>
                        <div class="btn-checkout-area">
                            <a class="fw-bold rts-btn btn-primary checkout radious-5 w--100 mt--30" href="check-out.html" style="color: #611746;">Pesan</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- rts card area end -->

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