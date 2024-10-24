<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Riwayat</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        /* Atur ukuran SweetAlert */
        .swal2-popup {
            width: 500px !important; /* Atur lebar popup sesuai kebutuhan */
            max-width: 90vw; /* Pastikan popup tidak melebihi lebar layar */
            font-size: 15px; /* Atur ukuran font di dalam popup */
        }

        /* Atur ukuran tombol OK */
        .swal2-confirm {
            font-size: 15px; /* Atur ukuran font tombol */
            padding: 10px 20px; /* Atur padding untuk tombol */
            min-width: 100px; /* Atur lebar minimum tombol */
            background-color: #771E56 !important; /* Atur warna latar belakang tombol */
            color: #fff; /* Atur warna teks tombol menjadi putih */
            border: none; /* Hapus border jika ada */
        }

        /* Ubah warna saat tombol hover */
        .swal2-confirm:hover {
            color: #771E56;
            background-color: #FEC10E !important; /* Warna latar belakang saat hover */
        }
    </style>
</head>

<body class="rt_bg-secondary">

    @include('layouts.navbar-customer')

    <!-- team details about area -->
    <div class="rts-team-details-area rts-section-gapBottom mt--35">
        <div class="container">
            <div class="row g-5 align-items-xxl-center align-items-lg-start">
                <!-- start details arae -->
                <div class="col-xl-12 col-lg-12 col-md-12 ml--30 mt_sm--50 mt_md--50 mt_lg--50 ml_sm--0">
                    <div class="team-details-wrapper">
                        <h3 class="title" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">Riwayat Pemesanan</h3>
                        <div class="box-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">No</span>
                                        </th>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">Tanggal Pemesanan</span>
                                        </th>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">Total Produk</span>
                                        </th>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">Total Biaya</span>
                                        </th>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">Bukti Transaksi</span>
                                        </th>
                                        <th>
                                            <span class="fw-bold" style="color: #FEC10E;">Status</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="ranking">
                                    @forelse ($pemesanans as $pemesanan)
                                        <tr class="color-light">
                                            <td><span>{{ $loop->iteration }}</span></td>
                                            <td><span>{{ $pemesanan->tanggal_pemesanan }}</span></td>
                                            <td><span>{{ $pemesanan->total_produk }}</span></td>
                                            <td><span>Rp{{ number_format($pemesanan->total_biaya_transaksi, 0, ',', '.') }}</span></td>
                                            <td>
                                                @if ($pemesanan->bukti_transaksi)
                                                    <img src="{{ asset('assets/bukti_transaksi/' . $pemesanan->bukti_transaksi) }}" alt="Bukti Transaksi" style="width: 100px;">
                                                @else
                                                    <span>Tidak ada bukti</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span style="font-size: 15px; border-radius: 10px;" class="badge {{ $pemesanan->status == 'Diverifikasi' ? 'bg-warning' : ($pemesanan->status == 'Berhasil' ? 'bg-success' : 'bg-danger') }}">
                                                    {{ $pemesanan->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" align="center"><span>Tidak ada riwayat pemesanan.</span></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!-- start details arae End -->
            </div>
        </div>
    </div>
    <!-- team details about area End -->


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

    @if(session('success'))
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
        function clearKeranjang() {
            localStorage.removeItem('keranjang');
        }
    </script>
</body>

<!-- Modal Edit-->
<div class="modal fade" id="formModalEdit" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #771e56;">
            <div class="modal-header">
                <h5 class="modal-title p-4" id="formModalLabel">Edit Data Profile</h5>
                <button style="background-color: #FEC10E;" type="button" class="me-4 btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <!-- Form untuk input data pelanggan -->
            <form class="login-wrapper w-100" id="editForm" method="POST" action="{{ route('profile-pelanggan.update', session('id')) }}">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ session('id') }}" name="id" id="editId">

                <div class="mb-3">
                    <label for="editEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ session('email') }}" name="email" id="editEmail" required>
                </div>

                <div class="mb-3">
                    <label for="editUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" value="{{ session('username') }}" name="username" id="editUsername" required>
                </div>

                <div class="mb-3">
                    <label for="editNoTelp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" value="{{ session('no_telp') }}" name="no_telp" id="editNoTelp" required>
                </div>

                <div class="mb-3">
                    <label for="editAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="{{ session('alamat') }}" name="alamat" id="editAlamat" required>
                </div>

                <div class="mb-3">
                    <label for="editPassword" class="form-label">Password (kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" class="form-control" name="password" id="editPassword" placeholder="Masukkan Password jika ingin mengganti">
                </div>

                <button type="submit" class="fw-bold rts-btn btn-primary radious-5 w-100"  style="color: #771e56;">Perbarui</button>
            </form>
        </div>
    </div>
</div>


</html>