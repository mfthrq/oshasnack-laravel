<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Detail Produk</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        input[type="number"]:focus {
            background-color: transparent;
            /* Menghapus latar belakang saat fokus */
            outline: none;
            /* Menghilangkan outline default jika diinginkan */
        }

        .btn-kuantitas {
            background-color: #fdc00d;
            border: 1px solid #fdc00d;
            border-radius: 5px;
            color: #611746;
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

    <!-- expolore area start -->
    <div class="rts-explore-area rts-section-gapBottom mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-md-12">
                    <div class="explore-thumbnail d-flex justify-content-center"
                        style=" background-color:#fdc00d; border-radius: 10px;">
                        <img src="{{ asset('/assets/foto_produk/' . $produk->foto_produk) }}" width="400px"
                            height="400px" alt="{{ $produk->nama }}">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-md-12 col-sm-12 col-12 pl--40 pl_lg-5 pl_md-0 pl_sm--0">
                    <div class="expo-cart-wrapper">
                        <h3 class="mb-0">{{ $produk->nama }}</h3>
                        <h5 class="mt-4 mb-4">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h5>
                        <p class="disc-pricing" style="text-align: justify; color: #ffffff;">
                            {{ $produk->deskripsi }}
                        </p>

                        <div class="explore-single-pricing">
                            <div class="last-price explore-p flex-fill">
                                <h6 style="color: #fdc00d;">Komposisi</h6>
                                <ul style="color: #ffffff;">
                                    @foreach (explode(',', $produk->komposisi) as $komposisi)
                                        <li>{{ $komposisi }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="last-price explore-p flex-fill ms-md-3">
                                <h6 style="color: #fdc00d;">Keunggulan</h6>
                                <ul>
                                    @foreach (explode(',', $produk->keunggulan) as $keunggulan)
                                        <li>{{ $keunggulan }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 flex-column flex-md-row" style="height: 50px;">
                            {{-- <div class="d-flex me-4">
                                <button class="fs-1 fw-bold radious-5 btn-kuantitas" type="button" onclick="decreaseQuantity()">-</button>
                                
                                <input type="number" name="kuantitas" class="fw-bold form-control text-center ms-2 me-2" value="1" min="1" aria-label="Kuantitas Produk" id="quantityInput" style="color: #fdc00d; border:1px solid #fdc00d; border-radius: 5px;" />
                        
                                <button class="fs-1 fw-bold  btn-kuantitas" type="button" onclick="increaseQuantity()" style="">+</button>
                            </div> --}}
                            {{-- @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="button-wrapper mt-2 mt-md-0">
                                <form action="{{ route('keranjang.tambah', $produk->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="rts-btn btn-primary radious-5 fw-bold" style="color: #611746;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 48 48" height="24px" id="Layer_1" version="1.1" viewBox="0 0 48 48" width="24px" xml:space="preserve">
                                            <g id="Layer_3">
                                                <path d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M35,26h-9v8.998h-4V26h-9v-4h9v-8.998h4V22h9V26z" fill="#771E56"/>
                                            </g>
                                        </svg>
                                        Tambah ke Keranjang
                                    </button>
                                </form>
                            </div> --}}

                            <div class="button-wrapper mt-2 mt-md-0">
                                <button
                                    onclick="tambahKeKeranjang({{ $produk->id }}, '{{ $produk->nama }}', '{{ $produk->harga }}', '{{ $produk->foto_produk }}')"
                                    class="rts-btn btn-primary radious-5 fw-bold" style="color: #611746;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        enable-background="new 0 0 48 48" height="24px" id="Layer_1" version="1.1"
                                        viewBox="0 0 48 48" width="24px" xml:space="preserve">
                                        <g id="Layer_3">
                                            <path
                                                d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M35,26h-9v8.998h-4V26h-9v-4h9v-8.998h4V22h9V26z"
                                                fill="#771E56" />
                                        </g>
                                    </svg>
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expolore area end -->

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const isLoggedIn = {!! session('username') ? 'true' : 'false' !!};
        // Fungsi menambah produk ke LocalStorage
        function tambahKeKeranjang(id, nama, harga, foto_produk) {
            if (!isLoggedIn) {
                // Tampilkan pesan jika pengguna belum login
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Anda harus login untuk menambahkan produk ke keranjang.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return; // Hentikan eksekusi lebih lanjut
            }

            // Ambil data keranjang dari LocalStorage (jika ada)
            let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];

            // Cek apakah produk sudah ada di keranjang
            let produk = keranjang.find(item => item.id === id);

            if (produk) {
                // Jika produk sudah ada, tambah kuantitasnya
                produk.jumlah += 1;
            } else {
                // Jika produk belum ada, tambahkan produk baru
                keranjang.push({
                    id: id,
                    nama: nama,
                    harga: harga,
                    foto: foto_produk,
                    jumlah: 1
                });
            }

            // Simpan kembali keranjang ke LocalStorage
            localStorage.setItem('keranjang', JSON.stringify(keranjang));

            // Tampilkan pesan sukses dengan SweetAlert
            Swal.fire({
                title: 'Berhasil!',
                text: 'Produk berhasil ditambahkan ke keranjang.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan ke halaman keranjang
                    window.location.href = '/keranjang';
                }
            });
        }
    </script>
</body>

</html>
