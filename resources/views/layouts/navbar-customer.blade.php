    <!-- start header area -->
    <div class="rts-header-area header-inner-one header--sticky">
        <div class="container-header">
            <div class="row align-items-center ptb_sm--10 padding-controler-header">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                    <div class="header-left">
                        <a href="/">
                            <img src="assets/assets_customer/images/logo_oshasnack.jpg" alt="Logo Oshasnack"
                                class="img-fluid" style="max-width: 150px" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 d-xl-block d-none">
                    <div class="main-menu-wrapepr">
                        <nav class="mainmenu-nav d-none d-xl-block">
                            <ul class="main-menu">
                                <li class="single-items off-arrow">
                                    <a class="single fs-4" href="/" style="color: {{ Request::is('/') ? '#fdc00d' : '#ffffff' }}">Utama</a>
                                </li>
                                <li class="single-items off-arrow">
                                    <a class="single fs-4" href="/tentang" style="color: {{ Request::is('tentang') ? '#fdc00d' : '#ffffff' }}">Tentang</a>
                                </li>
                                <li class="single-items off-arrow">
                                    <a class="single fs-4" href="/produk" style="color: {{ Request::is('produk') || Request::is('detail-produk') ? '#fdc00d' : '#ffffff' }}">Produk</a>
                                </li>
                                <li class="single-items off-arrow">
                                    <a class="single fs-4" href="/testimoni" style="color: {{ Request::is('testimoni') ? '#fdc00d' : '#ffffff' }}">Testimoni</a>
                                </li>
                                <li class="single-items off-arrow">
                                    <a class="single fs-4" href="/kontak" style="color: {{ Request::is('kontak') ? '#fdc00d' : '#ffffff' }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div
                    class="col-xl-5 col-lg-8 col-md-8 col-sm-12 justify-content-sm-center d-xsm-flex justify-content-sm-center d-xsm-flex">
                    <div class="header-right">
                        <a href="/login" class="rts-btn btn-primary fw-bold" style="color: #771e56">Login</a>
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button">
                                    <i class="fal fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENd Header Area -->

    <!-- start Mobile menue -->
    <!-- mobile menu start -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a href="/"><img src="assets/assets_customer/images/logo_oshasnack.jpg" alt="_logo" /></a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- nav style Start -->
            <nav>
                <ul class="main-menu">
                    <li class="single-items">
                        <a class="navmain" href="/" style="color: {{ Request::is('/') ? '#fdc00d' : '#ffffff' }}">Utama</a>
                    </li>
                    <li class="single-items">
                        <a class="navmain" href="/tentang" style="color: {{ Request::is('tentang') ? '#fdc00d' : '#ffffff' }}">Tentang</a>
                    </li>
                    <li class="single-items off-arrow">
                        <a class="single fs-4" href="/produk" style="color: {{ Request::is('produk') || Request::is('detail-produk') ? '#fdc00d' : '#ffffff' }}">Produk</a>
                    </li>
                    <li class="single-items">
                        <a class="navmain" href="/testimoni" style="color: {{ Request::is('testimoni') ? '#fdc00d' : '#ffffff' }}">Testimoni</a>
                    </li>
                    <li class="single-items off-arrow">
                        <a class="single fs-4" href="/kontak" style="color: {{ Request::is('kontak') ? '#fdc00d' : '#ffffff' }}">Kontak</a>
                    </li>
                </ul>
            </nav>
            <!-- nav style hear End -->
        </div>
    </div>
    <!-- mobile menu end -->
    <!-- end mobile menue -->
