<?php
// dosen/dashboard.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'dosen') {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../root/assets/css/dosendashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="d-flex">
        <div class="sidebar bg-dark text-white p-3">
            <h4 class="text-center">C-NUFI</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><i class="bi bi-person-lines-fill"></i> Kelola Pengguna</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><i class="bi bi-calendar-check-fill"></i> Jadwal Bimbingan</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><i class="bi bi-gear-fill"></i> Pengaturan</a>
                </li>
            </ul>
            <button onclick="window.location.href='../root/logout.php';" class="btn btn-danger mt-auto">Logout</button>
        </div>

        <!-- Main Content -->
        <div class="content flex-grow-1 p-4">
            <div class="header bg-primary text-white p-3 rounded">
                <h3>Hai, Pak Nufi</h3>
                <p>Setiap bimbingan yang Anda lakukan adalah langkah penting dalam mencetak generasi akademisi yang berkualitas.</p>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Pengajuan Bimbingan</h5>
                            <p class="card-text">20 diterima | 205 pengajuan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Bimbingan</h5>
                            <p class="card-text">2 hari lagi | 20 jadwal</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h4>Kalender</h4>
                <div class="calendar bg-light p-3 rounded shadow">
                    <p>Desember 2024</p>
                    <!-- You can replace this with a real calendar plugin -->
                </div>
            </div>

            <div class="mt-4 text-center">
                <h4>SEMANGAT!</h4>
                <img src="../root/assets/images/images (4).jpeg" alt="Motivasi" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>