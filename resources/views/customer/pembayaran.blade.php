<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Oshasnack | Pembayaran</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .custom-file-input {
            position: relative;
            width: 100%;
            height: 50px;
            cursor: pointer;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            background-color: #FEC10E;
        }

        .custom-file-input input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        /* Hover effect for the entire input container */
        .custom-file-input:hover {
            background-color: #771E56;
            color: #FEC10E;
        }

        .custom-file-input::before {
            content: "Upload Bukti Transaksi";
            position: absolute;
            color: #771E56;
            font-weight: bold;
            font-size: 16px;
        }

        /* Change text color on hover */
        .custom-file-input:hover::before {
            color: #FEC10E;
        }

        .file-name {
            margin-top: 10px;
            color: #FEC10E;
            font-size: 14px;
            font-weight: bold;
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

<body class="rt_bg-secondary" onload="populateForm()">

    @include('layouts.navbar-customer')

    <!-- rts checkout area start -->
    <div class="rts-checkout-area rts-section-gapBottom mt--35">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="col-xl-12 col-lg-12 col-md-12 ml--30 mt_sm--50 mt_md--50 mt_lg--50 ml_sm--0">
                        <div class="team-details-wrapper">
                            <h3 class="title" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">Data
                                Diri</h3>
                            <h6> Nama Lengkap </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ $user->username }}</p>
                            </div>

                            <h6> Email </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ $user->email }}</p>
                            </div>

                            <h6> Nomor Telepon </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ $user->no_telp }}</p>
                            </div>

                            <h6> Alamat </h6>
                            <div class="service-sm" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                <p>{{ $user->alamat }}</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <!-- shipping check start -->
                            <div class="shipping-check">
                                <span class="title fw-bold">Pengiriman</span>
                            </div>

                            <div class="shipping-location">
                                <span class="change-address text-white">
                                    <i class="fal fa-map-marker-alt mr--5"></i>
                                    {{ $user->alamat }}
                                </span>
                                </span>
                            </div>

                            <div id="produk-list"></div>

                            <div class="total-area mb-4">
                                <h6 class="mb-0">Total</h6>
                                <span id="total-price" class="total-price">Rp0</span>
                            </div>
                            <!-- total amount area end -->
                            <div>
                                <img src="{{ asset('assets/assets_customer/images/qrcode_contoh.png') }}"
                                    alt="">
                                <h6 class="fs-3 mt-4 fw-normal">Lakukan pembayaran dengan scan QR Code QRIS diatas.</h6>
                            </div>
                        </div>
                        <form class="login-wrapper p-0 w-100 mt-4" style="border: none;" enctype="multipart/form-data"
                            id="payment-form" method="POST">
                            @csrf
                            <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="{{ $user->id }}">
                            <input type="hidden" name="tanggal_pemesanan" id="tanggal_pemesanan" value="">
                            <input type="hidden" name="total_produk" id="total_produk" value="">
                            <input type="hidden" name="total_biaya_transaksi" id="total_biaya_transaksi"
                                value="">
                            <input type="hidden" name="status" value="Diverifikasi">
                            <div class="custom-file-input">
                                <input type="file" name="bukti_transaksi" id="bukti_transaksi" required
                                    accept="image/*">
                            </div>
                            <span id="file-name" class="file-name "></span> <br>

                            <button type="submit" id="kirim-btn"
                                class="rts-btn btn-primary radious-5 w--100 fw-bold mt-2"
                                style="color:#771E56;">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts checkout area end -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form default

            // Ambil elemen file input
            const buktiTransaksi = document.getElementById('bukti_transaksi').files[0];

            // Cek apakah file melebihi 5MB
            if (buktiTransaksi && buktiTransaksi.size > 5 * 1024 * 1024) { // 5MB dalam byte
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Bukti transaksi tidak boleh lebih dari 5 MB',
                });
                return; // Berhenti, jangan kirim form
            }

            // Buat FormData untuk pengiriman data ke server
            const formData = new FormData(this);

            // Kirim data menggunakan fetch
            fetch('{{ route('pembayaran.storePembayaran') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Jika sukses, ambil response dalam format JSON
                })
                .then(data => {
                    // Tampilkan SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data pembayaran berhasil masuk!',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Hapus local storage
                            localStorage.clear();

                            // Redirect ke halaman profile setelah delay
                            setTimeout(() => {
                                window.location.href = '/riwayat'; // Redirect ke profile
                            }, 500);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: error.message || 'Terjadi kesalahan saat mengirim data pembayaran!',
                    });
                });
        });


        document.getElementById('bukti_transaksi').addEventListener('change', function() {
            // Ambil elemen span untuk menampilkan nama file
            const fileNameElement = document.getElementById('file-name');

            // Ambil file yang dipilih
            const file = this.files[0];

            // Cek jika ada file yang dipilih
            if (file) {
                // Tampilkan nama file
                fileNameElement.textContent = file.name;
            } else {
                // Reset teks jika tidak ada file
                fileNameElement.textContent = '';
            }
        });

        function tampilkanPembayaran() {
            // Ambil data keranjang dari localStorage
            let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];

            // Ambil elemen untuk menampilkan daftar produk
            let produkList = document.getElementById('produk-list');

            // Inisialisasi total harga dan total produk
            let totalHarga = 0;
            let totalProduk = 0;

            // Buat daftar produk beserta kuantitas
            produkList.innerHTML = keranjang.map(item => {
                let subtotal = item.harga * item.jumlah; // Hitung subtotal per produk
                totalHarga += subtotal; // Tambahkan ke total harga
                totalProduk += item.jumlah; // Tambahkan ke total produk

                return `
            <div class="total-area">
                <h6 class="mb-0 fs-4">${item.nama}</h6>
                <span class="total-price fs-4">x${item.jumlah}</span>
                <span class="total-price fs-4">Rp${Number(item.harga).toLocaleString('id-ID')}</span>
            </div>`;
            }).join('');

            // Tampilkan total harga di halaman
            document.getElementById('total-price').innerText = `Rp${Number(totalHarga).toLocaleString('id-ID')}`;
            document.getElementById('total_biaya_transaksi').value = totalHarga;

            // Set total produk dan tanggal pemesanan
            document.getElementById('total_produk').value = totalProduk;

            // Mengambil tanggal dan waktu sekarang
            const now = new Date();
            const formattedDate = now.toISOString().slice(0, 16).replace('T', ' '); // Format YYYY-MM-DD HH:MM:SS
            document.getElementById('tanggal_pemesanan').value = formattedDate;
        }

        // Panggil fungsi untuk menampilkan produk dan total harga saat halaman dimuat
        window.onload = tampilkanPembayaran;
    </script>

</body>

</html>
