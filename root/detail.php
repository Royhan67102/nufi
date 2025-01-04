<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/detail.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container text-center">
            <a href="tampilan.php">
                <img src="assets/images/logo/logo.png" alt="Logo">
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card detail-card">
                    <div class="card-body">
                        <!-- Title -->
                        <h2 id="task-title" class="card-title">Detail Tugas</h2>
                        <hr class="divider">
                        <!-- Tanggal Pengumpulan -->
                        <p><strong>Tanggal Pengumpulan:</strong> <span id="task-date"></span></p>
                        <p><strong>Sisa Waktu:</strong> <span id="task-time"></span></p>
                        <hr class="divider">
                        <!-- Deskripsi -->
                        <p><strong>Deskripsi:</strong></p>
                        <p id="task-desc"></p>
                        <!-- Status -->
                        <p><strong>Status:</strong> <span id="task-status"></span></p>
                        <a href="tampilan.php" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
      // Data tugas
      const tasks = {
        bigdata: {
          title: "Tugas Big Data",
          date: "20-12-2024",
          time: "3 hari 2 jam",
          desc: "Kerjakan analisis data besar menggunakan dataset yang telah disediakan.",
          status: "Belum Selesai",
        },
        bimbinganta: {
          title: "Bimbingan TA",
          date: "20-12-2024",
          time: "3 hari 2 jam",
          desc: "Diskusi bimbingan di ruang A-204. Waktu: 13.00 - 15.30.",
          status: "Menunggu",
        },
        tbo: {
          title: "Tugas TBO",
          date: "25-12-2024",
          time: "7 hari 2 jam",
          desc: "Buat laporan terkait Teori Bahasa dan Otomata dengan format yang telah disediakan.",
          status: "Belum Selesai",
        },

        mentoring: {
          title: "Mentoring",
          date: "01-01-2025",
          time: "12 hari 2 jam",
          desc: "Diskusi mentoring.", // tambahkan koma
          status: "Menunggu",
        },
        diskusiprop: {
          title: "Diskusi Proposal",
          date: "25-02-2025",
          time: "14 hari 1 jam",
          desc: "Diskusikan proposal penelitian atau proyek bersama dosen pembimbing.",
          status: "Belum Dimulai",
        },
        bigdata: {
          title: "Tugas Big Data",
          date: "20-12-2024",
          time: "3 hari 2 jam",
          desc: "Kerjakan analisis data besar menggunakan dataset yang telah disediakan.",
          status: "Belum Selesai",
        },
      };

      // Ambil parameter dari URL
      const urlParams = new URLSearchParams(window.location.search);
      const taskKey = urlParams.get("task");

      // Tampilkan detail tugas berdasarkan parameter
      if (tasks[taskKey]) {
        document.getElementById("task-title").textContent =
          tasks[taskKey].title;
        document.getElementById("task-date").textContent = tasks[taskKey].date;
        document.getElementById("task-time").textContent = tasks[taskKey].time;
        document.getElementById("task-desc").textContent = tasks[taskKey].desc;
        document.getElementById("task-status").textContent =
          tasks[taskKey].status;
      } else {

        document.querySelector(".card-body").innerHTML =
          "<p>Tugas tidak ditemukan!</p>";
      }
    </script>
  </body>
</html>
