<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #F8F9FA">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="Beranda">Animal Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" aria-current="page" href="Beranda">Beranda</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Tentang">Tentang</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Layanan">Layanan</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Blog">Blog</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-sm d-flex justify-content-center align-items-start" style="width: 70%; margin-top: 7em">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.2553323234824!2d98.65148869295523!3d3.598089007348041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fc998030c01%3A0x6bf9b44cff7e881b!2sUNPRI%20AYAHANDA%20MEDAN!5e0!3m2!1sid!2sid!4v1731554600394!5m2!1sid!2sid" width="1500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        
        <div class="card ms-5" style="width: 75rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3 pt-3">Hubungi Kami</h5>
                <p class="card-text text-center fs-5">Jl. Ayahanda No.51-55 Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118</p>

                <div class="d-flex justify-content-center align-items-center">
                    <a href="https://www.instagram.com/unpri_medan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="card-link btn btn-primary mx-3"><i class="bi bi-instagram fs-5" style="color: #fff"></i><span class="fs-5 ps-2">unpri_mdn</span></a>

                    <a href="https://www.tiktok.com/@joinunpri?_t=8rNQpmMCoMh&_r=1" target="blank" class="card-link btn btn-primary mx-3"><i class="bi bi-tiktok fs-5" style="color: #fff"></i><span class="fs-5 ps-2">joinunpri</span></a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href="https://unprimdn.ac.id/" target="blank" class="card-link btn btn-primary mx-3"><i class="bi bi-browser-chrome fs-5" style="color: #fff"></i><span class="fs-5 ps-2">unprimdn.ac.id</span></a>
                </div>
            </div>
        </div>

    </div>



    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>