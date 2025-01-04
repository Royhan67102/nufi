<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Tugas</title>
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
      <h1 class="text-center mb-4">Daftar Tugas</h1>
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
      const tugas = JSON.parse(localStorage.getItem("tugas")) || [];
      const daftarTugas = document.getElementById("daftarTugas");

      // Urutkan tugas berdasarkan tanggal (paling dekat ke paling jauh)
      tugas.sort((a, b) => new Date(a.tanggal) - new Date(b.tanggal));

      // Tambahkan status untuk tugas (jika belum ada)
      tugas.forEach((item) => {
        if (!item.status) {
          item.status = "Pending"; // Default status
        }
      });

      // Tampilkan tugas berdasarkan prioritas
      tugas.forEach((item) => {
        const now = new Date();
        const deadline = new Date(item.tanggal);
        const timeDiff = Math.ceil((deadline - now) / (1000 * 60 * 60 * 24)); // Hitung selisih hari

        const card = document.createElement("div");
        card.className = "col-lg-4 col-md-6 col-12";
        card.innerHTML = `
                <div class="card shadow-sm ${
                  timeDiff <= 3 ? "border-danger" : "border-primary"
                }">
                    <div class="card-body">
                        <h5 class="card-title">${item.judul}</h5>
                        <p class="card-text"><strong>Deadline:</strong> ${
                          item.tanggal
                        } (${
          timeDiff > 0 ? timeDiff + " hari lagi" : "Sudah lewat"
        })</p>
                        <p class="card-text">${item.deskripsi}</p>
                        <span class="badge ${
                          item.status === "Completed"
                            ? "bg-success"
                            : "bg-danger"
                        }">${item.status}</span>
                        <button class="btn btn-sm btn-outline-primary mt-2 update-status" data-id="${tugas.indexOf(
                          item
                        )}">Ubah Status</button>
                    </div>
                </div>
            `;
        daftarTugas.appendChild(card);
      });

      // Event Listener untuk tombol ubah status
      document.querySelectorAll(".update-status").forEach((button) => {
        button.addEventListener("click", (event) => {
          const id = event.target.getAttribute("data-id");
          tugas[id].status =
            tugas[id].status === "Pending" ? "Completed" : "Pending";

          // Simpan perubahan ke localStorage
          localStorage.setItem("tugas", JSON.stringify(tugas));

          // Reload halaman untuk memperbarui tampilan
          location.reload();
        });
      });
    </script>
  </body>
</html>