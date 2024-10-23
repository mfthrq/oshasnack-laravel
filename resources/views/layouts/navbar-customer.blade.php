    <!-- start header area -->
    <div class="rts-header-area header-inner-one header--sticky">
        <div class="container-header">
            <div class="row align-items-center ptb_sm--10 padding-controler-header">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                    <div class="header-left">
                        <a href="/">
                            <img src="{{ asset('assets/assets_customer/images/logo_oshasnack.jpg')}}" alt="Logo Oshasnack"
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
                                    <a class="single fs-4" href="/produk" style="color: {{ Request::is('produk') || Request::is('detail-produk/*') ? '#fdc00d' : '#ffffff' }}">Produk</a>
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
                        @if(session('username'))
                            <a href="/keranjang" class="rts-btn btn-primary fw-bold" style="color: #771e56">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 32 32" height="24px"  width="24px" version="1.1" viewBox="0 0 32 32" xml:space="preserve"><g id="Cart"><path d="M27.7627,7.3535C27.5728,7.1289,27.2939,7,27,7H8.5664L7.9663,4.7432C7.8501,4.3047,7.4531,4,7,4H4C3.4478,4,3,4.4473,3,5   s0.4478,1,1,1h2.231l3.8027,14.3047c0.0146,0.0557,0.0459,0.1016,0.0693,0.1523c0.022,0.0479,0.0366,0.1006,0.0659,0.1445   c0.0332,0.0498,0.0791,0.0879,0.1201,0.1309c0.0342,0.0352,0.0625,0.0771,0.1016,0.1074c0.0474,0.0352,0.1025,0.0566,0.1553,0.084   c0.0439,0.0234,0.083,0.0527,0.1299,0.0693C10.7783,21.0283,11,21.0234,11,21.0234V21h14c0.4893,0,0.9063-0.3301,0.9863-0.8125   l2-12.0352C28.0347,7.8623,27.9526,7.5771,27.7627,7.3535z M24.1523,19H11.7817l-1.0078-4h14.0503L24.1523,19z M25.1563,13H10.2759   L9.2798,9h16.5405L25.1563,13z M15,24c0,1.1045-0.8955,2-2,2s-2-0.8955-2-2s0.8955-2,2-2S15,22.8955,15,24z M25,24   c0,1.1045-0.8955,2-2,2s-2-0.8955-2-2s0.8955-2,2-2S25,22.8955,25,24z" fill="#771E56" /></g><g id="Sound"/><g id="List"/><g id="Settings"/></svg>
                            </a>
                            <a href="/profile" class="rts-btn btn-primary fw-bold" style="color: #771e56">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 48 48" height="24px"  width="24px" id="Layer_3" version="1.1" viewBox="0 0 48 48" xml:space="preserve" class="__web-inspector-hide-shortcut__"><circle cx="24" cy="17" fill="#771E56" r="6"/><path d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M35.812,40.113v-3.301  C35.812,30.289,30.523,25,24,25c-6.524,0-11.812,5.289-11.812,11.812v3.301C7.231,36.473,4,30.621,4,24C4,12.954,12.954,4,24,4  s20,8.954,20,20C44,30.621,40.769,36.473,35.812,40.113z" fill="#771E56" /></svg>
                            </a>
                        @else
                            <a href="/login-pelanggan" class="rts-btn btn-primary fw-bold" style="color: #771e56">Login</a>
                        @endif
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
        <div class="inner" style="background-color: rgba(119, 30, 86, 0.425);">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a href="/"><img src="{{ asset('assets/assets_customer/images/logo_oshasnack.jpg')}}" alt="_logo" /></a>
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
                    <li class="single-items">
                        <a class="navmain" href="/produk" style="color: {{ Request::is('produk') || Request::is('detail-produk/*') ? '#fdc00d' : '#ffffff' }}">Produk</a>
                    </li>
                    <li class="single-items">
                        <a class="navmain" href="/testimoni" style="color: {{ Request::is('testimoni') ? '#fdc00d' : '#ffffff' }}">Testimoni</a>
                    </li>
                    <li class="single-items">
                        <a class="navmain" href="/kontak" style="color: {{ Request::is('kontak') ? '#fdc00d' : '#ffffff' }}">Kontak</a>
                    </li>
                </ul>
            </nav>
            <!-- nav style hear End -->
        </div>
    </div>
    <!-- mobile menu end -->
    <!-- end mobile menue -->
