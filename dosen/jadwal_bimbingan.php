<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Jadwal Bimbingan</title>
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
    <style>

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header .title {
            font-size: 24px;
            font-weight: bold;
        }

        .header .date {
            font-size: 18px;
            color: #000000;
        }


        .schedule {
            margin-bottom: 20px;
        }

        .schedule-item {
            background: #ffffff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .schedule-details {
            display: flex;
            flex-direction: column;
        }

        .schedule-details span {
            font-size: 16px;
            color: #333;
        }


        .schedule-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .schedule-actions i {
            font-size: 18px;
            color: #61a0db;
            cursor: pointer;
        }

        .schedule-status {
            font-size: 14px;
            color: red;
        }

        .add-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: #61a0db;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .add-button:hover {
            background: #61a0db;
        }
    </style>

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
                                        <a href="tampilan.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tugas.php">Tugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" 
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
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ada Jadwal Bimbingan Hari Ini?
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header">
                    <div class="title">Jadwal Hari Ini</div>
                    <div class="date">12 Des, 2024</div>
                </div>
        
        
                <div class="schedule">
                    <div class="schedule-item">
                        <div class="schedule-details">
                            <span><b>Bimbingan TA</b></span>
                            <span>Dosen Pembimbing: Dr. Sirojul Munir M.T.I</span>
                            <span>Kegiatan: Membahas Bab 3</span>
                            <span class="schedule-location">📍 B2 - 206</span>
                        </div>
                        <div class="schedule-actions">
                            <span class="schedule-status">4 hari 12 jam lagi</span>
                            <i>✏️</i>
                            <i>✅</i>
                        </div>
                    </div>
        
                    <div class="schedule-item">
                        <div class="schedule-details">
                            <span><b>Bimbingan TA</b></span>
                            <span>Dosen Pembimbing: Dr. Sirojul Munir M.T.I</span>
                            <span>Kegiatan: Membahas Metodologi</span>
                            <span class="schedule-location">📍 B3 - 102</span>
                        </div>
                        <div class="schedule-actions">
                            <span class="schedule-status"></span>
                            <i>✏️</i>
                            <i>✅</i>
                        </div>
                    </div>
                </div>
        
                <div class="add-button">
                    <a href="form_pengajuanTA.php">+</a></div>
            </div>
    </section>
    

    <!-- End Features Area -->

    

 

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