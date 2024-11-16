<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog</title>
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
                        <a class="nav-link" href="Layanan">Layanan</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link active" href="#">Blog</a>
                    </li>
                    <li class="nav-item px-3 fs-5">
                        <a class="nav-link" href="Kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex mt-5 px-5">
        <div class="container-md d-flex flex-column pt-5" style="width: 140%">
            <?php $i = 1; ?>
            <?php foreach ($data as $row): ?>
                <div class="container-fluid">
                    <p id="<?= $i ?>" style="scroll-margin-top: 3.3em;"></p>
                    <img src="<?= $row['gambar_blog']; ?>" class="d-block w-100" alt="img-1" width="800" height="400" style="border-radius: 15px">

                    <h3 class="mt-3 fs-4"><?= $row['judul_blog']; ?></h3>
                    <h6 class="mb-4 fs-6" style="color: #9FA3A6">Penulis: <?= $row['penulis_blog']; ?> | Tanggal: <?= date('d F Y', strtotime($row['tanggal_blog'])); ?></h6>

                    <p><?= $row['deskripsi_blog']; ?></p>
                    
                    <button type="button" class="btn btn-primary mb-4">Read More</button>
                </div>
            <?php  $i++; ?>
            <?php endforeach; ?>
        </div>

        <div class="container-sm d-flex flex-column pt-5">
            <h4 class="px-2">Blog Populer</h4>
            
            <?php $i = 1;?>
            <?php foreach ($data as $row): ?>
                <div class="container-fluid mt-2 mb-3">
                    <img src="<?= $row['gambar_blog']; ?>" class="d-block w-100" alt="img-1" width="400" height="200" style="border-radius: 15px">

                    <h3 class="mt-3 fs-4"><?= $row['judul_blog']; ?></h3>
                    <a href="#<?= $i ?>" style="scroll-margin-top: 1.5em"><button type="button" class="btn btn-primary">Read More</button></a>
                </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>



    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>