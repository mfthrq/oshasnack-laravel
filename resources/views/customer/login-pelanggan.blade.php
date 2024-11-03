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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .form-control:focus {
            background-color: initial;
            box-shadow: none;
            color: #ffffff;
        }
        /* Atur ukuran SweetAlert */
        .swal2-popup {
            width: 500px !important;
            /* Atur lebar popup sesuai kebutuhan */
            max-width: 90vw;
            /* Pastikan popup tidak melebihi lebar layar */
            font-size: 15px;
            /* Atur ukuran font di dalam popup */
        }

        /* Atur ukuran tombol OK */
        .swal2-confirm {
            font-size: 15px;
            /* Atur ukuran font tombol */
            padding: 10px 20px;
            /* Atur padding untuk tombol */
            min-width: 100px;
            /* Atur lebar minimum tombol */
            background-color: #771E56 !important;
            /* Atur warna latar belakang tombol */
            color: #fff;
            /* Atur warna teks tombol menjadi putih */
            border: none;
            /* Hapus border jika ada */
        }

        /* Ubah warna saat tombol hover */
        .swal2-confirm:hover {
            color: #771E56;
            background-color: #FEC10E !important;
            /* Warna latar belakang saat hover */
        }
    </style>
</head>

<body class="rt_bg-secondary">

    @include('layouts.navbar-customer')

    <!-- Start Log-In area -->
    <div class="rts-login-area mt--35 rts-section-gapBottom">
        <h3 align="center" >Login</h3>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <form class="login-wrapper" action="{{ route('customer.login.submit') }}" method="POST">
                        @csrf
                        @if ($errors->has('loginError'))
                            <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
                        @endif
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" id="exampleInputEmail1" name="emailSignIn" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" id="exampleInputPassword1" name="loginPassword" placeholder="Masukkan Password" class="form-control" style="height: 60px;">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer; background-color: #ffc107; height: 60px; border:#771E56;">
                                        <i id="eyeIcon" class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Belum punya akun? <a class="fw-bold" href="/signup">Signup</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('exampleInputPassword1');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>