<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Produk</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo_oshasnack.jpg') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

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
                    <h2 class="geex-content__header__title">Data Produk</h2>
                </div>

                @include('layouts.header')
            </div>

            <div class="d-flex justify-content-end">
                <button class="mb-3 geex-btn geex-btn--primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class="uil-plus"></i> Tambah Data
                </button>
            </div>

            <div class="geex-content__section geex-content__form table-responsive">
                <table class="table-reviews-geex-1">
                    <thead>
                        <tr style="width: 100%">
                            <th style="width: 20%">No</th>
                            <th style="width: 20%">Nama</th>
                            <th style="width: 20%">Deskripsi</th>
                            <th style="width: 20%">Komposisi</th>
                            <th style="width: 20%">Keunggulan</th>
                            <th style="width: 20%">Harga</th>
                            <th style="width: 20%">Foto</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($produks->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">Data tidak ada.</td>
                            </tr>
                        @else
                            @foreach ($produks as $index => $produk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>
                                        <div style="max-height: 100px; overflow-y: auto;">
                                            {{ $produk->deskripsi }}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="max-height: 100px; overflow-y: auto;">
                                            {{ $produk->komposisi }}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="max-height: 100px; overflow-y: auto;">
                                            {{ $produk->keunggulan }}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="max-height: 100px; overflow-y: auto;">
                                            {{ $produk->harga }}
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('assets/foto_produk/' . $produk->foto_produk) }}"
                                            alt="Foto Produk" width="100">
                                    </td>
                                    <td class="d-flex">
                                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST"
                                            onsubmit="return confirmDelete();">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="geex-btn geex-btn--danger"> Hapus</button>
                                        </form>
                                        <button class="ms-2 geex-btn edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#formModalEdit" data-id="{{ $produk->id }}"
                                            data-nama="{{ $produk->nama }}" data-deskripsi="{{ $produk->deskripsi }}"
                                            data-komposisi="{{ $produk->komposisi }}"
                                            data-keunggulan="{{ $produk->keunggulan }}"
                                            data-harga="{{ $produk->harga }}"
                                            data-foto_produk="{{ $produk->foto_produk }}"
                                            style="background-color: #FEC10F;">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/jquery/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- endinject-->
    @if (session('success'))
        <script>
            Swal.fire("Berhasil!", "{{ session('success') }}", "success");
        </script>
    @endif

    <script>
        function confirmDelete() {
            return confirm('Yakin ingin menghapus data?');
        }
    </script>
</body>

<!-- Modal Insert -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="formModalLabel">Tambah Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="closeModalBtn"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk input data produk -->
                <form action="{{ route('produk.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan Nama Produk" type="nama" name="nama"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div class="geex-content__form__single__box mb-20">
                            <textarea type="text" placeholder="Masukkan Deskripsi Produk" name="deskripsi" class="form-control"
                                rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="komposisi" class="form-label">Komposisi</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan Komposisi Produk" type="text"
                                name="komposisi" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keunggulan" class="form-label">Keunggulan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" class="form-control" name="keunggulan"
                                placeholder="Masukkan Keunggulan Produk" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="number" class="form-control" name="harga"
                                placeholder="Masukkan Harga Produk" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto_produk" class="form-label">Foto Produk</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" name="foto_produk" id="foto_produk"
                                placeholder="Masukkan Foto Produk" required accept="image/*">
                        </div>
                    </div>
                    <button type="submit" class="geex-btn geex-btn--primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="formModalEdit" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="formModalLabel">Edit Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="closeModalBtnEdit"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk input data pelanggan -->
                <form method="POST" id="editForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan Nama Produk" id="editNama" type="nama"
                                name="nama" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div class="geex-content__form__single__box mb-20">
                            <textarea type="text" placeholder="Masukkan Deskripsi Produk" id="editDeskripsi" name="deskripsi"
                                class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="komposisi" class="form-label">Komposisi</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan Komposisi Produk" id="editKomposisi"
                                type="text" name="komposisi" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keunggulan" class="form-label">Keunggulan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" class="form-control" id="editKeunggulan" type="text"
                                name="keunggulan" placeholder="Masukkan Keunggulan Produk" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="number" class="form-control" id="editHarga" name="harga"
                                placeholder="Masukkan Harga Produk" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto_produk" class="form-label">Foto Produk</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" id="editFotoProduk" name="foto_produk">
                        </div>
                        <!-- Preview gambar yang sedang digunakan -->
                        <img id="currentFotoProduk" src="" alt="Foto Produk" width="100" class="mt-2">
                    </div>
                    <button type="submit" class="geex-btn geex-btn--primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const deskripsi = this.getAttribute('data-deskripsi');
            const komposisi = this.getAttribute('data-komposisi');
            const keunggulan = this.getAttribute('data-keunggulan');
            const harga = this.getAttribute('data-harga');
            const foto_produk = this.getAttribute('data-foto_produk');

            // Set value input di modal
            document.getElementById('editId').value = id;
            document.getElementById('editNama').value = nama;
            document.getElementById('editDeskripsi').value = deskripsi;
            document.getElementById('editKomposisi').value = komposisi;
            document.getElementById('editKeunggulan').value = keunggulan;
            document.getElementById('editHarga').value = harga;

            // Set src dari gambar saat ini
            document.getElementById('currentFotoProduk').src = `/assets/foto_produk/${foto_produk}`;

            // Update action URL form edit
            document.getElementById('editForm').action = `/admin/produk/${id}`;
        });
    });
</script>

<script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
        var fileInput = document.getElementById('foto_produk');
        var file = fileInput.files[0];

        if (file && file.size > 5048 * 1024) { // 5048 KB = 5MB
            e.preventDefault(); // Mencegah submit form

            // Simulasikan klik tombol close
            document.getElementById('closeModalBtn').click();

            // Setelah modal ditutup, tampilkan SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'File tidak dapat lebih dari 5MB!'
            });
        }
    });

    document.getElementById('editForm').addEventListener('submit', function(e) {
        var fileInput = document.getElementById('editFotoProduk');
        var file = fileInput.files[0];

        if (file && file.size > 5048 * 1024) { // 5048 KB = 5MB
            e.preventDefault(); // Mencegah submit form

            // Simulasikan klik tombol close
            document.getElementById('closeModalBtnEdit').click();

            // Setelah modal ditutup, tampilkan SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'File tidak dapat lebih dari 5MB!'
            });
        }
    });
</script>

</html>
