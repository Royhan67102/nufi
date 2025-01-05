<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Bimbingan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/detail.css" />
  </head>

  <body>
    <!-- Header -->
    <header class="header">
      <div class="container text-center">
        <a href="index.php">
          <img src="assets/images/logo/logo.png" alt="Logo" />
        </a>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container mt-5">
      <h1 class="text-center mb-4">Jadwal Bimbingan</h1>
      <div id="daftarTugas" class="row g-3">
        <!-- Tugas akan ditampilkan di sini -->
      </div>

      <!-- Button Kembali -->
      <div class="text-center mt-4">
        <a href="tampilan.php" class="btn btn-secondary">Kembali</a>
      </div>
    </main>

    <script>
    // Ambil daftar tugas dari localStorage
    const jadwal = JSON.parse(localStorage.getItem("jadwal")) || [];
    const daftarTugas = document.getElementById("daftarTugas");

    // Urutkan tugas berdasarkan tanggal (paling dekat ke paling jauh)
    jadwal.sort((a, b) => new Date(a.tanggal) - new Date(b.tanggal));

    // Tampilkan tugas berdasarkan jadwal
    jadwal.forEach((item) => {
        const now = new Date();
        const deadline = new Date(item.tanggal);
        const timeDiff = Math.ceil((deadline - now) / (1000 * 60 * 60 * 24)); // Hitung selisih hari

        const card = document.createElement("div");
        card.className = "col-lg-4 col-md-6 col-12";
        card.innerHTML = `
            <div class="card shadow-sm ${timeDiff <= 3 ? "border-danger" : "border-primary"}">
                <div class="card-body">
                    <h5 class="card-title">${item.judul}</h5>
                    <p class="card-text"><strong>Nama:</strong> ${item.nama}</p>
                    <p class="card-text"><strong>NIM:</strong> ${item.nim}</p>
                    <p class="card-text"><strong>Waktu:</strong> ${item.waktu}</p>
                    <p class="card-text"><strong>Tanggal:</strong> ${item.tanggal} (${timeDiff > 0 ? timeDiff + " hari lagi" : "Sudah lewat"})</p>
                    <p class="card-text"><strong>Dosen:</strong> ${item.dosen}</p>
                </div>
            </div>
        `;
        daftarTugas.appendChild(card);
    });
</script>

  </body>
</html>