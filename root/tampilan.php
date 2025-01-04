<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Dashboard</title>
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


</head>

<body>

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
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="tampilan.php">
                                <img src="assets/images/logo/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll"
                                            aria-label="Toggle navigation">Tugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="jadwal_bimbingan.php" 
                                            aria-label="Toggle navigation">Jadwal Bimbingan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="profil.php">Profil</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                                <a href="form_pengajuanTA.php" class="btn">Buat Jadwal TA Yuk</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
                        <h1 data-wow-delay=".4s" style="text-align: left;  color: white;">Hai, Nufi</h1>
                        <p data-wow-delay=".6s" style="text-align: left;  color: white;">Semangat Nufi! Ketika tugas menumpuk dan waktu terasaa singkat ingatlah Fokus pada satu tugas dalam satu waktu. 
                            Jangan khawatirkan sempurna, tapi kerjakan sebisamu. Tiga hari adalah waktu yang cukup jika kamu melangkah dengan tekad.
                            Ingat, perjuangan hari ini adalah pintu menuju keberhasilan di masa depan. 🌟</p>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ada Tugas Apa Aja Nih?
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">

                        <h3>TUGAS BIG DATA</h3>
                        <p style="color: rgb(228, 114, 114);">DATE: 20-12-2024</p>
                        <br>
                        <P style="color: rgb(228, 114, 114);">3 hari 2 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=bigdata';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <h3>BIMBINGAN TA</h3>
                        <p style="color: rgb(228, 114, 114);">DATE: 20-12-2024</p>
                        <p style="color: rgb(228, 114, 114);">Lokasi : A-204</p>
                        <p style="color: rgb(228, 114, 114);">Waktu : 13.00 - 15.30</p>
                        <br>
                        <P style="color: rgb(228, 114, 114);">3 hari 2 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=bimbinganta';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <h3>TUGAS TBO</h3>
                        <p style="color: rgb(0, 0, 0);">DATE: 25-12-2024</p><br>
                        <P style="color: rgb(228, 114, 114);">7 hari 2 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=tbo';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <h3>MENTORING</h3>
                        <p style="color: rgb(0, 0, 0);">DATE: 01-01-2025</p><br>
                        <P style="color: rgb(228, 114, 114);">12 hari 2 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=mentoring';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <h3>DISKUSI PROPOSAL</h3>
                        <p style="color: rgb(0, 0, 0);">DATE: 25-02-2025</p><br>
                        <P style="color: rgb(228, 114, 114);">14 hari 1 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=diskusiprop';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <h3>TUGAS BIG DATA</h3>
                        <p style="color: rgb(2, 2, 2);">DATE: 20-12-2024</p><br>
                        <P style="color: rgb(228, 114, 114);">3 hari 2 jam lagi</P>
                        <button onclick="window.location.href='detail.php?task=bigdata';">Detail</button>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
        <br><br>
        <div class="button_container">
            <button class="tombol_button" onclick="window.location.href='tambah_tugas.php';">Tambah Tugas</button>
            <button class="tombol_button" onclick="window.location.href='tugas.php';">Lihat Semua Tugas</button>
            
        </div>
    </section>

    <!-- End Features Area -->

    <!-- Start Achievement Area -->
    <section class="our-achievement section" style=" display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <div class="container">
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <button class="prev" onclick="changeMonth(-1)">&#10094;</button>
                            <span id="month-year"></span>
                            <button class="next" onclick="changeMonth(1)">&#10095;</button>
                        </div>
                        <table id="calendar" class="calendar">
                            <thead>
                                <tr>
                                    <th>Sen</th>
                                    <th>Sel</th>
                                    <th>Rab</th>
                                    <th>Kam</th>
                                    <th>Jum</th>
                                    <th>Sab</th>
                                    <th>Min</th>
                                </tr>
                            </thead>
                            <tbody id="calendar-body">
                                <!-- Tanggal akan diisi melalui JavaScript -->
                            </tbody>
                        </table>
                    </div>
                    <script src="assets/js/script.js"></script>
        </div>

<div class="kuadran">
        <h1>Diagram Prioritas</h1>
    <div class="grid">
        <div class="quadrant1" id="priority">
            <h3>Deadline!</h3>
            <ul class="tasks"></ul>
        </div>
        <div class="quadrant2" id="important">
            <h3>Important!</h3>
            <ul class="tasks"></ul>
        </div>
        <div class="quadrant3" id="not-urgent">
            <h3>Have a time</h3>
            <ul class="tasks"></ul>
        </div>
        <div class="quadrant4" id="not-important">
            <h3>Not really</h3>
            <ul class="tasks"></ul>
        </div>
    </div>

    </div>

    <script src="assets/js/calender.js"></script>
    </section>
    <!-- End Achievement Area -->

 

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