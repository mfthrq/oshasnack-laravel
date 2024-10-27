<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oshasnack | Kontak</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/assets_customer/images/logo_oshasnack.jpg"
    />
    <link rel="stylesheet" href="assets/assets_customer/css/plugins/gordita.css">
    <link rel="stylesheet" href="assets/assets_customer/css/plugins/fontawesome-pro-icons.css">
    <link rel="stylesheet" href="assets/assets_customer/css/vendor/swiper.css">
    <link rel="stylesheet" href="assets/assets_customer/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/assets_customer/css/vendor/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/assets_customer/css/style.css">
</head>

<body class="rt_bg-secondary">

    @include('layouts.navbar-customer') 

    <!-- start get in touch area -->
    <div class="rts-getin-touch mt-5 rts-section-gapBottom about-shape">
        <div class="container">
            <div class="row g-5">
                <!-- single get in touch -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="rts-gt-wrapper text-center" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                        <div class="thumbnail">
                            <img src="assets/assets_customer/images/icon/contact/01.png" alt="Nft_contact">
                        </div>
                            <h6 class="title">Kontak WhatsApp</h6>
                        </a>
                        <a href="https://wa.me/6285697599248">
                            <h6 class="title mb--0 fs-4">0856-9759-9248</h6>
                        </a>
                    </div>
                </div>
                <!-- single get in touch -->
                <!-- single get in touch -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="rts-gt-wrapper text-center" data-sal-delay="400" data-sal-duration="800" data-sal="slide-up">
                        <div class="thumbnail">
                            <img src="assets/assets_customer/images/icon/contact/03.png" alt="Nft_contact">
                        </div>
                            <h6 class="title">Email</h6>
                        </a>
                        <a href="mailto:randyraharja1989@gmail.com">
                            <h6 class="title mb--0 fs-4">randyraharja1989@gmail.com</h6>
                        </a>
                    </div>
                </div>
                <!-- single get in touch -->
                <!-- single get in touch -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="rts-gt-wrapper text-center" data-sal-delay="500" data-sal-duration="800" data-sal="slide-up">
                        <div class="thumbnail">
                            <img src="assets/assets_customer/images/icon/contact/02.png" alt="Nft_contact">
                        </div>
                            <h6 class="title"> Alamat </h6>
                        <a href="https://www.google.com/maps/search/Komplek+IPB+Baranang+Siang+4,Jalan+Mendut+51,Tanah+Baru,+Bogor,+Jawa+Barat,+16154+Indonesia/@-6.5924585,106.8171715,17z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTAwNy4xIKXMDSoASAFQAw%3D%3D">
                            <h6 class="title mb--0 fs-4"> Komplek IPB Baranang Siang 4 Jalan Mendut 51 Tanah Baru, Bogor </h6>
                        </a>
                    </div>
                </div>
                <!-- single get in touch -->
                <!-- single get in touch -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="rts-gt-wrapper text-center" data-sal-delay="600" data-sal-duration="800" data-sal="slide-up">
                        <div class="thumbnail">
                            <img src="assets/assets_customer/images/icon/contact/04.png" alt="Nft_contact">
                        </div>
                            <h6 class="title"> Buka Setiap Hari </h6>
                            <h6 class="title mb--0 fs-4"> 24 Jam </h6>
                    </div>
                </div>
                <!-- single get in touch -->
            </div>
        </div>
    </div>
    <!-- end get in touch area -->

    <!-- send message section -->
    <div class="rts-send-message-section rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <!-- message area start -->
                <div class="col-lg-6">
                    <div class="meassage-wrapper">
                        <h3 class="title mb--40" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                            Kirimkan Kami <span style="color: #FEC10E;">Pesan</span>
                        </h3>
                        <div id="form-messages"></div>
                        <form id="contact-form">
                            <div class="row g-5">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                        <label for="contact-name">Nama</label>
                                        <input class="form-control" placeholder="Masukan Nama" name="contact-name" id="contact-name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group" data-sal-delay="400" data-sal-duration="800" data-sal="slide-up">
                                        <label for="contact-names">Email</label>
                                        <input class="form-control" placeholder="Masukan Alamat Email" name="contact-email" id="contact-email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt--15">
                                    <div class="form-group" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                        <label for="contact-message">Pesan</label>
                                        <textarea name="contact-message" id="contact-message" placeholder="Tuliskan Pesanmu"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt--20">
                                <div class="col-12">
                                    <div class="text-start" data-sal-delay="300" data-sal-duration="800" data-sal="slide-up">
                                        <button id="send-whatsapp" class="fw-bold rts-btn btn-primary" style="color: #771e56;">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- contact image area start -->
                <div class="justify-content-center col-lg-6">
                    <div class="contact-thumbnail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.640058170458!2d106.80179219770808!3d-6.595856194365523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d5fbb74fb5%3A0x4b4917dbc15a2f6f!2sCR58%2BGWV%2C%20Jl.%20Komp.%20Ipb%20Jl.%20Mendut%20No.4%2C%20RT.03%2FRW.10%2C%20Tanah%20Baru%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016154!5e0!3m2!1sid!2sid!4v1728550973369!5m2!1sid!2sid" width="500" height="500" style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- contact image area End -->
            </div>
        </div>
    </div>
    <!-- send message section End -->

    <!-- start header area -->

    <!-- ENd Header Area -->

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
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('send-whatsapp').addEventListener('click', function(event) {
                event.preventDefault();
    
                var name = document.getElementById('contact-name').value;
                var email = document.getElementById('contact-email').value;
                var message = document.getElementById('contact-message').value;
    
                if (name === "" || email === "" || message === "") {
                    alert("Harap isi semua field sebelum mengirim pesan.");
                    return;
                }
    
                var whatsappMessage = "Halo, nama saya " + name + ". Email saya: " + email + ". Saya ingin mengirim pesan: " + message;
                var phoneNumber = "6285697599248"; // Nomor WhatsApp tujuan
                var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(whatsappMessage);
    
                window.open(whatsappURL, '_blank');
            });
        });
    </script>
    
    
</body>

</html>