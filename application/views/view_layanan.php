<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Layanan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
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
                        <a class="nav-link active" href="#">Layanan</a>
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

    <div class="container-sm" style="width: 70%; margin-top: 7em">
        <div class="row">
            <?php foreach ($data->result() as $i => $row): ?>
                <div class="col-md-4 d-flex justify-content-center mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $row->gambar_layanan; ?>" class="card-img-top" alt="Layanan <?= $i + 1 ?>" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Layanan <?= $i + 1 ?></h5>
                            <p class="card-text"><?= $row->deskripsi_layanan; ?></p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>