<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pegajuan</title>
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
        <h1 class="text-center mb-4" style="font-size: 2rem; margin-top: 20px;">Pengajuan Jadwal Bimbingan TA</h1>
        <p>Isi formulir di bawah ini untuk mengajukan jadwal bimbingan Tugas Akhir Kamu.</p>
        <form id="tambahTugasForm" class="shadow-sm p-4 bg-white rounded">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control form-control-sm"
                    placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" class="form-control form-control-sm"
                    placeholder="011022xxxx" required>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Tugas Akhir</label>
                <input type="text" id="judul" name="judul" class="form-control form-control-sm"
                    placeholder="Judul" required>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Bimbingan</label>
                <input type="time" id="waktu" name="waktu" class="form-control form-control-sm" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Bimbingan</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control form-control-sm" required>
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
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Ajukan</button>
                <a href="jadwal_bimbingan.php" class="btn btn-secondary">Lihat Jadwal Bimbingan</a>
            </div>
        </form>
    </main>

    <!-- Notifikasi -->
    <div id="notification" style="display: none; position: fixed; top: 20px; right: 20px; z-index: 1000; background: #007bff; color: white; padding: 10px 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        Jadwal berhasil diajukan! Tunggu di acc yaa
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
        const nama = document.getElementById("nama").value;
        const nim = document.getElementById("nim").value;
        const judul = document.getElementById("judul").value;
        const waktu = document.getElementById("waktu").value;
        const tanggal = document.getElementById("tanggal").value;
        const dosen = document.getElementById("dosen").value;

        // Simpan data tugas ke localStorage
        const jadwal = JSON.parse(localStorage.getItem("jadwal")) || [];
        jadwal.push({ nama, nim, judul, waktu, tanggal, dosen });
        localStorage.setItem("jadwal", JSON.stringify(jadwal));

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
