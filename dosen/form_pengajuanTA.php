<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Pengajuan TA</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/tambahan.css" />
    <link rel="stylesheet" href="assets/css/profil.css" />


</head>

<body style="background-color: #61a0db;">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area" >
        <div class="container">
     
                        <nav class="navbar navbar-expand-lg" >
                            <div class="button add-list-button" style="margin-top: 20px; margin-left: -60px;">
                                <a href="tampilan.php" class="btn">Kembali</a>
                            </div>
                        </nav>
                     

        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
    </section>

    <!-- End Hero Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center">
                        <h2>Pengajuan Jadwal Bimbingan</h2>
                        <p>Isi formulir di bawah ini untuk mengajukan jadwal bimbingan tugas akhir Anda.</p>
                    </div>
                    <div class="form-container">
                        <form action="submit_bimbingan.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Tugas Akhir</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul tugas akhir" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Bimbingan</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="jam" class="form-label">Jam Bimbingan</label>
                                <input type="time" class="form-control" id="jam" name="jam" required>
                            </div>
                            <div class="mb-3">
                                <label for="dosen" class="form-label">Dosen Pembimbing</label>
                                <select class="form-select" id="dosen" name="dosen" required>
                                    <option selected disabled>Pilih dosen pembimbing</option>
                                    <option value="Dr. Ahmad">Dr. Ahmad</option>
                                    <option value="Dr. Rina">Dr. Rina</option>
                                    <option value="Dr. Budi">Dr. Budi</option>
                                    <option value="Dr. Siti">Dr. Siti</option>
                                </select>
                            </div>
                            <form action="submit_bimbingan.php" method="POST">
                                    <button type="submit" class="btn">Ajukan</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</div>

    <!-- ========================= scroll-top ========================= -->


    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>