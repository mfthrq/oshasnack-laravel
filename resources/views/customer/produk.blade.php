<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Produk</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

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

    <div class="rts-shope-area">
        <div class="container">
            <div class="row g-5 mt--10">
                <div class="title-area text-center un-sub">
                    <h3 class="title" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                        Produk <span style="color: #fdc00d;">Osha Snack</span>
                    </h3>
                </div>

                @foreach ($produks as $produk)
                    <!-- single product -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="trending-items_wrapper live-tranding-count m--0">
                            <div class="thumbnail" style="background-color: #fdc00d; border-radius: 10px;">
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/foto_produk/' . $produk->foto_produk) }}"
                                        alt="{{ $produk->nama }}"
                                        style="width: 300px; height: 300px; object-fit: contain; margin-top: 10px; margin-bottom: 10px;" />
                                </a>
                            </div>
                            <div class="product-discription">
                                <div class="product-left">
                                    <h5 class="title">{{ $produk->nama }}</h5>
                                    <a class="rts-btn btn-secondary radious-5"
                                        href="{{ route('produk.detail', $produk->id) }}">Detail Produk</a>
                                </div>
                                <div class="product-right">
                                    <h5 class="fs-2 price">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product End-->
                @endforeach

                <div class="row mt--50">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- all scripts are here -->
    <script src="{{ asset('assets/assets_customer/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/swiper.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/count-down.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/isotop.min.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/plugins/sal.min.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/plugins/paper-core.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/plugins/simplex-nois.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/plugins/contact-form.js') }}"></script>

    <script src="{{ asset('assets/assets_customer/js/vendor/imageloded.js') }}"></script>
    <script src="{{ asset('assets/assets_customer/js/vendor/bootstrap.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/assets_customer/js/main.js') }}"></script>

</body>

</html>
