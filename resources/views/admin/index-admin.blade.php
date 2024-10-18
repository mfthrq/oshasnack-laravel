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

        <div class="geex-customizer">
            <div class="geex-customizer__header">
                <h4 class="geex-customizer__title">Customizer</h4>
                <button class="geex-btn geex-btn__customizer-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="#BCBFDB" />
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="black" fill-opacity="0.8" />
                    </svg>
                </button>
            </div>
            <div class="geex-customizer__body">
                <div class="geex-customizer__single">
                    <h5 class="geex-customizer__single__title">Layout Types</h5>
                    <ul class="geex-customizer__list geex-customizer__list--layout">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--ltr active">
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.5" y="2.5" width="13" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect x="4.5" y="12.5" width="19" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect width="1" height="20" fill="white" />
                                </svg>
                                LTR
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--rtl">
                                RTL
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-0.5" y="0.5" width="13" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 2)" stroke="#AB54DB" />
                                    <rect x="-0.5" y="0.5" width="19" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 12)" stroke="#AB54DB" />
                                    <rect width="1" height="20" transform="matrix(-1 0 0 1 24 0)"
                                        fill="#AB54DB" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="geex-customizer__single">
                    <h4 class="geex-customizer__single__title">Mode Type</h4>
                    <ul class="geex-customizer__list geex-customizer__list--sidebar">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--light active">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="white" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#E7E7E7" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#464255" />
                                </svg>
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--dark">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="#2F2A36" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#D0D6DE" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#D0D6DE" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="geex-customizer-overlay"></div>
        </div>

        <div class="geex-content">
            <div class="geex-content__header">
                <div class="geex-content__header__content">
                    <h2 class="geex-content__header__title">Dashboard</h2>
                    <p class="geex-content__header__subtitle">Selamat datang [admin] di Website Admin Oshasnack!</p>
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
                                <p class="geex-content__feature__card__subtitle">Total Pengguna</p>
                                <h4 class="geex-content__feature__card__title">87,245k</h4>
                                <span class="geex-content__feature__card__badge danger-color">-4.4%</span>
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

    <!-- inject:js-->
    <script src="./assets/vendor/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="./assets/vendor/js/jquery/jquery-ui.js"></script>
    <script src="./assets/vendor/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" referrerpolicy="origin"></script>
    <script src="./assets/js/main.js"></script>
    <!-- endinject-->
</body>

</html>
