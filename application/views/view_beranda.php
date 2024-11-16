<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body style="background-color: #F8F9FA">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="#">Animal Clinic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3 fs-5">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
                    <a class="nav-link" href="Kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade pt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?= base_url('public/img/image_1.jpg'); ?>" class="d-block w-100" alt="img-1" width="1200" height="400">
        </div>
        <div class="carousel-item">
        <img src="<?= base_url('public/img/image_2.jpg'); ?>" class="d-block w-100" alt="img-2" width="1200" height="400">
        </div>
        <div class="carousel-item">
        <img src="<?= base_url('public/img/image_3.jpg'); ?>" class="d-block w-100" alt="img-3" width="1200" height="400">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="container-sm d-flex flex-column align-items-center mt-5">
        <h3>Selamat datang di Animal Clinic</h3>

        <p class="text-center fs-5 mt-3">Kami adalah klinik hewan yang berkomitmen memberikan perawatan terbaik untuk kesehatan dan kesejahteraan hewan peliharaan Anda. Dengan tim dokter hewan yang berpengalaman dan fasilitas yang lengkap, kami siap melayani berbagai kebutuhan medis dan perawatan rutin bagi hewan kesayangan Anda. </p>

        <a href="Layanan"><button type="button" class="btn btn-primary mt-3">Cari Tahu Lebih Lanjut</button></a>
    </div>

    <br>
    

    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>