<?php
// admin/dashboard.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../index.php');  // Gunakan path absolut
    exit;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Profil</title>
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

    <!-- Logout Button -->
    <div style="position: absolute; top: 10px; right: 10px; z-index: 1000;">
        <a href="../root/logout.php" class="btn btn-danger">
            <i class="lni lni-exit"></i> Logout
        </a>
    </div>

    <!-- Your existing content here -->

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

   <div class="profile-container">
    <div class="profile-card">
        <div class="profile-avatar">
            <div class="avatar-circle">
                <span class="avatar-icon">&#128100;</span>
            </div>
        </div>
        <div class="profile-info">
            <h2>Nufian</h2>
            <hr>
            <div class="info-box">
                <p><strong>NIM</strong>: 0110223000</p>
                <p><strong>Nama</strong>: Muhammad Nufian</p>
                <p><strong>Program Studi</strong>: Teknik Informatika</p>
                <p><strong>Status Mahasiswa</strong>: Aktif</p>
            </div>
        </div>
        <button class="edit-profile">Edit Profil</button>
    </div>
</div>
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