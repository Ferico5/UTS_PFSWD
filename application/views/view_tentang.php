<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tentang</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        @media (max-width: 768px) {
            .container-sm {
                flex-direction: column;
                width: 90%;
                margin-top: 5em;
            }

            h3 {
                font-size: 1.5em;
            }

            p {
                font-size: 1em;
                line-height: 1.5;
                width: 150%;
            }
        }
    </style>
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
                        <a class="nav-link active" href="#">Tentang</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Layanan">Layanan</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Blog">Blog</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-sm d-flex justify-content-center align-items-center" style="width: 70%; margin-top: 7em">
        <img src="<?= base_url('public/img/tentang.jpg'); ?>" class="d-block mx-4 object-fit-cover" alt="img-1" style="width: 400px; height: 400px">
        
        <div class="container-sm d-flex flex-column justify-content-center align-items-center">
            <h3>Tentang Kami</h3>

            <p class="text-center mt-3">Selamat datang di Animal Clinic, tempat di mana kesehatan dan kebahagiaan hewan peliharaan Anda adalah prioritas kami. Kami menyediakan layanan kesehatan hewan, termasuk pemeriksaan rutin, vaksinasi, dan perawatan darurat, dengan tim dokter hewan berpengalaman dan penuh kasih.</p>

            <p class="text-center mt-1">Klinik kami dilengkapi dengan fasilitas modern untuk memastikan hewan peliharaan Anda mendapatkan perawatan terbaik. Kami juga berkomitmen untuk membantu pemilik hewan memahami cara menjaga kesejahteraan hewan mereka, karena kami percaya setiap hewan berhak mendapatkan perhatian dan kasih sayang terbaik.</p>
        </div>
    </div>



    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>