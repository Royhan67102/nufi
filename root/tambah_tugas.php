<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/detail.css">
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

    <!-- Main Content -->
    <main class="container mt-5">
        <h1 class="text-center mb-4" style="font-size: 2rem; margin-top: 20px;">Tambah Tugas</h1>
        <form id="tambahTugasForm" class="shadow-sm p-4 bg-white rounded">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Tugas</label>
                <input type="text" id="judul" name="judul" class="form-control form-control-sm"
                    placeholder="Masukkan judul tugas" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pengumpulan</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control form-control-sm" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control form-control-sm" rows="3"
                    placeholder="Masukkan deskripsi tugas" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Tambah Tugas</button>
                <a href="tugas.php" class="btn btn-secondary">Lihat Semua Tugas</a>
            </div>
        </form>
    </main>

    <!-- Notifikasi -->
    <div id="notification" style="display: none; position: fixed; top: 20px; right: 20px; z-index: 1000; background: #007bff; color: white; padding: 10px 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        Tugas berhasil ditambahkan!
    </div>

    <!-- Scripts -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        // Ambil form tambah tugas
        const form = document.getElementById("tambahTugasForm");

        // Saat form disubmit
        form.addEventListener("submit", (event) => {
            event.preventDefault();

            // Ambil data input
            const judul = document.getElementById("judul").value;
            const tanggal = document.getElementById("tanggal").value;
            const deskripsi = document.getElementById("deskripsi").value;

            // Simpan data tugas ke localStorage
            const tugas = JSON.parse(localStorage.getItem("tugas")) || [];
            tugas.push({ judul, tanggal, deskripsi });
            localStorage.setItem("tugas", JSON.stringify(tugas));

            // Tampilkan notifikasi
            const notification = document.getElementById("notification");
            notification.style.display = "block";
            setTimeout(() => {
                notification.style.display = "none";
            }, 3000);

            // Reset form
            form.reset();
        });
    </script>
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
