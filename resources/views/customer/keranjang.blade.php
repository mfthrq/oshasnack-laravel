<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Keranjang</title>
    <meta name="robots" content="noindex" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12" id="keranjang-list">
                    {{-- List Data Keranjang Dari Local Storage --}}
                </div>

                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <!-- shipping check start -->
                            <div class="shipping-check">
                                <span class="title fw-bold">Pengiriman</span>
                            </div>

                            <div class="shipping-location">
                                    <span class="change-address text-white">
                                        <i class="fal fa-map-marker-alt mr--5"></i>
                                        {{ session('alamat') }}
                                    </span>
                                </span>
                            </div>

                            <div class="total-area">
                                <h6 class="mb-0">Total</h6>
                                <span id="total-price" class="total-price">Rp0</span>
                            </div>
                            <!-- total amount area end -->
                        </div>
                        <div class="btn-checkout-area">
                            <a class="fw-bold rts-btn btn-primary checkout radious-5 w--100 mt--30"
                                href="/pembayaran" style="color: #611746;">Pesan</a>
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

    <script>
        // Fungsi untuk menampilkan produk di keranjang
        function tampilkanKeranjang() {
            // Ambil data keranjang dari LocalStorage
            let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];
            let keranjangList = document.getElementById('keranjang-list');
            let totalHarga = 0;

            if (keranjang.length === 0) {
                keranjangList.innerHTML = '<p class="alert alert-warning" style="color: #611746; background-color: #FEC10E; border: none;">Keranjang Anda kosong.</p>';
                document.getElementById('total-price').innerText = 'Rp0';
                return;
            }

            // Buat tampilan produk di keranjang
            keranjangList.innerHTML = keranjang.map(item => {
                let subtotal = item.harga * item.jumlah; // Hitung subtotal per produk
                totalHarga += subtotal; // Tambahkan ke total harga
                return `
                    <div class="row align-items-center single-cart-inner">
                        <div class="col-lg-3 col-md-2 col-sm-3 col-3">
                            <div class="thumbnail p-4" style="background-color: #FEC10E;">
                                <img src="assets/foto_produk/${item.foto}" alt="${item.nama}">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-3 col-3">
                            <div class="discription">
                                <p class="details m-0">${item.nama}</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                            <p class="product-price pr--15">Rp${Number(item.harga).toLocaleString('id-ID')}</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="cart-counter" id="product-5" style="border: 2px solid #FEC10E;">
                                <button class="button pl--0" onclick="ubahJumlah(${item.id}, 'kurangi')">-</button>
                                <input type="text" value="${item.jumlah}" disabled>
                                <button class="button pr--0" onclick="ubahJumlah(${item.id}, 'tambah')">+</button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 remove">
                            <button class="rts-btn btn-secondary radious-5" onclick="hapusDariKeranjang(${item.id})">Hapus</button>
                        </div>
                    </div>
                `;
            }).join('');

            document.getElementById('total-price').innerText = `Rp${Number(totalHarga).toLocaleString('id-ID')}`;
        }

        // Fungsi untuk mengubah jumlah produk di keranjang
        function ubahJumlah(id, action) {
            let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];
            let produk = keranjang.find(item => item.id === id);

            if (produk) {
                if (action === 'tambah') {
                    produk.jumlah += 1;
                } else if (action === 'kurangi' && produk.jumlah > 1) {
                    produk.jumlah -= 1;
                }

                // Simpan perubahan ke LocalStorage
                localStorage.setItem('keranjang', JSON.stringify(keranjang));

                // Tampilkan ulang keranjang
                tampilkanKeranjang();
            }
        }

        // Fungsi untuk menghapus produk dari keranjang
        function hapusDariKeranjang(id) {
            let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];

            // Filter produk yang tidak dihapus
            keranjang = keranjang.filter(item => item.id !== id);

            // Simpan perubahan ke LocalStorage
            localStorage.setItem('keranjang', JSON.stringify(keranjang));

            // Tampilkan ulang keranjang
            tampilkanKeranjang();
        }

        // Panggil fungsi untuk menampilkan keranjang saat halaman dimuat
        window.onload = tampilkanKeranjang;
    </script>
</body>

</html>
