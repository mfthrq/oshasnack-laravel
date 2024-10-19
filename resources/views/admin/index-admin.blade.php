<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="./assets/vendor/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_oshasnack.jpg">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script>
        // Render localStorage JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
        if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
        if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>
</head>

<body class="geex-dashboard">
    <main class="geex-main-content">
        @include('layouts.sidebar')

        <div class="geex-content">
            <div class="geex-content__header">
                <div class="geex-content__header__content">
                    <h2 class="geex-content__header__title">Dashboard</h2>
                    <p class="geex-content__header__subtitle">Selamat datang {{ Auth::guard('admin')->user()->name }} di Website Admin Oshasnack!</p>
                </div>

                @include('layouts.header')
            </div>
            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    <div class="geex-content__feature mb-40">
                        <div class="geex-content__feature__card">
                            <div class="geex-content__feature__card__text">
                                <p class="geex-content__feature__card__subtitle">Total Pemesanan</p>
                                <h4 class="geex-content__feature__card__title">200TB</h4>
                                <span class="geex-content__feature__card__badge">+2.5%</span>
                            </div>
                            <div class="geex-content__feature__card__img">
                                <img src="assets/img/feature/feature-2.svg" alt="feature" />
                            </div>
                        </div>
                        <div class="geex-content__feature__card">
                            <div class="geex-content__feature__card__text">
                                <p class="geex-content__feature__card__subtitle">Total Pelanggan</p>
                                <h4 class="geex-content__feature__card__title">{{ number_format($totalPelanggan) }}</h4>
                            </div>
                            <div class="geex-content__feature__card__img">
                                <img src="assets/img/feature/feature-3.svg" alt="feature" />
                            </div>
                        </div>
                    </div>

                    <div class="geex-content__feature mb-40">
                        <div class="geex-content__feature__card">
                            <div class="geex-content__feature__card__text">
                                <p class="geex-content__feature__card__subtitle">Pemesanan Diverifikasi</p>
                                <h4 class="geex-content__feature__card__title">87,245k</h4>
                                <span class="geex-content__feature__card__badge danger-color">-4.4%</span>
                            </div>
                            <div class="geex-content__feature__card__img">
                                <img src="assets/img/feature/feature-3.svg" alt="feature" />
                            </div>
                        </div>
                        <div class="geex-content__feature__card">
                            <div class="geex-content__feature__card__text">
                                <p class="geex-content__feature__card__subtitle">Pemesanan Berhasil</p>
                                <h4 class="geex-content__feature__card__title">200TB</h4>
                                <span class="geex-content__feature__card__badge">+2.5%</span>
                            </div>
                            <div class="geex-content__feature__card__img">
                                <img src="assets/img/feature/feature-2.svg" alt="feature" />
                            </div>
                        </div>
                        <div class="geex-content__feature__card">
                            <div class="geex-content__feature__card__text">
                                <p class="geex-content__feature__card__subtitle">Pemesanan Gagal</p>
                                <h4 class="geex-content__feature__card__title">87,245k</h4>
                                <span class="geex-content__feature__card__badge danger-color">-4.4%</span>
                            </div>
                            <div class="geex-content__feature__card__img">
                                <img src="assets/img/feature/feature-3.svg" alt="feature" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Script jQuery dan Bootstrap -->
    <script src="./assets/vendor/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="./assets/vendor/js/jquery/jquery-ui.js"></script>
    <script src="./assets/vendor/js/bootstrap/bootstrap.min.js"></script>

    <!-- Script lainnya -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" referrerpolicy="origin"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
